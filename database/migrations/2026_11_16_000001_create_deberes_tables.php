<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Materias (Matemática, Computación, etc.)
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('icon')->default('book'); // calculator, code, etc.
            $table->string('color')->default('indigo'); // indigo, cyan, emerald, etc.
            $table->string('banner_gradient')->nullable();
            $table->timestamps();
        });

        // 2. Tareas / Deberes Asignados por el Profesor
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade');
            $table->foreignId('teacher_id')->constrained('users')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->dateTime('due_date')->nullable();
            $table->string('guide_file')->nullable();
            $table->string('status')->default('active'); // active, completed, archived
            $table->timestamps();
        });

        // 3. Entregas de Deberes por el Estudiante
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade');
            $table->foreignId('student_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('assignment_id')->nullable()->constrained('assignments')->onDelete('set null');
            $table->string('title');
            $table->string('link_url')->nullable(); // Enlace del proyecto (ej: GitHub Pages para computación)
            $table->text('student_notes')->nullable();
            $table->string('status')->default('submitted'); // submitted, reviewed, resubmit
            $table->decimal('grade', 4, 2)->nullable(); // e.g. 10.00
            $table->text('teacher_feedback')->nullable();
            $table->dateTime('submitted_at');
            $table->dateTime('reviewed_at')->nullable();
            $table->timestamps();
        });

        // 4. Archivos Adjuntos a las Entregas (PDFs, Imágenes, Docs, Código)
        Schema::create('submission_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained('submissions')->onDelete('cascade');
            $table->string('original_name');
            $table->string('file_path');
            $table->unsignedBigInteger('file_size');
            $table->string('file_type')->default('file'); // pdf, image, doc, code, zip
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submission_files');
        Schema::dropIfExists('submissions');
        Schema::dropIfExists('assignments');
        Schema::dropIfExists('subjects');
    }
};
