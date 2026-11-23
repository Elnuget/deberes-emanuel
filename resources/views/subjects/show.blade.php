@extends('layouts.app')

@section('title', $subject->name . ' - Deberes Emanuel')

@section('content')
@php
    $isMath = $subject->slug === 'matematica';
@endphp
<div class="space-y-8 pb-16 md:pb-6">

    <!-- Header Materia -->
    <div class="rounded-3xl bg-gradient-to-r {{ $subject->banner_gradient }} p-6 sm:p-10 text-white shadow-xl flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
        <div class="flex items-center gap-5">
            <div class="w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-3xl shadow-inner">
                <i class="fa-solid {{ $isMath ? 'fa-calculator' : 'fa-laptop-code' }}"></i>
            </div>
            <div>
                <a href="{{ route('dashboard') }}" class="text-xs text-white/70 hover:text-white font-semibold flex items-center gap-1 mb-1">
                    <i class="fa-solid fa-arrow-left text-[10px]"></i> Volver a Inicio
                </a>
                <h1 class="text-3xl font-extrabold tracking-tight text-white">{{ $subject->name }}</h1>
                <p class="text-xs sm:text-sm text-white/80 mt-1 max-w-xl">{{ $subject->description }}</p>
            </div>
        </div>

        @if(auth()->user()->isStudent())
            <button @click="selectedSubject = {{ $subject->id }}; uploadModal = true" class="px-6 py-3 rounded-2xl bg-white text-slate-900 font-extrabold text-sm shadow-xl hover:bg-slate-50 transition-all active:scale-95 flex items-center gap-2">
                <i class="fa-solid fa-cloud-arrow-up {{ $isMath ? 'text-indigo-600' : 'text-emerald-600' }}"></i>
                <span>Subir Deber de {{ $subject->name }}</span>
            </button>
        @endif
    </div>

    <!-- Tareas Asignadas en esta Materia -->
    <div>
        <h2 class="text-xl font-extrabold text-slate-900 tracking-tight mb-4 flex items-center gap-2">
            <span>📌 Tareas Asignadas</span>
        </h2>

        @if($assignments->isEmpty())
            <div class="bg-white rounded-2xl p-6 text-center border border-slate-200 text-slate-400 text-xs">
                No hay tareas pendientes asignadas en {{ $subject->name }}. ¡Puedes subir entregas libres cuando quieras!
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($assignments as $assignment)
                    <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-xs mb-2">
                                <span class="font-extrabold text-slate-400">Tarea #{{ $loop->iteration }}</span>
                                @if($assignment->due_date)
                                    <span class="text-slate-500 font-semibold">Límite: {{ $assignment->due_date->format('d/m/Y') }}</span>
                                @endif
                            </div>
                            <h3 class="font-bold text-slate-900 text-base">{{ $assignment->title }}</h3>
                            <p class="text-xs text-slate-600 mt-2 whitespace-pre-line">{{ $assignment->description }}</p>

                            @if($assignment->guide_file)
                                <div class="mt-3 p-3 bg-slate-50 border border-slate-200 rounded-xl">
                                    <div class="text-[11px] font-bold text-slate-500 mb-2 flex items-center justify-between">
                                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-image text-indigo-500"></i> Ejercicio / Captura Guía:</span>
                                        <a href="{{ asset('storage/' . $assignment->guide_file) }}" target="_blank" class="text-indigo-600 hover:underline text-[11px] font-semibold">
                                            Abrir en grande <i class="fa-solid fa-arrow-up-right-from-square text-[9px] ml-0.5"></i>
                                        </a>
                                    </div>
                                    <a href="{{ asset('storage/' . $assignment->guide_file) }}" target="_blank" class="block overflow-hidden rounded-lg border border-slate-200 hover:border-indigo-400 transition-all bg-white shadow-xs group/img">
                                        <img src="{{ asset('storage/' . $assignment->guide_file) }}" alt="{{ $assignment->title }}" class="w-full max-h-44 object-contain p-1 group-hover/img:scale-102 transition-transform">
                                    </a>
                                </div>
                            @endif
                        </div>

                        @if(auth()->user()->isStudent())
                            <div class="mt-4 pt-3 border-t border-slate-100 flex justify-end">
                                <button @click="selectedSubject = {{ $subject->id }}; selectedAssignment = {{ $assignment->id }}; assignmentTitle = '{{ addslashes($assignment->title) }}'; uploadModal = true" class="px-4 py-2 rounded-xl {{ $isMath ? 'bg-indigo-600 hover:bg-indigo-700' : 'bg-emerald-600 hover:bg-emerald-700' }} text-white font-bold text-xs shadow-md transition-all">
                                    <i class="fa-solid fa-upload mr-1"></i> Entregar Deber
                                </button>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <!-- Historial de Entregas Realizadas en esta Materia -->
    <div>
        <h2 class="text-xl font-extrabold text-slate-900 tracking-tight mb-4 flex items-center gap-2">
            <span>🕒 Entregas Realizadas ({{ $submissions->count() }})</span>
        </h2>

        @if($submissions->isEmpty())
            <div class="bg-white rounded-3xl p-8 text-center border border-dashed border-slate-300">
                <p class="text-xs text-slate-400">Aún no se han subido deberes en esta materia.</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($submissions as $sub)
                    <a href="{{ route('submission.show', $sub->id) }}" class="bg-white rounded-2xl p-5 border border-slate-200 hover:border-indigo-300 hover:shadow-md transition-all flex flex-col justify-between group">
                        <div>
                            <div class="flex items-center justify-between text-xs mb-2">
                                <span class="text-slate-400 font-semibold">{{ $sub->submitted_at->format('d/m/Y H:i') }}</span>
                                @if($sub->status === 'reviewed')
                                    <span class="bg-emerald-100 text-emerald-800 font-extrabold px-2 py-0.5 rounded-full">
                                        ⭐ {{ number_format($sub->grade, 1) }}/10
                                    </span>
                                @else
                                    <span class="bg-amber-100 text-amber-800 font-bold px-2 py-0.5 rounded-full">
                                        ⏳ En revisión
                                    </span>
                                @endif
                            </div>
                            <h3 class="font-extrabold text-slate-900 group-hover:text-indigo-600 transition-colors line-clamp-1">{{ $sub->title }}</h3>
                            <p class="text-xs text-slate-500 mt-1 flex items-center gap-1.5 flex-wrap">
                                @if($sub->link_url)
                                    <span class="text-emerald-600 font-bold"><i class="fa-solid fa-globe"></i> Enlace Web</span>
                                @endif
                                @if($sub->files->count() > 0)
                                    @if($sub->link_url) <span>&bull;</span> @endif
                                    <span>{{ $sub->files->count() }} archivo(s)</span>
                                @endif
                            </p>

                            @if($sub->teacher_feedback)
                                <div class="mt-3 p-2.5 rounded-xl bg-slate-50 text-xs text-slate-600 italic line-clamp-2">
                                    "{{ $sub->teacher_feedback }}"
                                </div>
                            @endif
                        </div>
                        <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-bold text-indigo-600 flex justify-between items-center">
                            <span>Ver detalles</span>
                            <i class="fa-solid fa-chevron-right text-[10px]"></i>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif
    </div>

</div>
@endsection
