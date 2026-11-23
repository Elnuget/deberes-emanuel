<!DOCTYPE html>
<html lang="es" class="h-full bg-slate-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe Oficial de Avance Académico - Unidad 1 | Emanuel</title>
    
    <!-- Metatags para Compartir en Redes y WhatsApp -->
    <meta property="og:title" content="Informe Oficial de Avance Académico - Unidad 1 | Emanuel">
    <meta property="og:description" content="Reporte de evaluación académica en Matemática y Computación. Cierre de Unidad 1 y Planificación Unidad 2 - Prof. Carlos Angulo.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url('/informe/unidad-1') }}">
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Tailwind CSS (CDN para renderizado público y de impresión independiente) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #1e293b;
        }

        @media print {
            .no-print {
                display: none !important;
            }
            body {
                background-color: #ffffff !important;
                padding: 0 !important;
            }
            .print-container {
                box-shadow: none !important;
                border: none !important;
                max-width: 100% !important;
                padding: 0 !important;
                margin: 0 !important;
            }
            .page-break {
                page-break-before: always;
            }
            .avoid-break {
                break-inside: avoid;
                page-break-inside: avoid;
            }
            a {
                text-decoration: none !important;
                color: inherit !important;
            }
        }

        @page {
            size: A4 portrait;
            margin: 1.2cm;
        }
    </style>
</head>
<body class="min-h-full py-4 sm:py-8 antialiased selection:bg-indigo-500 selection:text-white">

    <!-- BARRA SUPERIOR DE ACCIONES (Oculta al imprimir) -->
    <header class="no-print max-w-4xl mx-auto px-4 mb-6">
        <div class="bg-white/95 backdrop-blur-md rounded-2xl p-4 border border-slate-200/80 shadow-md flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <a href="{{ url('/') }}" class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-600 to-purple-600 text-white flex items-center justify-center font-extrabold text-lg shadow-sm hover:scale-105 transition-transform">
                    <i class="fa-solid fa-graduation-cap"></i>
                </a>
                <div>
                    <h1 class="text-sm font-extrabold text-slate-900 leading-tight">Deberes Emanuel</h1>
                    <p class="text-[11px] font-semibold text-slate-500">Informe Académico Oficial &bull; Vista Pública</p>
                </div>
            </div>

            <div class="flex items-center gap-2 flex-wrap">
                <!-- Botón de Imprimir / Guardar PDF -->
                <button onclick="window.print()" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-white text-xs font-bold shadow-sm transition-all active:scale-95">
                    <i class="fa-solid fa-print"></i>
                    <span>Imprimir / Guardar PDF</span>
                </button>

                <!-- Botón de Compartir por WhatsApp -->
                <a href="https://api.whatsapp.com/send?text={{ urlencode('📄 Informe Oficial de Avances de Emanuel (Unidad 1): ' . url('/informe/unidad-1')) }}" target="_blank" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold shadow-sm transition-all active:scale-95">
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                    <span>Compartir por WhatsApp</span>
                </a>

                @auth
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-1.5 px-3 py-2 rounded-xl bg-indigo-50 text-indigo-700 hover:bg-indigo-100 text-xs font-bold transition-colors">
                        <i class="fa-solid fa-arrow-left"></i> Volver al Panel
                    </a>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center gap-1.5 px-3 py-2 rounded-xl bg-indigo-50 text-indigo-700 hover:bg-indigo-100 text-xs font-bold transition-colors">
                        <i class="fa-solid fa-lock"></i> Acceso Portal
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <!-- DOCUMENTO PRINCIPAL (HOJA DE INFORME TIPO REPORTE CARD) -->
    <main class="max-w-4xl mx-auto px-4 sm:px-6">
        <div class="print-container bg-white rounded-3xl border border-slate-200/90 shadow-xl p-6 sm:p-10 space-y-8">
            
            <!-- ENCABEZADO INSTITUCIONAL DEL REPORTE -->
            <div class="border-b border-slate-200 pb-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center gap-3.5">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-indigo-700 via-indigo-600 to-purple-700 text-white flex items-center justify-center font-extrabold text-2xl shadow-md">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <div>
                            <span class="inline-flex items-center gap-1.5 text-[10px] font-extrabold uppercase tracking-widest text-indigo-700 bg-indigo-50 px-2.5 py-0.5 rounded-full border border-indigo-100 mb-1">
                                SISTEMA EDUCATIVO NOXDATA &bull; DEBERES EMANUEL
                            </span>
                            <h2 class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight">
                                INFORME DE AVANCE ACADÉMICO
                            </h2>
                            <p class="text-xs font-medium text-slate-500">
                                Cierre de Unidad 1 (Diagnóstico y Cimientos) &bull; Planificación Unidad 2
                            </p>
                        </div>
                    </div>

                    <div class="text-left sm:text-right bg-slate-50 sm:bg-transparent p-3 sm:p-0 rounded-xl border sm:border-0 border-slate-200">
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Fecha de Emisión</p>
                        <p class="text-xs font-extrabold text-slate-800">23 de Noviembre de 2026</p>
                        <p class="text-[10px] font-semibold text-emerald-600 mt-0.5">
                            <i class="fa-solid fa-circle-check text-[9px]"></i> Documento Verificado
                        </p>
                    </div>
                </div>

                <!-- FICHA DE DATOS DEL ALUMNO Y TUTOR -->
                <div class="mt-6 grid grid-cols-2 sm:grid-cols-4 gap-3 bg-slate-50/80 rounded-2xl p-4 border border-slate-200/80">
                    <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Estudiante</span>
                        <span class="text-sm font-extrabold text-slate-900">{{ $student->name ?? 'Emanuel' }}</span>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Tutor / Profesor</span>
                        <span class="text-sm font-extrabold text-indigo-700">{{ $teacher->name ?? 'Prof. Carlos Angulo' }}</span>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Nivel / Estado</span>
                        <span class="text-xs font-extrabold text-slate-800">Primaria / Formación Dual</span>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Período Académico</span>
                        <span class="text-xs font-extrabold text-purple-700">Unidad 1 Concluida</span>
                    </div>
                </div>
            </div>

            <!-- TARJETAS DE INDICADORES CLAVE (KPIS) -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3.5 avoid-break">
                <div class="p-4 rounded-2xl bg-emerald-50/70 border border-emerald-200">
                    <div class="flex items-center justify-between text-emerald-700 text-xs font-bold mb-1">
                        <span>Computación</span>
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <div class="text-2xl font-black text-emerald-800">10.0 <span class="text-xs font-bold text-emerald-600">/ 10</span></div>
                    <p class="text-[11px] text-emerald-700 mt-1 font-semibold">4/4 Proyectos Web Aprobados</p>
                </div>

                <div class="p-4 rounded-2xl bg-indigo-50/70 border border-indigo-200">
                    <div class="flex items-center justify-between text-indigo-700 text-xs font-bold mb-1">
                        <span>Matemática</span>
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <div class="text-2xl font-black text-indigo-800">3 Ejes <span class="text-xs font-bold text-indigo-600">Completos</span></div>
                    <p class="text-[11px] text-indigo-700 mt-1 font-semibold">Naturales, Enteros y Fracciones</p>
                </div>

                <div class="p-4 rounded-2xl bg-amber-50/70 border border-amber-200">
                    <div class="flex items-center justify-between text-amber-700 text-xs font-bold mb-1">
                        <span>Enfoque y Foco</span>
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <div class="text-2xl font-black text-amber-800">Plan <span class="text-xs font-bold text-amber-600">Activo</span></div>
                    <p class="text-[11px] text-amber-700 mt-1 font-semibold">Entrenamiento de Concentración</p>
                </div>

                <div class="p-4 rounded-2xl bg-purple-50/70 border border-purple-200">
                    <div class="flex items-center justify-between text-purple-700 text-xs font-bold mb-1">
                        <span>Siguiente Ciclo</span>
                        <i class="fa-solid fa-rocket"></i>
                    </div>
                    <div class="text-2xl font-black text-purple-800">Unidad 2</div>
                    <p class="text-[11px] text-purple-700 mt-1 font-semibold">Decimales y Estilos CSS</p>
                </div>
            </div>

            <!-- SECCIÓN 1: COMPUTACIÓN (PROYECTOS Y CALIFICACIONES) -->
            <div class="space-y-4 avoid-break">
                <div class="flex items-center justify-between border-b border-slate-200 pb-2">
                    <h3 class="text-base font-extrabold text-slate-900 flex items-center gap-2">
                        <span class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-xs">
                            <i class="fa-solid fa-laptop-code"></i>
                        </span>
                        <span>1. Computación y Desarrollo Web — Unidad 1</span>
                    </h3>
                    <span class="text-xs font-extrabold text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-full border border-emerald-200">
                        Nota Promedio: 10.00 / 10 ⭐
                    </span>
                </div>

                <p class="text-xs text-slate-600 leading-relaxed">
                    Durante esta primera etapa, Emanuel aprendió las bases reales de la programación web moderna con <strong>HTML5</strong>. Logró estructurar documentos, vincular hipervínculos de navegación, redactar contenido biográfico e histórico y dominar tablas complejas, publicando todo de forma autónoma en <strong>GitHub Pages</strong>.
                </p>

                <!-- Tabla de Entregas de Computación -->
                <div class="overflow-hidden rounded-2xl border border-slate-200 shadow-xs">
                    <table class="min-w-full divide-y divide-slate-200 text-left text-xs">
                        <thead class="bg-slate-50 font-bold text-slate-600">
                            <tr>
                                <th class="px-4 py-3">Proyecto / Tarea</th>
                                <th class="px-4 py-3">Habilidad Evaluada</th>
                                <th class="px-4 py-3">Enlace del Proyecto</th>
                                <th class="px-4 py-3 text-center">Calificación</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 bg-white">
                            @forelse($compuSubmissions as $sub)
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="px-4 py-3 font-extrabold text-slate-900">
                                        {{ $sub->title }}
                                        @if($sub->student_notes)
                                            <p class="text-[10px] text-slate-400 font-normal mt-0.5">{{ $sub->student_notes }}</p>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3 text-slate-600">
                                        @if(str_contains(strtolower($sub->title), 'portafolio'))
                                            Estructura raíz, enlaces absolutos y arquitectura
                                        @elseif(str_contains(strtolower($sub->title), 'napole'))
                                            Investigación, párrafos y jerarquía de títulos
                                        @elseif(str_contains(strtolower($sub->title), 'cien'))
                                            Cronología histórica y síntesis informativa
                                        @elseif(str_contains(strtolower($sub->title), 'horario'))
                                            Tablas HTML avanzadas (table, tr, th, td) y simetría
                                        @else
                                            Maquetación y desarrollo HTML5
                                        @endif
                                    </td>
                                    <td class="px-4 py-3">
                                        @if($sub->link_url)
                                            <a href="{{ $sub->link_url }}" target="_blank" class="text-emerald-600 hover:text-emerald-800 font-bold inline-flex items-center gap-1">
                                                <span>Ver Web</span>
                                                <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                                            </a>
                                        @else
                                            <span class="text-slate-400">Sin enlace</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="inline-flex items-center gap-1 font-black text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full text-xs">
                                            {{ number_format($sub->grade ?? 10, 1) }} / 10
                                        </span>
                                    </td>
                                </tr>
                                @if($sub->teacher_feedback)
                                    <tr class="bg-emerald-50/30">
                                        <td colspan="4" class="px-4 py-2 text-[11px] text-slate-600 italic border-b border-slate-100">
                                            <strong class="text-emerald-800 not-italic font-bold">Retroalimentación del Tutor:</strong> "{{ $sub->teacher_feedback }}"
                                        </td>
                                    </tr>
                                @endif
                            @empty
                                <tr>
                                    <td colspan="4" class="px-4 py-3 text-center text-slate-400">No se encontraron entregas registradas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="p-3 bg-emerald-50/50 rounded-xl border border-emerald-100 text-[11px] text-emerald-900 leading-relaxed">
                    💡 <strong>¿Por qué fue crucial este aprendizaje?</strong> Porque escribir código HTML le exige rigor y atención al detalle: si olvida cerrar una etiqueta, el diseño se deforma. Esto educa directamente la paciencia y el autocontrol frente a la pantalla.
                </div>
            </div>

            <!-- SECCIÓN 2: MATEMÁTICA (CÁLCULO, EJES Y TALLERES) -->
            <div class="space-y-4 avoid-break">
                <div class="flex items-center justify-between border-b border-slate-200 pb-2">
                    <h3 class="text-base font-extrabold text-slate-900 flex items-center gap-2">
                        <span class="w-7 h-7 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center text-xs">
                            <i class="fa-solid fa-calculator"></i>
                        </span>
                        <span>2. Matemática — Cimientos Numéricos de la Unidad 1</span>
                    </h3>
                    <span class="text-xs font-bold text-indigo-700 bg-indigo-50 px-2.5 py-1 rounded-full border border-indigo-200">
                        Fundamentos Completos
                    </span>
                </div>

                <p class="text-xs text-slate-600 leading-relaxed">
                    En esta materia se consolidaron las bases del razonamiento lógico-cuantitativo previo al paso a números con coma (decimales):
                </p>

                <!-- 3 Ejes Conceptuales -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                        <span class="text-xs font-extrabold text-indigo-700 block mb-1">1. Números Naturales ($\mathbb{N}$)</span>
                        <p class="text-[11px] text-slate-600">Dominio de operaciones básicas, estimación de cantidades grandes y jerarquía operacional.</p>
                    </div>
                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                        <span class="text-xs font-extrabold text-indigo-700 block mb-1">2. Números Enteros ($\mathbb{Z}$)</span>
                        <p class="text-[11px] text-slate-600">Cantidades positivas y negativas, recta numérica, valor absoluto y sentido de balance/deuda.</p>
                    </div>
                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                        <span class="text-xs font-extrabold text-indigo-700 block mb-1">3. Fracciones ($\mathbb{Q}$)</span>
                        <p class="text-[11px] text-slate-600">Relación parte-todo, simplificación y equivalencias. Puente directo hacia los decimales.</p>
                    </div>
                </div>

                <!-- Tareas Prácticas Asignadas en Cuaderno -->
                <div class="bg-indigo-50/40 rounded-2xl p-4 border border-indigo-100 space-y-3">
                    <div class="flex items-center justify-between">
                        <h4 class="text-xs font-extrabold text-indigo-950 uppercase tracking-wider">
                            📝 Talleres de Evaluación Asignados para Cuaderno:
                        </h4>
                        <span class="text-[10px] font-bold text-amber-700 bg-amber-100 px-2 py-0.5 rounded-full">
                            Pendientes de fotografía del cuaderno
                        </span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        @foreach($mathAssignments as $asig)
                            <div class="bg-white p-3 rounded-xl border border-indigo-100 shadow-xs flex flex-col justify-between">
                                <div>
                                    <span class="text-[10px] font-bold text-indigo-500 uppercase">Taller #{{ $loop->iteration }}</span>
                                    <h5 class="font-extrabold text-slate-900 text-xs mt-0.5">{{ $asig->title }}</h5>
                                    <p class="text-[11px] text-slate-500 mt-1 line-clamp-3">{{ $asig->description }}</p>
                                </div>
                                <div class="mt-3 pt-2 border-t border-slate-100 flex items-center justify-between text-[10px]">
                                    <span class="text-slate-400 font-semibold">Formato: Cuaderno</span>
                                    @if($asig->guide_file)
                                        <span class="text-indigo-600 font-bold"><i class="fa-solid fa-image"></i> Guía adjunta</span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-3 bg-indigo-50/50 rounded-xl border border-indigo-100 text-[11px] text-indigo-900 leading-relaxed">
                    💡 <strong>¿Por qué fue crucial este aprendizaje?</strong> La división de dos cifras y la estimación mental evitan que el estudiante dependa de la calculadora, agilizando la memoria de trabajo y la confianza para abordar problemas de la vida real.
                </div>
            </div>

            <!-- SECCIÓN 3: ESTRATEGIA DE CONCENTRACIÓN Y HÁBITOS DE ESTUDIO -->
            <div class="space-y-4 avoid-break bg-gradient-to-br from-amber-50/60 to-orange-50/60 rounded-3xl p-5 sm:p-6 border border-amber-200">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-500 text-white flex items-center justify-center font-bold text-lg shadow-sm">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <div>
                        <h3 class="text-base font-extrabold text-amber-950">
                            3. Plan de Choque: Entrenamiento de la Concentración y el Enfoque
                        </h3>
                        <p class="text-xs text-amber-800">Metodología aplicada para evitar la dispersión y potenciar la autonomía de Emanuel</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 text-xs">
                    <div class="bg-white/90 p-4 rounded-2xl border border-amber-200 shadow-xs">
                        <div class="font-extrabold text-amber-900 flex items-center gap-1.5 mb-1">
                            <i class="fa-solid fa-stopwatch text-amber-600"></i>
                            <span>1. Micro-bloques (20 min)</span>
                        </div>
                        <p class="text-[11px] text-slate-600 leading-relaxed">
                            Sesiones de resolución intensiva de 20 minutos seguidas de 5 minutos de descanso activo. Cero teléfonos, pantallas secundarias o ruidos durante el bloque.
                        </p>
                    </div>

                    <div class="bg-white/90 p-4 rounded-2xl border border-amber-200 shadow-xs">
                        <div class="font-extrabold text-amber-900 flex items-center gap-1.5 mb-1">
                            <i class="fa-solid fa-border-all text-amber-600"></i>
                            <span>2. Orden Espacial en Cuaderno</span>
                        </div>
                        <p class="text-[11px] text-slate-600 leading-relaxed">
                            Un dígito por casilla en cuaderno cuadriculado. El orden visual en el papel evita saltarse cifras en restas y divisiones, previniendo errores por descuido.
                        </p>
                    </div>

                    <div class="bg-white/90 p-4 rounded-2xl border border-amber-200 shadow-xs">
                        <div class="font-extrabold text-amber-900 flex items-center gap-1.5 mb-1">
                            <i class="fa-solid fa-list-check text-amber-600"></i>
                            <span>3. Checklist de Autocontrol</span>
                        </div>
                        <p class="text-[11px] text-slate-600 leading-relaxed">
                            Antes de entregar, Emanuel debe autoverificar 3 puntos: ¿multipliqué bien?, ¿el residuo es menor al divisor?, ¿el procedimiento está completo?
                        </p>
                    </div>
                </div>
            </div>

            <!-- SECCIÓN 4: PLANIFICACIÓN Y OBJETIVOS — UNIDAD 2 -->
            <div class="space-y-4 avoid-break">
                <div class="flex items-center justify-between border-b border-slate-200 pb-2">
                    <h3 class="text-base font-extrabold text-slate-900 flex items-center gap-2">
                        <span class="w-7 h-7 rounded-lg bg-purple-100 text-purple-700 flex items-center justify-center text-xs">
                            <i class="fa-solid fa-compass"></i>
                        </span>
                        <span>4. Proyección Curricular — Objetivos de la Unidad 2</span>
                    </h3>
                    <span class="text-xs font-bold text-purple-700 bg-purple-50 px-2.5 py-1 rounded-full border border-purple-200">
                        Próxima Etapa
                    </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Matemática Unidad 2 -->
                    <div class="p-4 rounded-2xl bg-indigo-50/50 border border-indigo-200 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-indigo-900 font-extrabold text-xs mb-2">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-calculator text-indigo-600"></i> Matemática: Números Decimales
                                </span>
                                <span class="text-[10px] bg-indigo-100 px-2 py-0.5 rounded-full font-bold">U2</span>
                            </div>
                            <ul class="text-[11px] text-slate-700 space-y-1.5">
                                <li class="flex items-start gap-1.5">
                                    <i class="fa-solid fa-check text-indigo-600 mt-0.5 text-[10px]"></i>
                                    <span><strong>Valor posicional:</strong> Décimos, centésimos y milésimos en la vida diaria.</span>
                                </li>
                                <li class="flex items-start gap-1.5">
                                    <i class="fa-solid fa-check text-indigo-600 mt-0.5 text-[10px]"></i>
                                    <span><strong>Conversión Fracción-Decimal:</strong> Equivalencias clave ($\frac{1}{2} = 0.5$, $\frac{1}{4} = 0.25$, $\frac{3}{4} = 0.75$).</span>
                                </li>
                                <li class="flex items-start gap-1.5">
                                    <i class="fa-solid fa-check text-indigo-600 mt-0.5 text-[10px]"></i>
                                    <span><strong>Operaciones con coma:</strong> Suma, resta y multiplicación con alineación precisa.</span>
                                </li>
                                <li class="flex items-start gap-1.5">
                                    <i class="fa-solid fa-check text-indigo-600 mt-0.5 text-[10px]"></i>
                                    <span><strong>Problemas reales:</strong> Compras, presupuestos, medidas de longitud y peso.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Computación Unidad 2 -->
                    <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-200 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-emerald-900 font-extrabold text-xs mb-2">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-palette text-emerald-600"></i> Computación: Diseño y Estilos CSS
                                </span>
                                <span class="text-[10px] bg-emerald-100 px-2 py-0.5 rounded-full font-bold">U2</span>
                            </div>
                            <ul class="text-[11px] text-slate-700 space-y-1.5">
                                <li class="flex items-start gap-1.5">
                                    <i class="fa-solid fa-check text-emerald-600 mt-0.5 text-[10px]"></i>
                                    <span><strong>Sintaxis CSS:</strong> Selectores, propiedades y valores de color y tipografía.</span>
                                </li>
                                <li class="flex items-start gap-1.5">
                                    <i class="fa-solid fa-check text-emerald-600 mt-0.5 text-[10px]"></i>
                                    <span><strong>Modelo de Caja:</strong> Márgenes, rellenos (*padding*) y bordes redondeados.</span>
                                </li>
                                <li class="flex items-start gap-1.5">
                                    <i class="fa-solid fa-check text-emerald-600 mt-0.5 text-[10px]"></i>
                                    <span><strong>Interactividad:</strong> Botones dinámicos con efectos de *hover* al pasar el cursor.</span>
                                </li>
                                <li class="flex items-start gap-1.5">
                                    <i class="fa-solid fa-check text-emerald-600 mt-0.5 text-[10px]"></i>
                                    <span><strong>Proyecto Central:</strong> Rediseñar su Portafolio con estilo profesional.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECCIÓN 5: FIRMAS Y CIERRE FORMAL -->
            <div class="pt-6 border-t border-slate-200 avoid-break">
                <div class="grid grid-cols-2 gap-8 text-center pt-4">
                    <div>
                        <div class="h-16 flex items-end justify-center mb-1">
                            <span class="font-serif italic text-lg text-slate-800 tracking-wider">Carlos Angulo</span>
                        </div>
                        <div class="border-t border-slate-400 w-44 mx-auto pt-1">
                            <p class="text-xs font-extrabold text-slate-900">{{ $teacher->name ?? 'Prof. Carlos Angulo' }}</p>
                            <p class="text-[10px] text-slate-500 font-semibold">Tutor Académico y Responsable</p>
                        </div>
                    </div>

                    <div>
                        <div class="h-16 flex items-end justify-center mb-1">
                            <span class="text-slate-300 text-xs italic">Espacio para firma</span>
                        </div>
                        <div class="border-t border-slate-400 w-44 mx-auto pt-1">
                            <p class="text-xs font-extrabold text-slate-900">Firma del Representante</p>
                            <p class="text-[10px] text-slate-500 font-semibold">Padre / Madre de Familia</p>
                        </div>
                    </div>
                </div>

                <div class="mt-6 text-center text-[10px] text-slate-400">
                    Documento emitido por la plataforma <strong class="text-slate-600">Deberes Emanuel</strong> &bull; Verificable en línea en: 
                    <a href="{{ url('/informe/unidad-1') }}" class="text-indigo-600 font-bold underline">{{ url('/informe/unidad-1') }}</a>
                </div>
            </div>

        </div>
    </main>

    <!-- PIE DE PÁGINA (Solo pantalla) -->
    <footer class="no-print text-center py-6 text-xs text-slate-400">
        &copy; {{ date('Y') }} Deberes Emanuel &bull; Desarrollado por NoxData
    </footer>

</body>
</html>
