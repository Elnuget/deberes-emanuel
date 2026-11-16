@extends('layouts.app')

@section('title', $submission->title . ' - Deberes Emanuel')

@section('content')
@php
    $isMath = $submission->subject->slug === 'matematica';
@endphp
<div class="max-w-4xl mx-auto space-y-6 pb-16 md:pb-6">

    <!-- Volver -->
    <div>
        <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 text-xs font-bold text-slate-500 hover:text-indigo-600 transition-colors">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Volver al Inicio</span>
        </a>
    </div>

    <!-- Cabecera de la Entrega -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        <div class="flex flex-wrap items-center justify-between gap-3 mb-4">
            <span class="text-xs font-extrabold px-3 py-1 rounded-xl {{ $isMath ? 'bg-indigo-50 text-indigo-700' : 'bg-emerald-50 text-emerald-700' }}">
                <i class="fa-solid {{ $isMath ? 'fa-calculator' : 'fa-laptop-code' }} mr-1"></i>
                {{ $submission->subject->name }}
            </span>

            @if($submission->status === 'reviewed')
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-extrabold bg-emerald-100 text-emerald-800">
                    <i class="fa-solid fa-circle-check text-emerald-600"></i> Calificado: {{ number_format($submission->grade, 1) }} / 10
                </span>
            @else
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-800">
                    <i class="fa-solid fa-clock text-amber-600"></i> Pendiente de Revisión
                </span>
            @endif
        </div>

        <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
            {{ $submission->title }}
        </h1>

        <div class="flex flex-wrap items-center gap-4 text-xs text-slate-400 mt-2">
            <span><i class="fa-solid fa-user-graduate mr-1"></i> {{ $submission->student->name }}</span>
            <span>&bull;</span>
            <span><i class="fa-regular fa-calendar-days mr-1"></i> Entregado el {{ $submission->submitted_at->format('d/m/Y \a \l\a\s H:i') }}</span>
        </div>

        @if($submission->link_url)
            <div class="mt-6 p-4 sm:p-5 rounded-2xl bg-emerald-50 border border-emerald-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 shadow-sm">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-600 text-white flex items-center justify-center text-xl shadow-md shadow-emerald-200 shrink-0">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <div>
                        <span class="block text-[11px] font-extrabold uppercase tracking-wider text-emerald-800">Proyecto Web en Vivo (GitHub Pages)</span>
                        <a href="{{ $submission->link_url }}" target="_blank" rel="noopener noreferrer" class="text-sm sm:text-base font-extrabold text-emerald-700 hover:text-emerald-900 underline break-all inline-flex items-center gap-1.5 mt-0.5">
                            {{ $submission->link_url }}
                            <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                        </a>
                    </div>
                </div>
                <a href="{{ $submission->link_url }}" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold text-xs shadow-md shadow-emerald-200 transition-all flex items-center gap-2 whitespace-nowrap active:scale-95 shrink-0">
                    <i class="fa-solid fa-up-right-from-square"></i> Abrir Proyecto Web
                </a>
            </div>
        @endif

        @if($submission->student_notes)
            <div class="mt-5 p-4 rounded-2xl bg-slate-50 border border-slate-100 text-sm text-slate-700">
                <span class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-1">Comentario de Emanuel:</span>
                "{{ $submission->student_notes }}"
            </div>
        @endif
    </div>

    @if($submission->files->isNotEmpty())
    <!-- Archivos Adjuntos (Fotos y Documentos) -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        <h2 class="text-lg font-extrabold text-slate-900 tracking-tight mb-4 flex items-center justify-between">
            <span>📎 Archivos Adjuntos ({{ $submission->files->count() }})</span>
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            @foreach($submission->files as $file)
                @php
                    $isImg = in_array(strtolower(pathinfo($file->original_name, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'webp', 'gif']);
                    $isPdf = strtolower(pathinfo($file->original_name, PATHINFO_EXTENSION)) === 'pdf';
                @endphp
                <div class="rounded-2xl border border-slate-200 overflow-hidden bg-slate-50 flex flex-col justify-between p-3.5 hover:border-indigo-300 transition-colors">
                    
                    @if($isImg)
                        <div class="h-44 w-full bg-slate-200 rounded-xl overflow-hidden mb-3 relative group">
                            <img src="{{ asset('storage/' . $file->file_path) }}" alt="{{ $file->original_name }}" class="w-full h-full object-cover">
                            <a href="{{ asset('storage/' . $file->file_path) }}" target="_blank" class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 flex items-center justify-center text-white font-bold text-xs transition-opacity">
                                <i class="fa-solid fa-magnifying-glass-plus mr-1"></i> Ver imagen completa
                            </a>
                        </div>
                    @else
                        <div class="h-28 w-full bg-indigo-50/60 rounded-xl flex items-center justify-center text-indigo-500 text-3xl mb-3">
                            @if($isPdf)
                                <i class="fa-solid fa-file-pdf text-rose-500"></i>
                            @else
                                <i class="fa-solid fa-file-lines text-indigo-500"></i>
                            @endif
                        </div>
                    @endif

                    <div class="flex items-center justify-between gap-2">
                        <div class="truncate">
                            <p class="font-bold text-xs text-slate-800 truncate" title="{{ $file->original_name }}">{{ $file->original_name }}</p>
                            <p class="text-[10px] text-slate-400">{{ $file->formatted_size }}</p>
                        </div>
                        <a href="{{ route('file.download', $file->id) }}" class="px-3 py-1.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-xs shadow-sm flex items-center gap-1.5 transition-colors">
                            <i class="fa-solid fa-download"></i>
                            <span class="hidden sm:inline">Descargar</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endif

    <!-- Bloque de Calificación y Retroalimentación -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        @if($submission->status === 'reviewed')
            <div class="flex flex-col sm:flex-row items-center gap-6 p-6 rounded-2xl bg-gradient-to-r from-emerald-50 via-teal-50 to-indigo-50 border border-emerald-200">
                <div class="w-24 h-24 rounded-3xl bg-gradient-to-tr from-emerald-500 to-teal-600 text-white flex flex-col items-center justify-center shadow-lg shadow-emerald-500/30">
                    <span class="text-3xl font-black">{{ number_format($submission->grade, 1) }}</span>
                    <span class="text-[10px] uppercase font-bold opacity-80">Sobre 10</span>
                </div>
                <div class="flex-1 text-center sm:text-left">
                    <span class="text-xs font-extrabold uppercase tracking-wider text-emerald-700">
                        ⭐ Retroalimentación del Profesor
                    </span>
                    <p class="text-base font-bold text-slate-800 mt-1">
                        "{{ $submission->teacher_feedback ?? '¡Deber aprobado y registrado!' }}"
                    </p>
                    <p class="text-xs text-slate-400 mt-2">
                        Revisado el {{ $submission->reviewed_at ? $submission->reviewed_at->format('d/m/Y \a \l\a\s H:i') : 'Recientemente' }}
                    </p>
                </div>
            </div>
        @else
            <div class="p-6 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                <div class="w-12 h-12 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center mx-auto text-xl mb-2">
                    <i class="fa-regular fa-hourglass-half"></i>
                </div>
                <h3 class="font-bold text-amber-900 text-sm">Este deber aún está pendiente de revisión</h3>
                <p class="text-xs text-amber-700 mt-1">El profesor Carlos Angulo te asignará una calificación y comentarios pronto.</p>
            </div>
        @endif

        <!-- Si el usuario es el Profesor Carlos, mostrar panel de calificación / edición -->
        @if(auth()->user()->isTeacher())
            <div class="mt-6 pt-6 border-t border-slate-100">
                <h3 class="font-extrabold text-sm text-slate-900 uppercase tracking-wider mb-4 flex items-center gap-2">
                    <i class="fa-solid fa-pen-to-square text-purple-600"></i>
                    <span>{{ $submission->status === 'reviewed' ? 'Modificar Calificación' : 'Calificar esta Entrega' }}</span>
                </h3>

                <form action="{{ route('submission.grade', $submission->id) }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Nota (0 a 10) *</label>
                            <input type="number" step="0.1" min="0" max="10" name="grade" value="{{ $submission->grade }}" required placeholder="10.0" class="w-full px-4 py-3 rounded-xl border border-slate-300 font-bold text-base focus:ring-2 focus:ring-purple-500 focus:outline-none">
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Comentario para Emanuel</label>
                            <input type="text" name="teacher_feedback" value="{{ $submission->teacher_feedback }}" placeholder="Ej. ¡Excelente desarrollo! Solo cuida los signos en el ejercicio 4." class="w-full px-4 py-3 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-purple-500 focus:outline-none">
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="px-6 py-2.5 rounded-xl bg-purple-600 hover:bg-purple-700 text-white font-extrabold text-sm shadow-md shadow-purple-200 transition-all flex items-center gap-2">
                            <i class="fa-solid fa-floppy-disk"></i> Guardar Calificación
                        </button>
                    </div>
                </form>
            </div>
        @endif
    </div>

</div>
@endsection
