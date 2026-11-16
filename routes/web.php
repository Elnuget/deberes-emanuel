<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Acceso y Autenticación
Route::get('/', function () {
    return auth()->check() ? redirect()->route('dashboard') : redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/acceso-rapido/{role}', [AuthController::class, 'quickLogin'])->name('quick.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas Protegidas
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
