<!DOCTYPE html>
<html lang="es" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title', 'Deberes Emanuel') - Portal de Entregas</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            800: '#3730a3',
                            900: '#312e81',
                        },
                        math: {
                            light: '#e0e7ff',
                            DEFAULT: '#4f46e5',
                            dark: '#3730a3',
                        },
                        comp: {
                            light: '#ccfbf1',
                            DEFAULT: '#0d9488',
                            dark: '#115e59',
                        }
                    }
                }
            }
        }
    </script>
    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
    @yield('styles')
</head>
<body class="h-full flex flex-col bg-slate-50 text-slate-800 antialiased selection:bg-indigo-500 selection:text-white" x-data="{ uploadModal: false, selectedSubject: 1, selectedAssignment: null, assignmentTitle: '' }">

    <!-- Navbar Superior -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-40 shadow-sm backdrop-blur-md bg-white/95">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                
                <!-- Logo & Título -->
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-600 to-purple-600 flex items-center justify-center text-white shadow-md shadow-indigo-200 group-hover:scale-105 transition-transform">
                        <i class="fa-solid fa-graduation-cap text-lg"></i>
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="font-extrabold text-lg tracking-tight text-slate-900">Deberes Emanuel</span>
                            @if(auth()->user()->isTeacher())
                                <span class="bg-purple-100 text-purple-700 text-xs px-2 py-0.5 rounded-full font-bold">Docente</span>
                            @else
                                <span class="bg-indigo-100 text-indigo-700 text-xs px-2 py-0.5 rounded-full font-bold">Estudiante</span>
                            @endif
                        </div>
                        <p class="text-xs text-slate-400 font-medium hidden sm:block">Matemática & Computación</p>
                    </div>
                </a>

                <!-- Navegación Desktop -->
                <nav class="hidden md:flex items-center gap-1">
                    <a href="{{ route('dashboard') }}" class="px-3.5 py-2 rounded-lg text-sm font-semibold {{ request()->routeIs('dashboard') ? 'bg-indigo-50 text-indigo-600' : 'text-slate-600 hover:bg-slate-100' }} transition-colors">
                        <i class="fa-solid fa-house-chimney mr-1.5"></i> Inicio
                    </a>
                    <a href="{{ route('subject.show', 'matematica') }}" class="px-3.5 py-2 rounded-lg text-sm font-semibold {{ request()->is('*matematica*') ? 'bg-indigo-50 text-indigo-600' : 'text-slate-600 hover:bg-slate-100' }} transition-colors">
                        <i class="fa-solid fa-calculator text-indigo-500 mr-1.5"></i> Matemática
                    </a>
                    <a href="{{ route('subject.show', 'computacion') }}" class="px-3.5 py-2 rounded-lg text-sm font-semibold {{ request()->is('*computacion*') ? 'bg-emerald-50 text-emerald-600' : 'text-slate-600 hover:bg-slate-100' }} transition-colors">
                        <i class="fa-solid fa-laptop-code text-emerald-500 mr-1.5"></i> Computación
                    </a>
                </nav>

                <!-- Acciones Derecha -->
                <div class="flex items-center gap-3">
                    @if(auth()->user()->isStudent())
                        <button @click="uploadModal = true" class="inline-flex items-center gap-2 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-bold text-sm px-4 py-2.5 rounded-xl shadow-md shadow-indigo-200 transition-all active:scale-95">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                            <span class="hidden sm:inline">Subir Deber</span>
                        </button>
                    @endif

                    <!-- User Menu Dropdown -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center gap-2 p-1.5 rounded-xl hover:bg-slate-100 transition-colors">
                            <div class="w-8 h-8 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center font-bold text-sm">
                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                            </div>
                            <span class="text-sm font-semibold text-slate-700 hidden lg:inline">{{ auth()->user()->name }}</span>
                            <i class="fa-solid fa-chevron-down text-xs text-slate-400"></i>
                        </button>

                        <div x-show="open" @click.outside="open = false" x-cloak class="absolute right-0 mt-2 w-56 bg-white rounded-2xl shadow-xl border border-slate-100 py-2 z-50">
                            <div class="px-4 py-2 border-b border-slate-100">
                                <p class="text-xs text-slate-400">Conectado como</p>
                                <p class="text-sm font-bold text-slate-800">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-indigo-600 font-medium">{{ auth()->user()->isTeacher() ? 'Profesor' : 'Alumno' }}</p>
                            </div>

                            <div class="pt-1">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left flex items-center gap-2 px-4 py-2 text-sm text-rose-600 hover:bg-rose-50 font-semibold">
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar Sesión
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- Barra de Alertas Flash -->
    @if(session('success'))
        <div class="bg-emerald-500 text-white px-4 py-3 text-center font-bold text-sm shadow-md flex items-center justify-center gap-2 animate-fade-in">
            <i class="fa-solid fa-circle-check text-lg"></i>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    @if(session('error') || $errors->any())
        <div class="bg-rose-500 text-white px-4 py-3 text-center font-bold text-sm shadow-md flex items-center justify-center gap-2">
            <i class="fa-solid fa-triangle-exclamation text-lg"></i>
            <span>{{ session('error') ?? $errors->first() }}</span>
        </div>
    @endif

    <!-- Contenido Principal -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8">
        @yield('content')
    </main>

    <!-- Modal Global: Subir Deber (Accessible con 1 Clic) -->
    <div x-show="uploadModal" x-cloak class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm animate-fade-in">
        <div @click.outside="uploadModal = false" class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl border border-slate-100 max-h-[90vh] overflow-y-auto">
            <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-2xl bg-indigo-100 text-indigo-600 flex items-center justify-center">
                        <i class="fa-solid fa-cloud-arrow-up text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-extrabold text-lg text-slate-900">Subir Deber</h3>
                        <p class="text-xs text-slate-500">Completa los datos y adjunta tus archivos</p>
                    </div>
                </div>
                <button @click="uploadModal = false" class="w-8 h-8 rounded-full hover:bg-slate-100 text-slate-400 hover:text-slate-600 flex items-center justify-center">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <form action="{{ route('homework.submit') }}" method="POST" enctype="multipart/form-data" class="mt-6 space-y-5">
                @csrf
                <input type="hidden" name="assignment_id" :value="selectedAssignment">

                <!-- Indicador de Tarea Vinculada -->
                <div x-show="assignmentTitle" class="p-3 bg-indigo-50 border border-indigo-100 rounded-xl flex items-center justify-between text-xs">
                    <div class="flex items-center gap-2 text-indigo-900 font-bold">
                        <i class="fa-solid fa-link text-indigo-600"></i>
                        <span>Tarea: <span class="font-normal" x-text="assignmentTitle"></span></span>
                    </div>
                    <button type="button" @click="selectedAssignment = null; assignmentTitle = ''" class="text-indigo-400 hover:text-indigo-600 font-bold text-[11px]">
                        <i class="fa-solid fa-xmark"></i> Desvincular
                    </button>
                </div>
                
                <!-- Selector de Materia -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Materia *</label>
                    <div class="grid grid-cols-2 gap-3">
                        <label class="relative flex flex-col p-3 border-2 rounded-2xl cursor-pointer hover:border-indigo-500 transition-all"
                               :class="selectedSubject == 1 ? 'border-indigo-600 bg-indigo-50/50 ring-2 ring-indigo-500/20' : 'border-slate-200 bg-white'">
                            <input type="radio" name="subject_id" value="1" x-model="selectedSubject" class="sr-only">
                            <span class="flex items-center gap-2 font-bold text-slate-800 text-sm">
                                <i class="fa-solid fa-calculator text-indigo-600"></i> Matemática
                            </span>
                            <span class="text-xs text-slate-400 mt-1">Fotos del cuaderno</span>
                        </label>

                        <label class="relative flex flex-col p-3 border-2 rounded-2xl cursor-pointer hover:border-emerald-500 transition-all"
                               :class="selectedSubject == 2 ? 'border-emerald-600 bg-emerald-50/50 ring-2 ring-emerald-500/20' : 'border-slate-200 bg-white'">
                            <input type="radio" name="subject_id" value="2" x-model="selectedSubject" class="sr-only">
                            <span class="flex items-center gap-2 font-bold text-slate-800 text-sm">
                                <i class="fa-solid fa-laptop-code text-emerald-600"></i> Computación
                            </span>
                            <span class="text-xs text-slate-400 mt-1">Enlace del proyecto web</span>
                        </label>
                    </div>
                </div>

                <!-- Título del Deber -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Título del Deber *</label>
                    <input type="text" name="title" required :placeholder="assignmentTitle ? assignmentTitle : (selectedSubject == 1 ? 'Ej. División 28.851 ÷ 88 / Taller de Estimación' : 'Ej. Portafolio Web / Napoleón / Horario')" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm font-medium">
                </div>

                <!-- Enlace Web del Proyecto (Solo Computación) -->
                <div x-show="selectedSubject == 2" x-transition class="p-4 rounded-2xl bg-emerald-50/60 border border-emerald-200 space-y-2">
                    <label class="block text-xs font-bold text-emerald-900 uppercase tracking-wider flex items-center justify-between">
                        <span>Enlace Web del Proyecto *</span>
                        <span class="text-[10px] text-emerald-700 font-semibold normal-case">GitHub Pages / Web en Vivo</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-emerald-600">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <input type="url" name="link_url" :required="selectedSubject == 2" :disabled="selectedSubject != 2" placeholder="https://paholaguevara2977-eng.github.io/portafolio/..." class="w-full pl-10 pr-4 py-3 rounded-xl border border-emerald-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm font-semibold bg-white text-slate-800 placeholder-slate-400">
                    </div>
                    <p class="text-[11px] text-emerald-700">Pega aquí el enlace directo a tu página o trabajo en GitHub Pages.</p>
                </div>

                <!-- Selector de Archivos (Fotos o Documentos) -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2 flex items-center justify-between">
                        <span x-text="selectedSubject == 1 ? 'Fotos del Deber (Cuaderno / Hoja) *' : 'Captura de Pantalla o Archivo (Opcional)'"></span>
                        <span class="text-[10px] font-semibold" :class="selectedSubject == 1 ? 'text-indigo-600' : 'text-slate-400'" x-text="selectedSubject == 1 ? 'Obligatorio' : 'Opcional'"></span>
                    </label>
                    <div class="border-2 border-dashed rounded-2xl p-6 text-center cursor-pointer transition-colors bg-slate-50/50 relative"
                         :class="selectedSubject == 1 ? 'border-indigo-300 hover:border-indigo-500' : 'border-slate-300 hover:border-emerald-500'">
                        <input type="file" name="files[]" multiple :required="selectedSubject == 1" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="fileInput" onchange="updateFileLabel(this)">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-3"
                                 :class="selectedSubject == 1 ? 'bg-indigo-100 text-indigo-600' : 'bg-emerald-100 text-emerald-600'">
                                <i class="fa-solid fa-camera text-xl sm:hidden"></i>
                                <i class="fa-solid fa-file-arrow-up text-xl hidden sm:inline"></i>
                            </div>
                            <p class="text-sm font-bold text-slate-800" id="fileLabel" x-text="selectedSubject == 1 ? 'Haz clic para tomar fotos o elegir archivos' : 'Haz clic para adjuntar captura o imagen (opcional)'"></p>
                            <p class="text-xs text-slate-400 mt-1" x-text="selectedSubject == 1 ? 'Fotos claras del cuaderno o ejercicios resueltos (Hasta 50MB)' : 'Sube una captura de tu web o diseño si lo deseas (opcional)'"></p>
                        </div>
                    </div>
                </div>

                <!-- Notas del estudiante -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Notas o Preguntas para el Profesor (Opcional)</label>
                    <textarea name="student_notes" rows="2" placeholder="Profe Carlos, adjunto las fotos de los ejercicios o comentarios del proyecto..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm font-medium"></textarea>
                </div>

                <!-- Botones -->
                <div class="flex items-center justify-end gap-3 pt-3 border-t border-slate-100">
                    <button type="button" @click="uploadModal = false" class="px-5 py-2.5 rounded-xl font-bold text-sm text-slate-600 hover:bg-slate-100 transition-colors">
                        Cancelar
                    </button>
                    <button type="submit" class="px-6 py-2.5 rounded-xl font-bold text-sm bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white shadow-lg shadow-indigo-200 transition-all active:scale-95 flex items-center gap-2">
                        <i class="fa-solid fa-paper-plane"></i> Enviar Deber
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Navegación Móvil Inferior (Bottom Bar) -->
    <div class="md:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-slate-200 px-4 py-2 z-30 flex justify-around items-center shadow-lg">
        <a href="{{ route('dashboard') }}" class="flex flex-col items-center gap-1 text-xs font-bold {{ request()->routeIs('dashboard') ? 'text-indigo-600' : 'text-slate-400' }}">
            <i class="fa-solid fa-house text-lg"></i>
            <span>Inicio</span>
        </a>
        <a href="{{ route('subject.show', 'matematica') }}" class="flex flex-col items-center gap-1 text-xs font-bold {{ request()->is('*matematica*') ? 'text-indigo-600' : 'text-slate-400' }}">
            <i class="fa-solid fa-calculator text-lg"></i>
            <span>Mate</span>
        </a>
        
        @if(auth()->user()->isStudent())
            <button @click="uploadModal = true" class="-mt-6 w-12 h-12 rounded-full bg-gradient-to-tr from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-300 flex items-center justify-center text-xl font-bold">
                <i class="fa-solid fa-plus"></i>
            </button>
        @endif

        <a href="{{ route('subject.show', 'computacion') }}" class="flex flex-col items-center gap-1 text-xs font-bold {{ request()->is('*computacion*') ? 'text-emerald-600' : 'text-slate-400' }}">
            <i class="fa-solid fa-laptop-code text-lg"></i>
            <span>Compu</span>
        </a>
        
        <form method="POST" action="{{ route('logout') }}" class="flex flex-col items-center">
            @csrf
            <button type="submit" class="flex flex-col items-center gap-1 text-xs font-bold text-slate-400 hover:text-rose-500">
                <i class="fa-solid fa-right-from-bracket text-lg"></i>
                <span>Salir</span>
            </button>
        </form>
    </div>

    <!-- Script para actualizar texto del archivo seleccionado -->
    <script>
        function updateFileLabel(input) {
            const label = document.getElementById('fileLabel');
            if (input.files && input.files.length > 0) {
                if (input.files.length === 1) {
                    label.textContent = '📄 ' + input.files[0].name;
                } else {
                    label.textContent = `📁 ${input.files.length} archivos seleccionados`;
                }
            } else {
                label.textContent = 'Haz clic para tomar fotos o elegir archivos';
            }
        }
    </script>

    @yield('scripts')
</body>
</html>
