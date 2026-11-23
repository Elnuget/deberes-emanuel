<!DOCTYPE html>
<html lang="es" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Avance Académico - Unidad 1 | Emanuel</title>
    
    <!-- Metatags para Compartir en WhatsApp -->
    <meta property="og:title" content="Informe Oficial de Avance Académico - Unidad 1 | Emanuel">
    <meta property="og:description" content="Reporte de evaluación y objetivos cumplidos en Matemática y Computación. Cierre Unidad 1 y Planificación Unidad 2 - Prof. Carlos Angulo.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url('/informe/unidad-1') }}">
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #0f172a;
        }

        @media print {
            .no-print {
                display: none !important;
            }
            body {
                background: #ffffff !important;
                padding: 0 !important;
            }
            .print-card {
                box-shadow: none !important;
                border: none !important;
                max-width: 100% !important;
                padding: 0 !important;
                margin: 0 !important;
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
<body class="min-h-full py-4 sm:py-8 antialiased selection:bg-red-500 selection:text-white text-slate-800">

    <!-- BARRA SUPERIOR DE ACCIONES (No imprimible) -->
    <header class="no-print max-w-4xl mx-auto px-4 mb-6">
        <div class="bg-white rounded-2xl p-3 sm:p-4 border border-slate-200 shadow-sm flex flex-wrap items-center justify-between gap-3">
            <div class="flex items-center gap-3">
                <a href="{{ url('/') }}" class="w-9 h-9 rounded-xl bg-slate-900 text-white flex items-center justify-center font-bold text-sm hover:bg-slate-800 transition-colors">
                    <i class="fa-solid fa-graduation-cap"></i>
                </a>
                <div>
                    <h1 class="text-xs sm:text-sm font-extrabold text-slate-900 leading-tight">Deberes Emanuel</h1>
                    <p class="text-[11px] text-slate-500 font-medium">Informe Académico Oficial &bull; Vista Pública</p>
                </div>
            </div>

            <div class="flex items-center gap-2 flex-wrap">
                <!-- Botón de Imprimir / Guardar PDF -->
                <button onclick="window.print()" class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-slate-900 hover:bg-slate-800 text-white text-xs font-bold shadow-xs transition-all active:scale-95">
                    <i class="fa-solid fa-print"></i>
                    <span>Imprimir / PDF</span>
                </button>

                <!-- Botón de Compartir en WhatsApp -->
                <a href="https://api.whatsapp.com/send?text={{ urlencode('📄 Informe Académico de Emanuel (Unidad 1): ' . url('/informe/unidad-1')) }}" target="_blank" class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold shadow-xs transition-all active:scale-95">
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                    <span>Compartir</span>
                </a>

                @auth
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-1.5 px-3 py-2 rounded-xl bg-slate-100 text-slate-700 hover:bg-slate-200 text-xs font-bold transition-colors">
                        <i class="fa-solid fa-arrow-left"></i> Volver al Panel
                    </a>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center gap-1.5 px-3 py-2 rounded-xl bg-slate-100 text-slate-700 hover:bg-slate-200 text-xs font-bold transition-colors">
                        <i class="fa-solid fa-lock"></i> Acceso
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <!-- DOCUMENTO PRINCIPAL MINIMALISTA -->
    <main class="max-w-4xl mx-auto px-4 sm:px-6">
        <div class="print-card bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-10 space-y-7">
            
            <!-- ENCABEZADO MINIMALISTA -->
            <div class="border-b border-slate-200 pb-5">
                <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-4">
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[10px] font-extrabold uppercase tracking-widest text-slate-500 bg-slate-100 px-2 py-0.5 rounded">
                                SISTEMA EDUCATIVO NOXDATA
                            </span>
                            <span class="text-[10px] font-extrabold uppercase tracking-widest text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                                OFICIAL
                            </span>
                        </div>
                        <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight">
                            INFORME DE AVANCE ACADÉMICO
                        </h2>
                        <p class="text-xs text-slate-500 mt-0.5">
                            Cierre de la Unidad 1 &bull; Diagnóstico de Hábitos &bull; Planificación de la Unidad 2
                        </p>
                    </div>

                    <div class="text-left sm:text-right text-xs">
                        <span class="text-slate-400 font-semibold block text-[11px]">Fecha de Emisión:</span>
                        <span class="font-extrabold text-slate-900">23 de Noviembre de 2026</span>
                    </div>
                </div>

                <!-- FICHA DE DATOS RESUMIDA -->
                <div class="mt-4 grid grid-cols-2 sm:grid-cols-4 gap-2 text-xs bg-slate-50 p-3 rounded-xl border border-slate-100">
                    <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase block">Estudiante</span>
                        <span class="font-extrabold text-slate-900">{{ $student->name ?? 'Emanuel' }}</span>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase block">Tutor Docente</span>
                        <span class="font-extrabold text-slate-900">{{ $teacher->name ?? 'Prof. Carlos Angulo' }}</span>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase block">Ciclo Evaluado</span>
                        <span class="font-extrabold text-slate-900">Unidad 1</span>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase block">Promedio Cómputo</span>
                        <span class="font-extrabold text-emerald-700">10.0 / 10 ⭐</span>
                    </div>
                </div>
            </div>

            <!-- CUADRITO ROJO: OBJETIVOS CUMPLIDOS DE LA UNIDAD 1 (SOLICITADO POR CARLOS) -->
            <div class="border-2 border-red-500 bg-red-50/40 rounded-2xl p-5 sm:p-6 avoid-break shadow-xs">
                <div class="flex items-center gap-2 mb-3">
                    <span class="w-6 h-6 rounded-lg bg-red-600 text-white flex items-center justify-center text-xs font-black">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <h3 class="text-sm sm:text-base font-black text-red-900 uppercase tracking-tight">
                        OBJETIVOS CUMPLIDOS — UNIDAD 1
                    </h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs">
                    <!-- Objetivos Cumplidos: Matemática -->
                    <div class="bg-white/90 p-4 rounded-xl border border-red-200">
                        <span class="font-extrabold text-red-800 uppercase tracking-wider text-[11px] flex items-center gap-1.5 mb-2">
                            <i class="fa-solid fa-calculator text-red-600"></i> Matemática (Cimientos Numéricos)
                        </span>
                        <ul class="space-y-1.5 text-slate-700 text-[11px]">
                            <li class="flex items-start gap-1.5">
                                <span class="text-red-600 font-bold">✔</span>
                                <span><strong>Números Naturales (N):</strong> Dominio de jerarquía y cálculo aritmético.</span>
                            </li>
                            <li class="flex items-start gap-1.5">
                                <span class="text-red-600 font-bold">✔</span>
                                <span><strong>Números Enteros (Z):</strong> Ubicación en recta numérica y noción de opuestos.</span>
                            </li>
                            <li class="flex items-start gap-1.5">
                                <span class="text-red-600 font-bold">✔</span>
                                <span><strong>Fracciones (Q):</strong> Concepto parte-todo, simplificación y equivalencias.</span>
                            </li>
                            <li class="flex items-start gap-1.5">
                                <span class="text-red-600 font-bold">✔</span>
                                <span><strong>Algoritmo de División:</strong> Mecanización de dos cifras en el divisor.</span>
                            </li>
                            <li class="flex items-start gap-1.5">
                                <span class="text-red-600 font-bold">✔</span>
                                <span><strong>Estimación y Redondeo:</strong> Cálculo mental aproximado sin calculadora.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Objetivos Cumplidos: Computación -->
                    <div class="bg-white/90 p-4 rounded-xl border border-red-200">
                        <span class="font-extrabold text-red-800 uppercase tracking-wider text-[11px] flex items-center gap-1.5 mb-2">
                            <i class="fa-solid fa-laptop-code text-red-600"></i> Computación (Maquetación HTML5)
                        </span>
                        <ul class="space-y-1.5 text-slate-700 text-[11px]">
                            <li class="flex items-start gap-1.5">
                                <span class="text-red-600 font-bold">✔</span>
                                <span><strong>Estructura HTML5:</strong> Maquetación semántica de encabezados, párrafos y cuerpos.</span>
                            </li>
                            <li class="flex items-start gap-1.5">
                                <span class="text-red-600 font-bold">✔</span>
                                <span><strong>Hipervínculos:</strong> Conexión de proyectos y páginas mediante enlaces web.</span>
                            </li>
                            <li class="flex items-start gap-1.5">
                                <span class="text-red-600 font-bold">✔</span>
                                <span><strong>Tablas Complejas:</strong> Dominio de filas, columnas y alineación de horarios.</span>
                            </li>
                            <li class="flex items-start gap-1.5">
                                <span class="text-red-600 font-bold">✔</span>
                                <span><strong>Publicación en Internet:</strong> Despliegue autónomo en GitHub Pages.</span>
                            </li>
                            <li class="flex items-start gap-1.5">
                                <span class="text-red-600 font-bold">✔</span>
                                <span><strong>Evaluación Perfecta:</strong> 100% de proyectos calificados con <strong>10 / 10</strong>.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <p class="text-[11px] text-red-800 font-medium mt-3 text-center sm:text-left">
                    📌 <em>Todos estos objetivos constituyen el cimiento obligatorio para avanzar con seguridad a los números decimales y al diseño visual web.</em>
                </p>
            </div>

            <!-- TABLA 1: ENTREGAS Y CALIFICACIONES DE COMPUTACIÓN (MINIMALISTA) -->
            <div class="space-y-2 avoid-break">
                <div class="flex items-center justify-between">
                    <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider flex items-center gap-2">
                        <span>1. Proyectos de Computación Evaluados (Unidad 1)</span>
                    </h3>
                    <span class="text-[11px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                        Promedio: 10.0 / 10
                    </span>
                </div>

                <div class="border border-slate-200 rounded-xl overflow-hidden">
                    <table class="w-full text-left text-xs divide-y divide-slate-200">
                        <thead class="bg-slate-50 text-slate-500 font-bold text-[11px]">
                            <tr>
                                <th class="py-2.5 px-3">Proyecto</th>
                                <th class="py-2.5 px-3">Destreza / Enfoque</th>
                                <th class="py-2.5 px-3">Enlace Web</th>
                                <th class="py-2.5 px-3 text-center">Nota</th>
                                <th class="py-2.5 px-3">Retroalimentación del Tutor</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 bg-white text-[11px]">
                            @forelse($compuSubmissions as $sub)
                                <tr>
                                    <td class="py-2.5 px-3 font-bold text-slate-900 whitespace-nowrap">
                                        {{ $sub->title }}
                                    </td>
                                    <td class="py-2.5 px-3 text-slate-600">
                                        @if(str_contains(strtolower($sub->title), 'portafolio'))
                                            Arquitectura web y enlaces principales
                                        @elseif(str_contains(strtolower($sub->title), 'napole'))
                                            Investigación y redacción estructurada
                                        @elseif(str_contains(strtolower($sub->title), 'cien'))
                                            Cronología histórica y jerarquía
                                        @elseif(str_contains(strtolower($sub->title), 'horario'))
                                            Tablas HTML y simetría de datos
                                        @else
                                            Desarrollo y maquetación web
                                        @endif
                                    </td>
                                    <td class="py-2.5 px-3 whitespace-nowrap">
                                        @if($sub->link_url)
                                            <a href="{{ $sub->link_url }}" target="_blank" class="text-indigo-600 hover:text-indigo-800 font-bold inline-flex items-center gap-1">
                                                <span>Ver proyecto</span>
                                                <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                                            </a>
                                        @else
                                            <span class="text-slate-400">--</span>
                                        @endif
                                    </td>
                                    <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                        <span class="font-extrabold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-100">
                                            {{ number_format($sub->grade ?? 10, 1) }} / 10
                                        </span>
                                    </td>
                                    <td class="py-2.5 px-3 text-slate-600">
                                        {{ $sub->teacher_feedback ?? 'Excelente trabajo presentado.' }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-3 px-3 text-center text-slate-400">Sin entregas registradas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- TABLA 2: CÁTEDRA Y TAREAS DE MATEMÁTICA (MINIMALISTA) -->
            <div class="space-y-2 avoid-break">
                <div class="flex items-center justify-between">
                    <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider flex items-center gap-2">
                        <span>2. Cátedra y Tareas Prácticas de Matemática (Unidad 1)</span>
                    </h3>
                    <span class="text-[11px] font-bold text-indigo-700 bg-indigo-50 px-2 py-0.5 rounded border border-indigo-200">
                        Cimientos Completos
                    </span>
                </div>

                <div class="border border-slate-200 rounded-xl overflow-hidden">
                    <table class="w-full text-left text-xs divide-y divide-slate-200">
                        <thead class="bg-slate-50 text-slate-500 font-bold text-[11px]">
                            <tr>
                                <th class="py-2.5 px-3">Tarea / Taller</th>
                                <th class="py-2.5 px-3">Operación / Contenido</th>
                                <th class="py-2.5 px-3">Formato Exigido</th>
                                <th class="py-2.5 px-3">Guía / Referencia</th>
                                <th class="py-2.5 px-3 text-center">Estado</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 bg-white text-[11px]">
                            <tr>
                                <td class="py-2.5 px-3 font-bold text-slate-900">
                                    División Larga (23/10)
                                </td>
                                <td class="py-2.5 px-3 text-slate-700 font-mono">
                                    28.851 ÷ 88
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Cuaderno cuadriculado (proceso paso a paso y residuo)
                                </td>
                                <td class="py-2.5 px-3">
                                    <a href="{{ asset('storage/guides/guia_division_28851_88.jpg') }}" target="_blank" class="text-indigo-600 hover:underline font-semibold inline-flex items-center gap-1">
                                        <i class="fa-solid fa-image text-slate-400"></i> Ver guía
                                    </a>
                                </td>
                                <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                    <span class="font-bold text-amber-700 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">
                                        Pendiente foto
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2.5 px-3 font-bold text-slate-900">
                                    División en Cuadrícula (30/10)
                                </td>
                                <td class="py-2.5 px-3 text-slate-700 font-mono">
                                    5.932 ÷ 13
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Cuaderno cuadriculado (cálculo ordenado y comprobación)
                                </td>
                                <td class="py-2.5 px-3">
                                    <a href="{{ asset('storage/guides/guia_division_5932_13.jpg') }}" target="_blank" class="text-indigo-600 hover:underline font-semibold inline-flex items-center gap-1">
                                        <i class="fa-solid fa-image text-slate-400"></i> Ver guía
                                    </a>
                                </td>
                                <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                    <span class="font-bold text-amber-700 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">
                                        Pendiente foto
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2.5 px-3 font-bold text-slate-900">
                                    Taller de Estimación y Redondeo
                                </td>
                                <td class="py-2.5 px-3 text-slate-700">
                                    7 operaciones de aproximación mental (cálculo y unión con líneas)
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Ficha desarrollada o cuaderno con nombres
                                </td>
                                <td class="py-2.5 px-3">
                                    <a href="{{ asset('storage/guides/guia_estimaciones_redondeo.jpg') }}" target="_blank" class="text-indigo-600 hover:underline font-semibold inline-flex items-center gap-1">
                                        <i class="fa-solid fa-image text-slate-400"></i> Ver guía
                                    </a>
                                </td>
                                <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                    <span class="font-bold text-amber-700 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">
                                        Pendiente foto
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Resumen de las operaciones del taller de estimación (Fórmulas sin LaTeX roto) -->
                <div class="bg-slate-50 p-3 rounded-xl border border-slate-100 text-[11px] text-slate-600">
                    <span class="font-bold text-slate-800 block mb-1">Detalle de estimaciones del taller:</span>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 font-mono text-[10px]">
                        <span>54 293 + 27 886 ≈ 80 000</span>
                        <span>8 025 ÷ 19 ≈ 400</span>
                        <span>116 × 59 ≈ 6 000</span>
                        <span>893 × 28 ≈ 27 000</span>
                        <span>487 × 88 ≈ 45 000</span>
                        <span>3 216 ÷ 31 ≈ 100</span>
                        <span>60 274 - 49 184 ≈ 10 000</span>
                    </div>
                </div>
            </div>

            <!-- TABLA 3: PLAN DE CONCENTRACIÓN Y HÁBITOS DE ESTUDIO (MINIMALISTA) -->
            <div class="space-y-2 avoid-break">
                <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">
                    3. Diagnóstico y Plan de Entrenamiento de la Concentración
                </h3>

                <div class="border border-slate-200 rounded-xl overflow-hidden">
                    <table class="w-full text-left text-xs divide-y divide-slate-200">
                        <thead class="bg-slate-50 text-slate-500 font-bold text-[11px]">
                            <tr>
                                <th class="py-2 px-3 w-1/4">Estrategia</th>
                                <th class="py-2 px-3">Metodología de Aplicación</th>
                                <th class="py-2 px-3 w-1/3">Objetivo de Autocontrol</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 bg-white text-[11px]">
                            <tr>
                                <td class="py-2.5 px-3 font-bold text-slate-900">
                                    Micro-bloques (20 min)
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Sesiones cronometradas de 20 minutos de trabajo continuo sin pantallas secundarias ni música, seguidas de 5 minutos de pausa.
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Evitar la fatiga mental y eliminar la procrastinación.
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2.5 px-3 font-bold text-slate-900">
                                    Orden Espacial
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Un número por casilla en cuaderno cuadriculado, tachando suavemente las cifras ya bajadas en la división.
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Reducir al 0% los errores por descuido o desalineación de columnas.
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2.5 px-3 font-bold text-slate-900">
                                    Checklist Pre-Entrega
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Antes de dar por concluida la tarea, responder: ¿tabla verificada?, ¿residuo menor al divisor?, ¿procedimiento completo?
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Fomentar la auto-corrección sin depender del profesor.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- TABLA 4: PLANIFICACIÓN DE LA UNIDAD 2 (MINIMALISTA Y FÓRMULAS LIMPIAS) -->
            <div class="space-y-2 avoid-break">
                <div class="flex items-center justify-between">
                    <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">
                        4. Planificación Curricular — Objetivos de la Unidad 2
                    </h3>
                    <span class="text-[11px] font-bold text-purple-700 bg-purple-50 px-2 py-0.5 rounded border border-purple-200">
                        Próxima Etapa
                    </span>
                </div>

                <div class="border border-slate-200 rounded-xl overflow-hidden">
                    <table class="w-full text-left text-xs divide-y divide-slate-200">
                        <thead class="bg-slate-50 text-slate-500 font-bold text-[11px]">
                            <tr>
                                <th class="py-2.5 px-3 w-1/4">Materia</th>
                                <th class="py-2.5 px-3">Núcleo Temático</th>
                                <th class="py-2.5 px-3">Objetivos Específicos &bull; Aplicación Real</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 bg-white text-[11px]">
                            <tr>
                                <td class="py-3 px-3 font-extrabold text-indigo-700">
                                    <div class="flex items-center gap-1.5">
                                        <i class="fa-solid fa-calculator text-indigo-600"></i> Matemática
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-normal">Números Decimales</span>
                                </td>
                                <td class="py-3 px-3 font-semibold text-slate-800">
                                    Valor posicional y operaciones con coma
                                </td>
                                <td class="py-3 px-3 text-slate-600 leading-relaxed">
                                    <p>&bull; <strong>Coma Decimal:</strong> Comprensión de décimos, centésimos y milésimos.</p>
                                    <p>&bull; <strong>Conversión Fracción-Decimal:</strong> Dominio de equivalencias clave (1/2 = 0.5, 1/4 = 0.25, 3/4 = 0.75).</p>
                                    <p>&bull; <strong>Operaciones Prácticas:</strong> Suma y resta alineando la coma; multiplicación en problemas de dinero y compras.</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-3 font-extrabold text-emerald-700">
                                    <div class="flex items-center gap-1.5">
                                        <i class="fa-solid fa-laptop-code text-emerald-600"></i> Computación
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-normal">Hojas de Estilo CSS</span>
                                </td>
                                <td class="py-3 px-3 font-semibold text-slate-800">
                                    Diseño visual, color e interactividad
                                </td>
                                <td class="py-3 px-3 text-slate-600 leading-relaxed">
                                    <p>&bull; <strong>Sintaxis CSS:</strong> Selectores, propiedades, paletas de colores y fuentes tipográficas.</p>
                                    <p>&bull; <strong>Modelo de Caja:</strong> Rellenos (padding), márgenes (margin) y bordes redondeados.</p>
                                    <p>&bull; <strong>Proyecto Central:</strong> Transformar su Portafolio web y Horario en un sitio estilizado y moderno.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- FIRMAS FORMALES (MINIMALISTAS) -->
            <div class="pt-6 border-t border-slate-200 avoid-break">
                <div class="grid grid-cols-2 gap-8 text-center pt-2">
                    <div>
                        <div class="h-12 flex items-end justify-center mb-1">
                            <span class="font-serif italic text-base text-slate-900 tracking-wider">Carlos Angulo</span>
                        </div>
                        <div class="border-t border-slate-300 w-44 mx-auto pt-1">
                            <p class="text-xs font-bold text-slate-900">{{ $teacher->name ?? 'Prof. Carlos Angulo' }}</p>
                            <p class="text-[10px] text-slate-400 font-medium">Tutor Académico y Responsable</p>
                        </div>
                    </div>

                    <div>
                        <div class="h-12 flex items-end justify-center mb-1">
                            <span class="text-slate-300 text-xs italic">Firma de conformidad</span>
                        </div>
                        <div class="border-t border-slate-300 w-44 mx-auto pt-1">
                            <p class="text-xs font-bold text-slate-900">Firma del Representante</p>
                            <p class="text-[10px] text-slate-400 font-medium">Padre / Madre de Familia</p>
                        </div>
                    </div>
                </div>

                <div class="mt-6 text-center text-[10px] text-slate-400">
                    Plataforma <strong class="text-slate-600">Deberes Emanuel</strong> &bull; Verificable en línea en: 
                    <a href="{{ url('/informe/unidad-1') }}" class="text-slate-700 underline font-semibold">{{ url('/informe/unidad-1') }}</a>
                </div>
            </div>

        </div>
    </main>

    <!-- PIE DE PÁGINA (Solo pantalla) -->
    <footer class="no-print text-center py-6 text-xs text-slate-400">
        &copy; {{ date('Y') }} Deberes Emanuel &bull; Sistema Desarrollado por NoxData
    </footer>

</body>
</html>
