@extends('layouts.app')

@section('title', 'Panel Docente - Deberes Emmanuel')

@section('content')
<div class="space-y-8 pb-16 md:pb-6" x-data="{ createModal: false }">

    <!-- Header Docente -->
    <div class="bg-gradient-to-r from-slate-900 via-indigo-950 to-slate-900 rounded-3xl p-6 sm:p-8 text-white shadow-xl flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-purple-500/20 text-purple-300 border border-purple-500/30 mb-2">
                <i class="fa-solid fa-chalkboard-user"></i> Modo Profesor
            </span>
            <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-white">Panel de Revisión y Calificaciones</h1>
            <p class="text-xs sm:text-sm text-slate-400 mt-1">Supervisión académica de Matemática y Computación para Emmanuel</p>
        </div>

        <div class="flex items-center gap-2.5 flex-wrap">
            <a href="{{ route('report.unit1') }}" class="inline-flex items-center gap-2 px-4 py-3 rounded-2xl bg-white/10 hover:bg-white/20 text-white font-extrabold text-sm border border-white/20 transition-all active:scale-95 shadow-sm">
                <i class="fa-solid fa-file-invoice text-amber-300"></i>
                <span>Ver Informe Unidad 1 (PDF)</span>
            </a>
            <button @click="createModal = true" class="inline-flex items-center gap-2 px-5 py-3 rounded-2xl bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-extrabold text-sm shadow-lg shadow-indigo-500/25 transition-all active:scale-95">
                <i class="fa-solid fa-plus"></i>
                <span>Asignar Nueva Tarea</span>
            </button>
        </div>
    </div>

    <!-- Sección 1: Entregas Pendientes de Revisar (Prioridad) -->
    <div>
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-extrabold text-slate-900 tracking-tight flex items-center gap-2">
                <span>🔔 Entregas Pendientes de Calificar</span>
                <span class="bg-amber-100 text-amber-800 text-xs px-2.5 py-0.5 rounded-full font-bold">
                    {{ $pendingReviews->count() }} por revisar
                </span>
            </h2>
        </div>

        @if($pendingReviews->isEmpty())
            <div class="bg-white rounded-3xl p-8 text-center border border-slate-200">
                <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mx-auto text-xl mb-2">
                    <i class="fa-solid fa-check-double"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-base">¡Al día! No hay entregas pendientes</h3>
                <p class="text-xs text-slate-400 mt-1">Todas las tareas subidas por Emmanuel han sido revisadas.</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($pendingReviews as $sub)
                    @php $isMath = $sub->subject->slug === 'matematica'; @endphp
                    <div class="bg-white rounded-2xl p-6 border-2 border-amber-200/80 shadow-md flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-xs mb-3">
                                <span class="font-extrabold px-2.5 py-1 rounded-lg {{ $isMath ? 'bg-indigo-50 text-indigo-700' : 'bg-emerald-50 text-emerald-700' }}">
                                    {{ $sub->subject->name }}
                                </span>
                                <span class="text-xs text-slate-400 font-medium">
                                    Subido {{ $sub->submitted_at->diffForHumans() }}
                                </span>
                            </div>

                            <h3 class="font-extrabold text-slate-900 text-lg">{{ $sub->title }}</h3>
                            <p class="text-xs text-slate-500 mt-1"><strong>Alumno:</strong> {{ $sub->student->name }}</p>

                            @if($sub->student_notes)
                                <div class="mt-3 p-3 rounded-xl bg-slate-50 border border-slate-200 text-xs text-slate-700">
                                    <span class="font-bold text-slate-500 block mb-0.5">Nota de Emmanuel:</span>
                                    "{{ $sub->student_notes }}"
                                </div>
                            @endif

                            @if($sub->link_url)
                                <div class="mt-4">
                                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block mb-1.5">Proyecto Web de Emmanuel:</span>
                                    <a href="{{ $sub->link_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-between w-full p-3 rounded-xl bg-emerald-50 hover:bg-emerald-100 border border-emerald-300 text-xs text-emerald-900 font-bold group transition-all shadow-sm">
                                        <span class="truncate flex items-center gap-2">
                                            <i class="fa-solid fa-globe text-emerald-600 text-base"></i>
                                            <span class="truncate font-semibold">{{ $sub->link_url }}</span>
                                        </span>
                                        <span class="bg-emerald-600 group-hover:bg-emerald-700 text-white px-2.5 py-1 rounded-lg text-[10px] font-extrabold flex items-center gap-1 shadow-sm shrink-0 ml-2">
                                            Abrir <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                                        </span>
                                    </a>
                                </div>
                            @endif

                            @if($sub->files->isNotEmpty())
                            <!-- Lista rápida de archivos adjuntos -->
                            <div class="mt-4 space-y-1.5">
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Archivos Adjuntos ({{ $sub->files->count() }}):</p>
                                @foreach($sub->files as $f)
                                    <a href="{{ route('file.download', $f->id) }}" class="flex items-center justify-between p-2 rounded-xl bg-slate-50 hover:bg-indigo-50 border border-slate-200 text-xs text-slate-700 font-semibold group transition-colors">
                                        <span class="truncate flex items-center gap-2">
                                            <i class="fa-solid fa-paperclip text-slate-400 group-hover:text-indigo-600"></i>
                                            {{ $f->original_name }}
                                        </span>
                                        <span class="text-indigo-600 text-xs ml-2"><i class="fa-solid fa-download"></i></span>
                                    </a>
                                @endforeach
                            </div>
                            @endif
                        </div>

                        <!-- Formulario de Calificación Rápida -->
                        <form action="{{ route('submission.grade', $sub->id) }}" method="POST" class="mt-5 pt-4 border-t border-slate-100 space-y-3">
                            @csrf
                            <div class="flex items-center gap-3">
                                <div class="w-28">
                                    <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Nota (0-10)</label>
                                    <input type="number" step="0.1" min="0" max="10" name="grade" required placeholder="10.0" class="w-full px-3 py-2 rounded-xl border border-slate-300 font-bold text-center text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Comentario / Felicitación</label>
                                    <input type="text" name="teacher_feedback" placeholder="¡Excelente trabajo Emmanuel!" class="w-full px-3 py-2 rounded-xl border border-slate-300 text-xs focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                </div>
                            </div>
                            <button type="submit" class="w-full py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold text-xs shadow-md shadow-emerald-200 transition-all flex items-center justify-center gap-2">
                                <i class="fa-solid fa-check"></i> Guardar Calificación
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <!-- Sección 2: Tareas Asignadas Activas -->
    <div>
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-extrabold text-slate-900 tracking-tight">
                📋 Tareas Asignadas a Emmanuel
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($activeAssignments as $assignment)
                @php $isMath = $assignment->subject->slug === 'matematica'; @endphp
                <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between text-xs mb-2">
                            <span class="font-extrabold px-2.5 py-0.5 rounded-md {{ $isMath ? 'bg-indigo-50 text-indigo-700' : 'bg-emerald-50 text-emerald-700' }}">
                                {{ $assignment->subject->name }}
                            </span>
                            @if($assignment->due_date)
                                <span class="text-slate-400 font-medium">Límite: {{ $assignment->due_date->format('d/m/Y H:i') }}</span>
                            @endif
                        </div>
                        <h3 class="font-bold text-slate-900 text-base">{{ $assignment->title }}</h3>
                        <p class="text-xs text-slate-600 mt-1 whitespace-pre-line">{{ $assignment->description }}</p>
                    </div>

                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                        <span>Creada {{ $assignment->created_at->format('d/m/Y') }}</span>
                        <span class="font-bold text-indigo-600">{{ $assignment->submissions->count() }} entrega(s)</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Sección 3: Historial Reciente de Entregas Calificadas -->
    <div>
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-extrabold text-slate-900 tracking-tight">
                📜 Historial de Entregas
            </h2>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-slate-50 border-b border-slate-200 text-xs font-bold text-slate-400 uppercase tracking-wider">
                        <tr>
                            <th class="px-6 py-4">Materia</th>
                            <th class="px-6 py-4">Título del Deber</th>
                            <th class="px-6 py-4">Fecha de Entrega</th>
                            <th class="px-6 py-4">Estado / Nota</th>
                            <th class="px-6 py-4 text-right">Acción</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 font-medium">
                        @forelse($recentSubmissions as $sub)
                            @php $isMath = $sub->subject->slug === 'matematica'; @endphp
                            <tr class="hover:bg-slate-50/50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-xs font-extrabold px-2.5 py-1 rounded-lg {{ $isMath ? 'bg-indigo-50 text-indigo-700' : 'bg-emerald-50 text-emerald-700' }}">
                                        {{ $sub->subject->name }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-bold text-slate-900">{{ $sub->title }}</div>
                                    @if($sub->link_url)
                                        <a href="{{ $sub->link_url }}" target="_blank" rel="noopener noreferrer" class="text-xs font-bold text-emerald-600 hover:text-emerald-800 inline-flex items-center gap-1 mt-0.5">
                                            <i class="fa-solid fa-globe"></i> Proyecto Web
                                            <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                                        </a>
                                    @endif
                                    @if($sub->files->count() > 0)
                                        <div class="text-xs text-slate-400">{{ $sub->files->count() }} archivo(s) adjuntos</div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-xs text-slate-500 whitespace-nowrap">
                                    {{ $sub->submitted_at->format('d/m/Y H:i') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($sub->status === 'reviewed')
                                        <span class="bg-emerald-100 text-emerald-800 font-extrabold text-xs px-2.5 py-1 rounded-full">
                                            ⭐ {{ number_format($sub->grade, 1) }} / 10
                                        </span>
                                    @else
                                        <span class="bg-amber-100 text-amber-800 font-bold text-xs px-2.5 py-1 rounded-full">
                                            ⏳ Pendiente
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right whitespace-nowrap">
                                    <a href="{{ route('submission.show', $sub->id) }}" class="text-xs font-bold text-indigo-600 hover:text-indigo-800">
                                        Ver Entrega &rarr;
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-8 text-center text-slate-400 text-xs">
                                    Aún no hay entregas registradas en el historial.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal: Asignar Nueva Tarea a Emmanuel -->
    <div x-show="createModal" x-cloak class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm animate-fade-in">
        <div @click.outside="createModal = false" class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl border border-slate-100">
            <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-2xl bg-purple-100 text-purple-600 flex items-center justify-center">
                        <i class="fa-solid fa-plus text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-extrabold text-lg text-slate-900">Asignar Nueva Tarea</h3>
                        <p class="text-xs text-slate-500">Emmanuel la verá en su panel de deberes</p>
                    </div>
                </div>
                <button @click="createModal = false" class="w-8 h-8 rounded-full hover:bg-slate-100 text-slate-400 flex items-center justify-center">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <form action="{{ route('assignment.create') }}" method="POST" enctype="multipart/form-data" class="mt-6 space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Materia *</label>
                    <select name="subject_id" required class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-semibold">
                        @foreach($subjects as $s)
                            <option value="{{ $s->id }}">{{ $s->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Título del Deber *</label>
                    <input type="text" name="title" required placeholder="Ej. Taller #2: Ecuaciones Cuadráticas" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Instrucciones detalladas *</label>
                    <textarea name="description" rows="3" required placeholder="Indicar qué ejercicios realizar, páginas del libro o formato de entrega..." class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium"></textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Fecha y Hora Límite (Opcional)</label>
                    <input type="datetime-local" name="due_date" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium">
                </div>

                <div class="flex items-center justify-end gap-3 pt-3 border-t border-slate-100">
                    <button type="button" @click="createModal = false" class="px-5 py-2.5 rounded-xl font-bold text-sm text-slate-600 hover:bg-slate-100">
                        Cancelar
                    </button>
                    <button type="submit" class="px-6 py-2.5 rounded-xl font-bold text-sm bg-purple-600 hover:bg-purple-700 text-white shadow-lg shadow-purple-200 transition-all flex items-center gap-2">
                        <i class="fa-solid fa-paper-plane"></i> Publicar Tarea
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

