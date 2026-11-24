<!DOCTYPE html>
<html lang="es" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Deberes Entregados - Unidad 1 | Emmanuel</title>
    
    <!-- Metatags para Compartir en WhatsApp -->
    <meta property="og:title" content="Informe de Deberes Entregados - Unidad 1 | Emmanuel">
    <meta property="og:description" content="Reporte de deberes y proyectos entregados en Matemática y Computación. Tutor: Prof. Carlos Angulo.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url('/informe/unidad-1') }}">
    
    <!-- Google Fonts -->
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

        @page {
            size: A4 portrait;
            margin: 1cm;
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
            .print-grid {
                display: grid !important;
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
                gap: 1rem !important;
            }
            a {
                text-decoration: none !important;
                color: inherit !important;
            }
        }
    </style>
</head>
<body class="min-h-full py-4 sm:py-6 antialiased text-slate-800">

    <!-- BARRA SUPERIOR DE ACCIONES (No imprimible) -->
    <header class="no-print max-w-5xl mx-auto px-4 mb-4">
        <div class="bg-white rounded-2xl p-3 sm:p-4 border border-slate-200 shadow-sm flex flex-wrap items-center justify-between gap-3">
            <div class="flex items-center gap-3">
                <a href="{{ url('/') }}" class="w-9 h-9 rounded-xl bg-slate-900 text-white flex items-center justify-center font-bold text-sm hover:bg-slate-800 transition-colors">
                    <i class="fa-solid fa-graduation-cap"></i>
                </a>
                <div>
                    <h1 class="text-xs sm:text-sm font-extrabold text-slate-900 leading-tight">Deberes Emmanuel</h1>
                    <p class="text-[11px] text-slate-500 font-medium">Informe de Deberes Entregados &bull; Unidad 1</p>
                </div>
            </div>

            <div class="flex items-center gap-2 flex-wrap">
                <!-- Botón de Imprimir / Guardar PDF -->
                <button onclick="window.print()" class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-slate-900 hover:bg-slate-800 text-white text-xs font-bold shadow-xs transition-all active:scale-95">
                    <i class="fa-solid fa-print"></i>
                    <span>Imprimir / PDF</span>
                </button>

                <!-- Botón de Compartir en WhatsApp -->
                <a href="https://api.whatsapp.com/send?text={{ urlencode('📋 Informe de Deberes Entregados de Emmanuel (Unidad 1): ' . url('/informe/unidad-1')) }}" target="_blank" class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold shadow-xs transition-all active:scale-95">
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

    <!-- DOCUMENTO PRINCIPAL -->
    <main class="max-w-5xl mx-auto px-4 sm:px-6">
        <div class="print-card bg-white rounded-2xl border border-slate-200 shadow-sm p-5 sm:p-8 space-y-6">
            
            <!-- ENCABEZADO RESUMIDO -->
            <div class="border-b border-slate-200 pb-4">
                <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-3">
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[10px] font-extrabold uppercase tracking-widest text-slate-500 bg-slate-100 px-2 py-0.5 rounded">
                                SISTEMA EDUCATIVO NOXDATA
                            </span>
                            <span class="text-[10px] font-extrabold uppercase tracking-widest text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                                OFICIAL
                            </span>
                        </div>
                        <h2 class="text-lg sm:text-xl font-black text-slate-900 tracking-tight">
                            INFORME DE DEBERES ENTREGADOS — UNIDAD 1
                        </h2>
                        <p class="text-xs text-slate-500 mt-0.5">
                            Registro de actividades prácticas, talleres y proyectos completados
                        </p>
                    </div>

                    <div class="text-left sm:text-right text-xs">
                        <span class="text-slate-400 font-semibold block text-[11px]">Fecha de Emisión:</span>
                        <span class="font-bold text-slate-900">Noviembre de 2026</span>
                    </div>
                </div>

                <!-- FICHA DE DATOS COMPACTA -->
                <div class="mt-3 grid grid-cols-2 sm:grid-cols-4 gap-2 text-xs bg-slate-50 p-2.5 rounded-xl border border-slate-100">
                    <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase block">Estudiante</span>
                        <span class="font-extrabold text-slate-900">{{ $student->name ?? 'Emmanuel' }}</span>
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
                        <span class="text-[10px] font-bold text-slate-400 uppercase block">Calificación</span>
                        <span class="font-extrabold text-emerald-700">10.0 / 10 ⭐</span>
                    </div>
                </div>
            </div>

            <!-- CONTENEDOR DE LAS 2 TABLAS LADO A LADO -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 print:grid-cols-2 print:gap-4 print-grid items-start avoid-break">
                
                <!-- TABLA 1: MATEMÁTICA -->
                <div class="space-y-2">
                    <div class="flex items-center justify-between pb-1 border-b border-indigo-100">
                        <h3 class="text-xs font-black text-indigo-950 uppercase tracking-wider flex items-center gap-1.5">
                            <i class="fa-solid fa-calculator text-indigo-600"></i>
                            <span>1. Matemática</span>
                        </h3>
                        <span class="text-[10px] font-bold text-indigo-700 bg-indigo-50 px-2 py-0.5 rounded border border-indigo-200">
                            {{ count($mathDuties) }} Entregas
                        </span>
                    </div>

                    <div class="border border-slate-200 rounded-xl overflow-hidden shadow-2xs">
                        <table class="w-full text-left text-xs divide-y divide-slate-200">
                            <thead class="bg-slate-50 text-slate-600 font-bold text-[11px]">
                                <tr>
                                    <th class="py-2 px-3">Deber</th>
                                    <th class="py-2 px-3">Detalle</th>
                                    <th class="py-2 px-3 text-center">Estado</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 bg-white text-[11px]">
                                @foreach($mathDuties as $duty)
                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-2.5 px-3 font-bold text-slate-900">
                                            <div>{{ $duty['title'] }}</div>
                                            @if(!empty($duty['guide_url']))
                                                <a href="{{ $duty['guide_url'] }}" target="_blank" class="no-print text-[10px] text-indigo-600 hover:underline font-semibold inline-flex items-center gap-0.5 mt-0.5">
                                                    <span>Guía</span>
                                                    <i class="fa-solid fa-arrow-up-right-from-square text-[8px]"></i>
                                                </a>
                                            @endif
                                        </td>
                                        <td class="py-2.5 px-3 text-slate-600 text-[11px]">
                                            {{ $duty['detail'] }}
                                        </td>
                                        <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                            <span class="inline-flex items-center gap-1 font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-200 text-[10px]">
                                                <i class="fa-solid fa-circle-check text-[9px]"></i>
                                                <span>{{ $duty['status'] }}</span>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- TABLA 2: COMPUTACIÓN (CON OFIMÁTICA AL INICIO) -->
                <div class="space-y-2">
                    <div class="flex items-center justify-between pb-1 border-b border-emerald-100">
                        <h3 class="text-xs font-black text-emerald-950 uppercase tracking-wider flex items-center gap-1.5">
                            <i class="fa-solid fa-laptop-code text-emerald-600"></i>
                            <span>2. Computación</span>
                        </h3>
                        <span class="text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                            {{ count($compuDuties) }} Entregas
                        </span>
                    </div>

                    <div class="border border-slate-200 rounded-xl overflow-hidden shadow-2xs">
                        <table class="w-full text-left text-xs divide-y divide-slate-200">
                            <thead class="bg-slate-50 text-slate-600 font-bold text-[11px]">
                                <tr>
                                    <th class="py-2 px-3">Deber / Proyecto</th>
                                    <th class="py-2 px-3">Detalle</th>
                                    <th class="py-2 px-3 text-center">Nota</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 bg-white text-[11px]">
                                @foreach($compuDuties as $duty)
                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-2.5 px-3 font-bold text-slate-900">
                                            <div>{{ $duty['title'] }}</div>
                                            @if(!empty($duty['link_url']))
                                                <a href="{{ $duty['link_url'] }}" target="_blank" class="no-print text-[10px] text-emerald-700 hover:text-emerald-900 hover:underline font-bold inline-flex items-center gap-0.5 mt-0.5">
                                                    <span>Ver web</span>
                                                    <i class="fa-solid fa-arrow-up-right-from-square text-[8px]"></i>
                                                </a>
                                            @endif
                                        </td>
                                        <td class="py-2.5 px-3 text-slate-600 text-[11px]">
                                            {{ $duty['detail'] }}
                                        </td>
                                        <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                            <span class="inline-flex items-center gap-1 font-extrabold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-200 text-[10px]">
                                                <i class="fa-solid fa-star text-[9px] text-amber-500"></i>
                                                <span>{{ $duty['grade'] }}</span>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!-- FIRMAS FORMALES MINIMALISTAS -->
            <div class="pt-5 border-t border-slate-200 avoid-break">
                <div class="grid grid-cols-2 gap-8 text-center pt-2">
                    <div>
                        <div class="h-10 flex items-end justify-center mb-1">
                            <span class="font-serif italic text-sm text-slate-900 tracking-wider">Carlos Angulo</span>
                        </div>
                        <div class="border-t border-slate-300 w-44 mx-auto pt-1">
                            <p class="text-xs font-bold text-slate-900">{{ $teacher->name ?? 'Prof. Carlos Angulo' }}</p>
                            <p class="text-[10px] text-slate-400 font-medium">Tutor Académico</p>
                        </div>
                    </div>

                    <div>
                        <div class="h-10 flex items-end justify-center mb-1">
                            <span class="text-slate-300 text-xs italic">Firma de conformidad</span>
                        </div>
                        <div class="border-t border-slate-300 w-44 mx-auto pt-1">
                            <p class="text-xs font-bold text-slate-900">Firma del Representante</p>
                            <p class="text-[10px] text-slate-400 font-medium">Padre / Madre de Familia</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-center text-[10px] text-slate-400">
                    Plataforma <strong class="text-slate-600">Deberes Emmanuel</strong> &bull; Verificable en línea en: 
                    <a href="{{ url('/informe/unidad-1') }}" class="text-slate-700 underline font-semibold">{{ url('/informe/unidad-1') }}</a>
                </div>
            </div>

        </div>
    </main>

    <!-- PIE DE PÁGINA (Solo pantalla) -->
    <footer class="no-print text-center py-4 text-xs text-slate-400">
        &copy; {{ date('Y') }} Deberes Emmanuel &bull; Desarrollado por NoxData
    </footer>

</body>
</html>