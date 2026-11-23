@extends('layouts.app')

@section('title', 'Inicio - Deberes Emanuel')

@section('content')
<div class="space-y-8 pb-16 md:pb-6">

    <!-- Banner de Bienvenida -->
    <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-indigo-900 via-indigo-800 to-purple-900 p-6 sm:p-10 text-white shadow-xl shadow-indigo-200/50">
        <div class="relative z-10 max-w-2xl">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold bg-white/10 text-indigo-200 backdrop-blur-md mb-3 border border-white/10">
                <i class="fa-solid fa-sparkles text-amber-300"></i> Portal de Alumno
            </span>
            <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight text-white">
                ¡Hola, Emanuel! 🚀
            </h1>
            <p class="text-sm sm:text-base text-indigo-100/90 mt-2 font-medium">
                Sube tus deberes de <strong class="text-white">Matemática</strong> y <strong class="text-white">Computación</strong> de forma rápida para que el profesor Carlos pueda revisarlos y calificarlos.
            </p>

            <div class="mt-6 flex flex-wrap gap-3">
                <button @click="selectedSubject = 1; uploadModal = true" class="inline-flex items-center gap-2 px-5 py-3 rounded-2xl bg-white text-indigo-900 font-extrabold text-sm hover:bg-indigo-50 shadow-lg shadow-black/10 transition-all active:scale-95">
                    <i class="fa-solid fa-calculator text-indigo-600"></i>
                    <span>Subir Matemática</span>
                </button>
                <button @click="selectedSubject = 2; uploadModal = true" class="inline-flex items-center gap-2 px-5 py-3 rounded-2xl bg-emerald-500 hover:bg-emerald-400 text-white font-extrabold text-sm shadow-lg shadow-emerald-900/20 transition-all active:scale-95">
                    <i class="fa-solid fa-laptop-code"></i>
                    <span>Subir Computación</span>
                </button>
                <a href="{{ route('report.unit1') }}" class="inline-flex items-center gap-2 px-5 py-3 rounded-2xl bg-purple-600/90 hover:bg-purple-600 text-white font-extrabold text-sm backdrop-blur-md border border-white/20 shadow-lg shadow-black/10 transition-all active:scale-95">
                    <i class="fa-solid fa-file-invoice text-amber-300"></i>
                    <span>Informe Unidad 1 (PDF)</span>
                </a>
            </div>
        </div>

        <!-- Decoración de fondo -->
        <div class="absolute -right-8 -bottom-12 opacity-15 text-white text-[160px] pointer-events-none hidden sm:block">
            <i class="fa-solid fa-book-open-reader"></i>
        </div>
    </div>

    <!-- KPIs Rápidos -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-xl font-bold">
                <i class="fa-solid fa-cloud-arrow-up"></i>
            </div>
            <div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Entregados</p>
                <p class="text-2xl font-extrabold text-slate-800">{{ $totalSubmissions }}</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl font-bold">
                <i class="fa-solid fa-clock-rotate-left"></i>
            </div>
            <div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Por Entregar</p>
                <p class="text-2xl font-extrabold text-slate-800">{{ $pendingAssignments->count() }}</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl font-bold">
                <i class="fa-solid fa-clipboard-check"></i>
            </div>
            <div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Revisados</p>
                <p class="text-2xl font-extrabold text-slate-800">{{ $reviewedSubmissions }}</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-xl font-bold">
                <i class="fa-solid fa-star"></i>
            </div>
            <div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Promedio</p>
                <p class="text-2xl font-extrabold text-slate-800">
                    {{ $averageGrade ? number_format($averageGrade, 1) : '--' }}<span class="text-xs text-slate-400">/10</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Banner de Acceso al Informe Oficial Unidad 1 -->
    <div class="bg-gradient-to-r from-purple-900 via-indigo-950 to-slate-900 rounded-3xl p-5 sm:p-6 text-white shadow-xl border border-purple-800/40 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div class="flex items-center gap-3.5">
            <div class="w-12 h-12 rounded-2xl bg-purple-500/20 text-purple-300 border border-purple-500/30 flex items-center justify-center text-xl font-black">
                <i class="fa-solid fa-award text-amber-300"></i>
            </div>
            <div>
                <span class="text-[10px] font-extrabold uppercase tracking-widest text-purple-300 bg-purple-500/20 px-2.5 py-0.5 rounded-full border border-purple-500/30">
                    Documento Oficial
                </span>
                <h3 class="font-extrabold text-base sm:text-lg text-white mt-1">Informe de Avance y Planificación — Unidad 1</h3>
                <p class="text-xs text-slate-300">Consulta tus calificaciones, objetivos cumplidos y plan de la Unidad 2.</p>
            </div>
        </div>
        <div class="flex items-center gap-2 w-full sm:w-auto">
            <a href="{{ route('report.unit1') }}" class="w-full sm:w-auto text-center px-4 py-2.5 rounded-xl bg-white hover:bg-slate-100 text-slate-900 font-extrabold text-xs shadow-md transition-all active:scale-95 flex items-center justify-center gap-2">
                <i class="fa-solid fa-file-pdf text-indigo-600"></i>
                <span>Ver e Imprimir PDF</span>
            </a>
            <a href="https://api.whatsapp.com/send?text={{ urlencode('📄 Informe Oficial de Avances de Emanuel (Unidad 1): ' . url('/informe/unidad-1')) }}" target="_blank" class="px-3.5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs shadow-md transition-all active:scale-95 flex items-center justify-center gap-1.5" title="Compartir en WhatsApp">
                <i class="fa-brands fa-whatsapp text-sm"></i>
            </a>
        </div>
    </div>

    <!-- Tus Materias Principales -->
    <div>
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-extrabold text-slate-900 tracking-tight flex items-center gap-2">
                <span>📚 Tus Materias</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($subjects as $subject)
                @php
                    $isMath = $subject->slug === 'matematica';
                @endphp
                <div class="bg-white rounded-3xl border border-slate-200/80 p-6 sm:p-7 shadow-sm hover:shadow-md transition-all flex flex-col justify-between relative overflow-hidden group">
                    <div class="flex items-start justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-2xl {{ $isMath ? 'bg-indigo-600 shadow-indigo-200' : 'bg-emerald-600 shadow-emerald-200' }} text-white flex items-center justify-center text-2xl font-bold shadow-lg group-hover:scale-105 transition-transform">
                                <i class="fa-solid {{ $isMath ? 'fa-calculator' : 'fa-laptop-code' }}"></i>
                            </div>
                            <div>
                                <h3 class="font-extrabold text-xl text-slate-900">{{ $subject->name }}</h3>
                                <p class="text-xs text-slate-500 mt-0.5 line-clamp-1">{{ $subject->description }}</p>
                            </div>
                        </div>
                        <span class="text-xs font-extrabold px-3 py-1 rounded-full {{ $isMath ? 'bg-indigo-50 text-indigo-700' : 'bg-emerald-50 text-emerald-700' }}">
                            {{ $subject->my_submissions_count }} entregas
                        </span>
                    </div>

                    <div class="mt-6 pt-5 border-t border-slate-100 flex items-center justify-between">
                        <a href="{{ route('subject.show', $subject->slug) }}" class="text-xs font-bold text-slate-600 hover:text-slate-900 flex items-center gap-1.5 transition-colors">
                            <span>Ver todas las tareas</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>

                        <button @click="selectedSubject = {{ $subject->id }}; uploadModal = true" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-xs font-extrabold {{ $isMath ? 'bg-indigo-600 hover:bg-indigo-700 shadow-indigo-200' : 'bg-emerald-600 hover:bg-emerald-700 shadow-emerald-200' }} text-white shadow-md transition-all active:scale-95">
                            <i class="fa-solid fa-upload"></i> Subir Deber
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Tareas Asignadas por el Profesor -->
    @if($pendingAssignments->isNotEmpty())
        <div>
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-extrabold text-slate-900 tracking-tight flex items-center gap-2">
                    <span>📌 Deberes Pendientes Asignados</span>
                    <span class="bg-amber-100 text-amber-700 text-xs px-2.5 py-0.5 rounded-full font-bold">
                        {{ $pendingAssignments->count() }} por hacer
                    </span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($pendingAssignments as $assignment)
                    @php
                        $isMath = $assignment->subject->slug === 'matematica';
                    @endphp
                    <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm flex flex-col justify-between hover:border-slate-300 transition-colors">
                        <div>
                            <div class="flex items-center justify-between text-xs mb-2">
                                <span class="font-extrabold px-2.5 py-0.5 rounded-md {{ $isMath ? 'bg-indigo-50 text-indigo-700' : 'bg-emerald-50 text-emerald-700' }}">
                                    {{ $assignment->subject->name }}
                                </span>
                                @if($assignment->due_date)
                                    <span class="text-slate-500 font-semibold flex items-center gap-1">
                                        <i class="fa-regular fa-calendar"></i> Entrega: {{ $assignment->due_date->format('d/m/Y') }}
                                    </span>
                                @endif
                            </div>
                            <h3 class="font-bold text-slate-900 text-base">{{ $assignment->title }}</h3>
                            <p class="text-xs text-slate-500 mt-1 line-clamp-2">{{ $assignment->description }}</p>

                            @if($assignment->guide_file)
                                <div class="mt-2.5">
                                    <a href="{{ asset('storage/' . $assignment->guide_file) }}" target="_blank" class="inline-flex items-center gap-1.5 text-[11px] font-bold text-indigo-600 hover:text-indigo-800 bg-indigo-50/80 hover:bg-indigo-100 px-2.5 py-1 rounded-lg border border-indigo-100 transition-colors">
                                        <i class="fa-solid fa-image"></i> Ver ejercicio guía
                                        <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                                    </a>
                                </div>
                            @endif
                        </div>

                        <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-xs text-slate-400 font-medium">Asignado por {{ $assignment->teacher->name }}</span>
                            <button @click="selectedSubject = {{ $assignment->subject_id }}; selectedAssignment = {{ $assignment->id }}; assignmentTitle = '{{ addslashes($assignment->title) }}'; uploadModal = true" class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-bold shadow-sm transition-all active:scale-95">
                                <i class="fa-solid fa-arrow-up-from-bracket"></i> Entregar Ahora
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- Tus Últimas Entregas Realizadas -->
    <div>
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-extrabold text-slate-900 tracking-tight">
                🕒 Tus Entregas Recientes
            </h2>
        </div>

        @if($recentSubmissions->isEmpty())
            <div class="bg-white rounded-3xl p-10 text-center border border-dashed border-slate-300">
                <div class="w-16 h-16 rounded-full bg-indigo-50 text-indigo-500 flex items-center justify-center mx-auto text-2xl mb-3">
                    <i class="fa-solid fa-inbox"></i>
                </div>
                <h3 class="font-bold text-slate-700 text-base">Aún no has subido deberes</h3>
                <p class="text-xs text-slate-400 mt-1 max-w-sm mx-auto">
                    Cuando subas fotos o archivos de tus deberes de Matemática o Computación, aparecerán listados aquí.
                </p>
                <button @click="uploadModal = true" class="mt-4 inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-indigo-600 text-white font-bold text-xs shadow-md">
                    <i class="fa-solid fa-plus"></i> Subir mi primer deber
                </button>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($recentSubmissions as $sub)
                    @php
                        $isMath = $sub->subject->slug === 'matematica';
                    @endphp
                    <a href="{{ route('submission.show', $sub->id) }}" class="bg-white rounded-2xl p-5 border border-slate-200 hover:border-indigo-300 hover:shadow-md transition-all flex flex-col justify-between group">
                        <div>
                            <div class="flex items-center justify-between text-xs mb-2">
                                <span class="font-extrabold px-2.5 py-0.5 rounded-md {{ $isMath ? 'bg-indigo-50 text-indigo-700' : 'bg-emerald-50 text-emerald-700' }}">
                                    {{ $sub->subject->name }}
                                </span>
                                
                                @if($sub->status === 'reviewed')
                                    <span class="bg-emerald-100 text-emerald-800 font-extrabold px-2.5 py-0.5 rounded-full flex items-center gap-1">
                                        <i class="fa-solid fa-star text-amber-500"></i> {{ number_format($sub->grade, 1) }}/10
                                    </span>
                                @else
                                    <span class="bg-amber-100 text-amber-800 font-bold px-2 py-0.5 rounded-full">
                                        ⏳ En revisión
                                    </span>
                                @endif
                            </div>

                            <h3 class="font-extrabold text-slate-900 group-hover:text-indigo-600 transition-colors line-clamp-1">
                                {{ $sub->title }}
                            </h3>
                            
                            <p class="text-xs text-slate-400 mt-1 flex items-center gap-1.5 flex-wrap">
                                <span><i class="fa-regular fa-clock"></i> {{ $sub->submitted_at->diffForHumans() }}</span>
                                @if($sub->link_url)
                                    <span>&bull;</span>
                                    <span class="text-emerald-600 font-bold"><i class="fa-solid fa-globe"></i> Enlace Web</span>
                                @endif
                                @if($sub->files->count() > 0)
                                    <span>&bull;</span>
                                    <span>{{ $sub->files->count() }} archivo(s)</span>
                                @endif
                            </p>

                            @if($sub->teacher_feedback)
                                <div class="mt-3 p-2.5 rounded-xl bg-slate-50 border border-slate-100 text-xs text-slate-600 italic line-clamp-2">
                                    "{{ $sub->teacher_feedback }}"
                                </div>
                            @endif
                        </div>

                        <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-indigo-600">
                            <span>Ver detalles y archivos</span>
                            <i class="fa-solid fa-chevron-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif
    </div>

</div>
@endsection
