<?php

namespace Database\Seeders;

use App\Models\Assignment;
use App\Models\Subject;
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
                'description' => 'Programación, pensamiento computacional, herramientas digitales y lógica.',
                'icon' => 'laptop-code',
                'color' => 'emerald',
                'banner_gradient' => 'from-emerald-600 via-teal-700 to-cyan-800',
            ]
        );

        // 4. Crear Asignaciones Iniciales
        Assignment::updateOrCreate(
            ['title' => 'Taller 1: Operaciones con Polinomios y Simplificación'],
            [
                'subject_id' => $mate->id,
                'teacher_id' => $carlos->id,
                'description' => "Resolver los ejercicios de la página 15 del libro. Tomar fotografías claras de los procedimientos en el cuaderno o subir en formato PDF.\n\nPuntos a revisar:\n1. Procedimientos paso a paso\n2. Respuestas simplificadas\n3. Orden y letra legible",
                'due_date' => now()->addDays(5)->setHour(23)->setMinute(59),
                'status' => 'active',
            ]
        );

        Assignment::updateOrCreate(
            ['title' => 'Práctica 1: Algoritmos y Diagramas de Flujo'],
            [
                'subject_id' => $compu->id,
                'teacher_id' => $carlos->id,
                'description' => "Diseñar el pseudocódigo y diagrama de flujo para calcular el promedio de 3 notas y determinar si el alumno aprueba.\n\nPuedes subir captura de Dfd/PSeInt o archivo .psc / .pdf.",
                'due_date' => now()->addDays(7)->setHour(23)->setMinute(59),
                'status' => 'active',
            ]
        );
    }
}
