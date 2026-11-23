<?php

namespace Database\Seeders;

use App\Models\Assignment;
use App\Models\Subject;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Crear Usuario Estudiante (Emanuel)
        $emanuel = User::updateOrCreate(
            ['email' => 'emanuel@deberesem.noxdata.site'],
            [
                'name' => 'Emanuel',
                'username' => 'emanuel',
                'password' => Hash::make('Emanuel2026*'),
                'role' => 'student',
                'avatar' => null,
            ]
        );

        // 2. Crear Usuario Profesor (Carlos Angulo)
        $carlos = User::updateOrCreate(
            ['email' => 'carlos@deberesem.noxdata.site'],
            [
                'name' => 'Prof. Carlos Angulo',
                'username' => 'carlos',
                'password' => Hash::make('ProfeCarlos2026!'),
                'role' => 'teacher',
                'avatar' => null,
            ]
        );

        // 3. Crear Materias (Matemática y Computación)
        $mate = Subject::updateOrCreate(
            ['slug' => 'matematica'],
            [
                'name' => 'Matemática',
                'description' => 'Álgebra, geometría, razonamiento lógico y numérico.',
                'icon' => 'calculator',
                'color' => 'indigo',
                'banner_gradient' => 'from-indigo-600 via-indigo-700 to-purple-800',
            ]
        );

        $compu = Subject::updateOrCreate(
            ['slug' => 'computacion'],
            [
                'name' => 'Computación',
                'description' => 'Programación, desarrollo web, HTML, algoritmos y proyectos digitales.',
                'icon' => 'laptop-code',
                'color' => 'emerald',
                'banner_gradient' => 'from-emerald-600 via-teal-700 to-cyan-800',
            ]
        );

        // 4. Asignaciones de Ejemplo
        $asigMate = Assignment::updateOrCreate(
            ['title' => 'Taller 1: Operaciones con Polinomios y Simplificación'],
            [
                'subject_id' => $mate->id,
                'teacher_id' => $carlos->id,
                'description' => "Resolver los ejercicios de la página 15 del libro. Tomar una fotografía clara del cuaderno con los procedimientos y subir con su título.",
                'due_date' => now()->addDays(5)->setHour(23)->setMinute(59),
                'status' => 'active',
            ]
        );

        $asigCompu = Assignment::updateOrCreate(
            ['title' => 'Módulo Web: Páginas y Portafolio en GitHub Pages'],
            [
                'subject_id' => $compu->id,
                'teacher_id' => $carlos->id,
                'description' => "Subir los enlaces directos a tus proyectos web desarrollados en HTML (Portafolio, Napoleón, Guerra de los Cien Años, Horario). La captura de pantalla es opcional.",
                'due_date' => now()->addDays(7)->setHour(23)->setMinute(59),
                'status' => 'active',
            ]
        );

        // 5. Entregas de Computación de Emanuel (4 deberes reales calificados con 10)
        $deberesCompu = [
            [
                'title' => 'Portafolio',
                'link_url' => 'https://paholaguevara2977-eng.github.io/portafolio/',
                'student_notes' => 'Portafolio web principal con enlaces a todos los proyectos y biografía.',
                'submitted_at' => now()->subDays(3)->setHour(14)->setMinute(20),
                'grade' => 10.00,
                'teacher_feedback' => '¡Excelente trabajo, Emanuel! Tu portafolio web está muy bien organizado, la estructura HTML es clara y los enlaces de navegación hacia todos tus proyectos funcionan perfectamente. Gran presentación, orden y diseño visual. ¡Sigue así, tienes un gran futuro en la programación web!',
            ],
            [
                'title' => 'Napoleón',
                'link_url' => 'https://paholaguevara2977-eng.github.io/portafolio/napoleon.html',
                'student_notes' => 'Página web interactiva con la biografía e historia de Napoleón Bonaparte.',
                'submitted_at' => now()->subDays(2)->setHour(16)->setMinute(45),
                'grade' => 10.00,
                'teacher_feedback' => '¡Felicitaciones Emanuel! Gran investigación y magnífica presentación sobre la historia y biografía de Napoleón Bonaparte. Excelente uso de encabezados, párrafos y contenido multimedia bien jerarquizado en HTML. ¡Trabajo impecable!',
            ],
            [
                'title' => 'Guerra de los Cien Años',
                'link_url' => 'https://paholaguevara2977-eng.github.io/portafolio/cien-anos.html',
                'student_notes' => 'Página web temática con la cronología y causas de la Guerra de los Cien Años.',
                'submitted_at' => now()->subDays(1)->setHour(11)->setMinute(10),
                'grade' => 10.00,
                'teacher_feedback' => '¡Extraordinario desempeño, Emanuel! Lograste sintetizar las causas, etapas y cronología de la Guerra de los Cien Años de forma muy clara y atractiva. El código HTML está limpio y bien estructurado. ¡Excelente dedicación!',
            ],
            [
                'title' => 'Horario',
                'link_url' => 'https://paholaguevara2977-eng.github.io/portafolio/horario.html',
                'student_notes' => 'Página web estructurada con tabla HTML del horario semanal.',
                'submitted_at' => now()->subHours(5)->setMinute(30),
                'grade' => 10.00,
                'teacher_feedback' => '¡Trabajo perfecto, Emanuel! El dominio que demostraste en la construcción y alineación de la tabla HTML para tu horario semanal es sobresaliente. Filas, columnas y celdas perfectamente cuadradas y legibles. ¡Felicitaciones por tu esfuerzo!',
            ],
        ];

        foreach ($deberesCompu as $deb) {
            Submission::updateOrCreate(
                [
                    'subject_id' => $compu->id,
                    'student_id' => $emanuel->id,
                    'title' => $deb['title'],
                ],
                [
                    'assignment_id' => $asigCompu->id,
                    'link_url' => $deb['link_url'],
                    'student_notes' => $deb['student_notes'],
                    'status' => 'reviewed',
                    'grade' => $deb['grade'],
                    'teacher_feedback' => $deb['teacher_feedback'],
                    'submitted_at' => $deb['submitted_at'],
                    'reviewed_at' => now()->subHours(1),
                ]
            );
        }

        // 6. Matemática: asegurarnos de que quede SIN entregas
        Submission::where('subject_id', $mate->id)->delete();
    }
}
