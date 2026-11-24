<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Acceso y Autenticación
Route::get('/', function () {
    return auth()->check() ? redirect()->route('dashboard') : redirect()->route('login');
});

// Rutas Públicas: Informes Oficiales de Avances (Accesibles sin login para compartir y exportar PDF)
Route::get('/informe/unidad-1', [DashboardController::class, 'reportUnit1'])->name('report.unit1');
Route::get('/informe-unidad-1', function () {
    return redirect()->route('report.unit1');
});
Route::get('/informe/unidad-2', [DashboardController::class, 'reportUnit2'])->name('report.unit2');
Route::get('/informe-unidad-2', function () {
    return redirect()->route('report.unit2');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas Protegidas por Autenticación
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/materia/{subject:slug}', [DashboardController::class, 'showSubject'])->name('subject.show');
    
    // Entregas de deberes
    Route::post('/subir-deber', [DashboardController::class, 'submitHomework'])->name('homework.submit');
    Route::get('/entrega/{submission}', [DashboardController::class, 'showSubmission'])->name('submission.show');
    Route::post('/entrega/{submission}/calificar', [DashboardController::class, 'gradeSubmission'])->name('submission.grade');
    
    // Asignaciones del profesor
    Route::post('/tarea/crear', [DashboardController::class, 'createAssignment'])->name('assignment.create');
    
    // Descarga de archivos
    Route::get('/archivo/{file}/descargar', [DashboardController::class, 'downloadFile'])->name('file.download');
});
