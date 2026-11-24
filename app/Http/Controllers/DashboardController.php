<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Subject;
use App\Models\Submission;
use App\Models\SubmissionFile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->isTeacher()) {
            return $this->teacherDashboard();
        }

        return $this->studentDashboard();
    }

    private function studentDashboard()
    {
        $user = Auth::user();
        $subjects = Subject::withCount([
            'assignments as active_assignments_count' => function ($q) {
                $q->where('status', 'active');
            },
            'submissions as my_submissions_count' => function ($q) use ($user) {
                $q->where('student_id', $user->id);
            }
        ])->get();

        // Tareas pendientes: asignaciones activas que el estudiante no ha entregado aún
        $deliveredAssignmentIds = Submission::where('student_id', $user->id)
            ->whereNotNull('assignment_id')
            ->pluck('assignment_id');

        $pendingAssignments = Assignment::with('subject', 'teacher')
            ->where('status', 'active')
            ->whereNotIn('id', $deliveredAssignmentIds)
            ->orderBy('due_date', 'asc')
            ->take(5)
            ->get();

        $recentSubmissions = Submission::with(['subject', 'files'])
            ->where('student_id', $user->id)
            ->orderBy('submitted_at', 'desc')
            ->take(6)
            ->get();

        $totalSubmissions = Submission::where('student_id', $user->id)->count();
        $reviewedSubmissions = Submission::where('student_id', $user->id)->where('status', 'reviewed')->count();
        $averageGrade = Submission::where('student_id', $user->id)->whereNotNull('grade')->avg('grade');

        return view('student.dashboard', compact(
            'subjects',
            'pendingAssignments',
            'recentSubmissions',
            'totalSubmissions',
            'reviewedSubmissions',
            'averageGrade'
        ));
    }

    private function teacherDashboard()
    {
        $subjects = Subject::withCount(['assignments', 'submissions'])->get();

        $pendingReviews = Submission::with(['subject', 'student', 'files', 'assignment'])
            ->where('status', 'submitted')
            ->orderBy('submitted_at', 'desc')
            ->get();

        $recentSubmissions = Submission::with(['subject', 'student', 'files', 'assignment'])
            ->orderBy('submitted_at', 'desc')
            ->take(10)
            ->get();

        $activeAssignments = Assignment::with(['subject', 'submissions'])
            ->where('status', 'active')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('teacher.dashboard', compact(
            'subjects',
            'pendingReviews',
            'recentSubmissions',
            'activeAssignments'
        ));
    }

    public function showSubject(Subject $subject)
    {
        $user = Auth::user();

        $assignments = Assignment::where('subject_id', $subject->id)
            ->where('status', 'active')
            ->orderBy('due_date', 'asc')
            ->get();

        $submissions = Submission::with(['files', 'assignment'])
            ->where('subject_id', $subject->id)
            ->when(!$user->isTeacher(), function ($q) use ($user) {
                $q->where('student_id', $user->id);
            })
            ->orderBy('submitted_at', 'desc')
            ->get();

        return view('subjects.show', compact('subject', 'assignments', 'submissions'));
    }

    public function submitHomework(Request $request)
    {
        $subject = Subject::findOrFail($request->input('subject_id'));
        $isMath = $subject->slug === 'matematica';

        $rules = [
            'subject_id' => 'required|exists:subjects,id',
            'assignment_id' => 'nullable|exists:assignments,id',
            'title' => 'required|string|max:255',
            'student_notes' => 'nullable|string',
        ];

        if ($isMath) {
            // Matemática: Título + Imagen obligatoria
            $rules['files'] = 'required|array|min:1';
            $rules['files.*'] = 'file|max:51200';
            $rules['link_url'] = 'nullable|string';
        } else {
            // Computación: Título + Enlace + Imagen opcional (nuleable)
            $rules['link_url'] = 'required|string|max:1000';
            $rules['files'] = 'nullable|array';
            $rules['files.*'] = 'nullable|file|max:51200';
        }

        $validated = $request->validate($rules);

        $submission = Submission::create([
            'subject_id' => $validated['subject_id'],
            'student_id' => Auth::id(),
            'assignment_id' => $validated['assignment_id'] ?? null,
            'title' => $validated['title'],
            'link_url' => $validated['link_url'] ?? null,
            'student_notes' => $validated['student_notes'] ?? null,
            'status' => 'submitted',
            'submitted_at' => now(),
        ]);

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                if (!$file) continue;
                $origName = $file->getClientOriginalName();
                $size = $file->getSize();
                $extension = strtolower($file->getClientOriginalExtension());

                $fileType = match ($extension) {
                    'jpg', 'jpeg', 'png', 'gif', 'webp' => 'image',
                    'pdf' => 'pdf',
                    'doc', 'docx' => 'doc',
                    'py', 'c', 'cpp', 'java', 'js', 'html', 'css', 'psc' => 'code',
                    'zip', 'rar', '7z' => 'zip',
                    default => 'file',
                };

                $path = $file->store('submissions/' . $submission->id, 'public');

                SubmissionFile::create([
                    'submission_id' => $submission->id,
                    'original_name' => $origName,
                    'file_path' => $path,
                    'file_size' => $size,
                    'file_type' => $fileType,
                ]);
            }
        }

        return redirect()->route('submission.show', $submission->id)
            ->with('success', '¡Deber subido con éxito! El profesor lo revisará pronto.');
    }

    public function showSubmission(Submission $submission)
    {
        $user = Auth::user();

        // Si es estudiante, verificar que sea suya
        if ($user->isStudent() && $submission->student_id !== $user->id) {
            abort(403);
        }

        $submission->load(['subject', 'student', 'assignment', 'files']);

        return view('submissions.show', compact('submission'));
    }

    public function gradeSubmission(Request $request, Submission $submission)
    {
        if (!Auth::user()->isTeacher()) {
            abort(403);
        }

        $validated = $request->validate([
            'grade' => 'required|numeric|min:0|max:10',
            'teacher_feedback' => 'nullable|string',
        ]);

        $submission->update([
            'grade' => $validated['grade'],
            'teacher_feedback' => $validated['teacher_feedback'] ?? null,
            'status' => 'reviewed',
            'reviewed_at' => now(),
        ]);

        return redirect()->back()->with('success', '¡Entrega calificada exitosamente!');
    }

    public function createAssignment(Request $request)
    {
        if (!Auth::user()->isTeacher()) {
            abort(403);
        }

        $validated = $request->validate([
            'subject_id' => 'required|exists:subjects,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'nullable|date',
            'guide_file' => 'nullable|file|max:30720',
        ]);

        $guidePath = null;
        if ($request->hasFile('guide_file')) {
            $guidePath = $request->file('guide_file')->store('assignments_guides', 'public');
        }

        Assignment::create([
            'subject_id' => $validated['subject_id'],
            'teacher_id' => Auth::id(),
            'title' => $validated['title'],
            'description' => $validated['description'],
            'due_date' => $validated['due_date'] ?? null,
            'guide_file' => $guidePath,
            'status' => 'active',
        ]);

        return redirect()->back()->with('success', '¡Tarea creada con éxito para Emmanuel!');
    }

    public function downloadFile(SubmissionFile $file)
    {
        $user = Auth::user();
        if ($user->isStudent() && $file->submission->student_id !== $user->id) {
            abort(403);
        }

        $path = storage_path('app/public/' . $file->file_path);
        if (!file_exists($path)) {
            abort(404, 'Archivo no encontrado');
        }

        return response()->download($path, $file->original_name);
    }

    public function reportUnit1()
    {
        $student = User::where('role', 'student')->first() ?? (object)[
            'name' => 'Emmanuel',
            'email' => 'emmanuel@deberesem.noxdata.site',
        ];

        $teacher = User::where('role', 'teacher')->first() ?? (object)[
            'name' => 'Prof. Carlos Angulo',
            'email' => 'carlos@deberesem.noxdata.site',
        ];

        // Deberes y temas impartidos de Matemática (concisos y claros)
        $mathDuties = [
            [
                'title' => 'Refuerzo de Operaciones Básicas',
                'detail' => 'Cálculo aritmético, tablas y agilidad mental',
                'guide_url' => null,
                'status' => 'Entregado',
                'grade' => '10 / 10',
            ],
            [
                'title' => 'División Larga (2 cifras)',
                'detail' => '28.851 ÷ 88 y 5.932 ÷ 13 en cuaderno',
                'guide_url' => asset('storage/guides/guia_division_28851_88.jpg'),
                'status' => 'Entregado',
                'grade' => '10 / 10',
            ],
            [
                'title' => 'Estimación y Redondeo',
                'detail' => 'Taller de 7 operaciones de aproximación',
                'guide_url' => asset('storage/guides/guia_estimaciones_redondeo.jpg'),
                'status' => 'Entregado',
                'grade' => '10 / 10',
            ],
            [
                'title' => 'Números Enteros (Z)',
                'detail' => 'Recta numérica, concepto de opuestos y orden',
                'guide_url' => null,
                'status' => 'Entregado',
                'grade' => '10 / 10',
            ],
            [
                'title' => 'Fracciones (Q)',
                'detail' => 'Concepto parte-todo, simplificación y equivalencias',
                'guide_url' => null,
                'status' => 'Entregado',
                'grade' => '10 / 10',
            ],
        ];

        // Deberes entregados de Computación (con Ofimática al inicio)
        $compuDuties = [
            [
                'title' => 'Ofimática',
                'detail' => 'Mecanografía y procesador de textos',
                'link_url' => null,
                'status' => 'Entregado',
                'grade' => '10 / 10',
            ],
            [
                'title' => 'Portafolio Web',
                'detail' => 'Estructura HTML5 y menú de proyectos',
                'link_url' => 'https://paholaguevara2977-eng.github.io/portafolio/',
                'status' => 'Entregado',
                'grade' => '10 / 10',
            ],
            [
                'title' => 'Biografía de Napoleón',
                'detail' => 'Página web interactiva y multimedia',
                'link_url' => 'https://paholaguevara2977-eng.github.io/portafolio/napoleon.html',
                'status' => 'Entregado',
                'grade' => '10 / 10',
            ],
            [
                'title' => 'Guerra de los Cien Años',
                'detail' => 'Cronología histórica en HTML',
                'link_url' => 'https://paholaguevara2977-eng.github.io/portafolio/cien-anos.html',
                'status' => 'Entregado',
                'grade' => '10 / 10',
            ],
            [
                'title' => 'Horario Semanal',
                'detail' => 'Tablas y celdas HTML simétricas',
                'link_url' => 'https://paholaguevara2977-eng.github.io/portafolio/horario.html',
                'status' => 'Entregado',
                'grade' => '10 / 10',
            ],
        ];

        return view('reports.unit1', compact(
            'student',
            'teacher',
            'mathDuties',
            'compuDuties'
        ));
    }
}

