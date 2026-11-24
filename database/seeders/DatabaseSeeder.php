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
        // 1. Crear Usuario Estudiante (Emmanuel)
        $Emmanuel = User::updateOrCreate(
            ['email' => 'Emmanuel@deberesem.noxdata.site'],
            [
                'name' => 'Emmanuel',
                'username' => 'Emmanuel',
                'password' => Hash::make('Emmanuel2026*'),
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

        // 4. Asignaciones Reales de Matemática
        Assignment::where('subject_id', $mate->id)->where('title', 'like', '%Polinomios%')->delete();

        $asigMate1 = Assignment::updateOrCreate(
            ['title' => 'División: 28.851 ÷ 88'],
            [
                'subject_id' => $mate->id,
                'teacher_id' => $carlos->id,
                'description' => "Resolver en el cuaderno cuadriculado la división de 28.851 para 88 con todo el proceso completo paso a paso (cálculo del cociente, restas sucesivas y residuo final).\nTomar una fotografía nítida y bien iluminada del cuaderno y subirla como evidencia.",
                'due_date' => now()->addDays(3)->setHour(23)->setMinute(59),
                'guide_file' => 'guides/guia_division_28851_88.jpg',
                'status' => 'active',
            ]
        );

        $asigMate2 = Assignment::updateOrCreate(
            ['title' => 'División: 5.932 ÷ 13'],
            [
                'subject_id' => $mate->id,
                'teacher_id' => $carlos->id,
                'description' => "Resolver en el cuaderno cuadriculado la división de 5.932 para 13 con el proceso ordenado paso a paso, calculando el cociente y el residuo exacto.\nTomar una fotografía clara del cuaderno con los cálculos visibles y subirla como evidencia.",
                'due_date' => now()->addDays(5)->setHour(23)->setMinute(59),
                'guide_file' => 'guides/guia_division_5932_13.jpg',
                'status' => 'active',
            ]
        );

        $asigMate3 = Assignment::updateOrCreate(
            ['title' => 'Estimación y Redondeo: Draw lines to the best estimates'],
            [
                'subject_id' => $mate->id,
                'teacher_id' => $carlos->id,
                'description' => "Taller de estimación y redondeo: analizar las operaciones y unir con líneas cada ejercicio con su mejor aproximación estimada:\n• 54 293 + 27 886 → about 80 000\n• 8025 ÷ 19 → about 400\n• 116 x 59 → about 6000\n• 893 x 28 → about 27 000\n• 487 x 88 → about 45 000\n• 3216 ÷ 31 → about 100\n• 60 274 - 49 184 → about 10 000\nResolver en la hoja o cuaderno y subir una fotografía nítida de la actividad.",
                'due_date' => now()->addDays(7)->setHour(23)->setMinute(59),
                'guide_file' => 'guides/guia_estimaciones_redondeo.jpg',
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

        // 5. Entregas de Computación de Emmanuel (4 deberes reales calificados con 10)
        $deberesCompu = [
            [
                'title' => 'Portafolio',
                'link_url' => 'https://paholaguevara2977-eng.github.io/portafolio/',
                'student_notes' => 'Portafolio web principal con enlaces a todos los proyectos y biografía.',
                'submitted_at' => now()->subDays(3)->setHour(14)->setMinute(20),
                'grade' => 10.00,
                'teacher_feedback' => '¡Excelente trabajo, Emmanuel! Tu portafolio web está muy bien organizado, la estructura HTML es clara y los enlaces de navegación hacia todos tus proyectos funcionan perfectamente. Gran presentación, orden y diseño visual. ¡Sigue así, tienes un gran futuro en la programación web!',
            ],
            [
                'title' => 'Napoleón',
                'link_url' => 'https://paholaguevara2977-eng.github.io/portafolio/napoleon.html',
                'student_notes' => 'Página web interactiva con la biografía e historia de Napoleón Bonaparte.',
                'submitted_at' => now()->subDays(2)->setHour(16)->setMinute(45),
                'grade' => 10.00,
                'teacher_feedback' => '¡Felicitaciones Emmanuel! Gran investigación y magnífica presentación sobre la historia y biografía de Napoleón Bonaparte. Excelente uso de encabezados, párrafos y contenido multimedia bien jerarquizado en HTML. ¡Trabajo impecable!',
            ],
            [
                'title' => 'Guerra de los Cien Años',
                'link_url' => 'https://paholaguevara2977-eng.github.io/portafolio/cien-anos.html',
                'student_notes' => 'Página web temática con la cronología y causas de la Guerra de los Cien Años.',
                'submitted_at' => now()->subDays(1)->setHour(11)->setMinute(10),
                'grade' => 10.00,
                'teacher_feedback' => '¡Extraordinario desempeño, Emmanuel! Lograste sintetizar las causas, etapas y cronología de la Guerra de los Cien Años de forma muy clara y atractiva. El código HTML está limpio y bien estructurado. ¡Excelente dedicación!',
            ],
            [
                'title' => 'Horario',
                'link_url' => 'https://paholaguevara2977-eng.github.io/portafolio/horario.html',
                'student_notes' => 'Página web estructurada con tabla HTML del horario semanal.',
                'submitted_at' => now()->subHours(5)->setMinute(30),
                'grade' => 10.00,
                'teacher_feedback' => '¡Trabajo perfecto, Emmanuel! El dominio que demostraste en la construcción y alineación de la tabla HTML para tu horario semanal es sobresaliente. Filas, columnas y celdas perfectamente cuadradas y legibles. ¡Felicitaciones por tu esfuerzo!',
            ],
        ];

        foreach ($deberesCompu as $deb) {
            Submission::updateOrCreate(
                [
                    'subject_id' => $compu->id,
                    'student_id' => $Emmanuel->id,
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

