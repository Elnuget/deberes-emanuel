<!DOCTYPE html>
<html lang="es" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Deberes - Unidad 2 | Emmanuel</title>
    
    <!-- Metatags para Compartir en WhatsApp -->
    <meta property="og:title" content="Informe de Deberes - Unidad 2 | Emmanuel">
    <meta property="og:description" content="Planificación de deberes y temas de la Unidad 2 en Matemática y Computación. Tutor: Prof. Carlos Angulo.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url('/informe/unidad-2') }}">
    
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
<body class="min-h-full py-4 sm:py-8 antialiased text-slate-800">

    <!-- DOCUMENTO PRINCIPAL -->
    <main class="max-w-5xl mx-auto px-4 sm:px-6">
        <div class="print-card bg-white rounded-2xl border border-slate-200 shadow-sm p-4 sm:p-6 space-y-5">
            
            <!-- TARJETITA SENCILLA DE CABECERA (UNIDAD 2 - PENDIENTE) -->
            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-3.5 sm:p-4 flex flex-wrap items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-600 text-white flex items-center justify-center font-bold text-base shrink-0 shadow-xs">
                        <i class="fa-solid fa-chess-knight"></i>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-0.5">
                            <span class="text-[10px] font-extrabold uppercase tracking-wider text-amber-800 bg-amber-100/70 px-2 py-0.5 rounded border border-amber-200">
                                Unidad 2
                            </span>
                            <span class="text-xs text-slate-400 font-medium">Planificación Curricular</span>
                        </div>
                        <h2 class="text-sm sm:text-base font-black text-slate-900 tracking-tight">
                            Informe de Deberes — {{ $student->name ?? 'Emmanuel' }}
                        </h2>
                        <p class="text-[11px] text-slate-500">
                            Tutor: <strong class="text-slate-800">{{ $teacher->name ?? 'Prof. Carlos Angulo' }}</strong>
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-amber-50 text-amber-800 border border-amber-200 text-xs font-black">
                        <i class="fa-solid fa-hourglass-half text-amber-600 text-xs"></i>
                        <span>Calificación: Pendiente</span>
                    </span>
                </div>
            </div>

            <!-- CONTENEDOR DE LAS 2 TABLAS LADO A LADO -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5 print:grid-cols-2 print:gap-4 print-grid items-start avoid-break">
                
                <!-- TABLA 1: MATEMÁTICA -->
                <div class="space-y-2">
                    <div class="flex items-center justify-between pb-1 border-b border-indigo-100">
                        <h3 class="text-xs font-black text-indigo-950 uppercase tracking-wider flex items-center gap-1.5">
                            <i class="fa-solid fa-calculator text-indigo-600"></i>
                            <span>1. Matemática (Ajedrez y Reales)</span>
                        </h3>
                        <span class="text-[10px] font-bold text-amber-700 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">
                            {{ count($mathDuties) }} Actividades prácticas
                        </span>
                    </div>

                    <div class="border border-slate-200 rounded-xl overflow-hidden shadow-2xs">
                        <table class="w-full text-left text-xs divide-y divide-slate-200">
                            <thead class="bg-slate-50 text-slate-600 font-bold text-[11px]">
                                <tr>
                                    <th class="py-2 px-3">Tema / Actividad</th>
                                    <th class="py-2 px-3">Detalle Práctico</th>
                                    <th class="py-2 px-3 text-center">Estado</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 bg-white text-[11px]">
                                @foreach($mathDuties as $duty)
                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-2.5 px-3 font-bold text-slate-900">
                                            <div>{{ $duty['title'] }}</div>
                                        </td>
                                        <td class="py-2.5 px-3 text-slate-600 text-[11px]">
                                            {{ $duty['detail'] }}
                                        </td>
                                        <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                            <span class="inline-flex items-center gap-1 font-bold text-amber-700 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200 text-[10px]">
                                                <i class="fa-regular fa-clock text-[9px]"></i>
                                                <span>{{ $duty['status'] }}</span>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- TABLA 2: COMPUTACIÓN -->
                <div class="space-y-2">
                    <div class="flex items-center justify-between pb-1 border-b border-emerald-100">
                        <h3 class="text-xs font-black text-emerald-950 uppercase tracking-wider flex items-center gap-1.5">
                            <i class="fa-solid fa-laptop-code text-emerald-600"></i>
                            <span>2. Computación (Sistemas Web con Laravel)</span>
                        </h3>
                        <span class="text-[10px] font-bold text-amber-700 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">
                            {{ count($compuDuties) }} Módulos Laravel
                        </span>
                    </div>

                    <div class="border border-slate-200 rounded-xl overflow-hidden shadow-2xs">
                        <table class="w-full text-left text-xs divide-y divide-slate-200">
                            <thead class="bg-slate-50 text-slate-600 font-bold text-[11px]">
                                <tr>
                                    <th class="py-2 px-3">Módulo / Sistema</th>
                                    <th class="py-2 px-3">Detalle Práctico</th>
                                    <th class="py-2 px-3 text-center">Estado</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 bg-white text-[11px]">
                                @foreach($compuDuties as $duty)
                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-2.5 px-3 font-bold text-slate-900">
                                            <div>{{ $duty['title'] }}</div>
                                        </td>
                                        <td class="py-2.5 px-3 text-slate-600 text-[11px]">
                                            {{ $duty['detail'] }}
                                        </td>
                                        <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                            <span class="inline-flex items-center gap-1 font-bold text-amber-700 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200 text-[10px]">
                                                <i class="fa-regular fa-clock text-[9px]"></i>
                                                <span>{{ $duty['status'] }}</span>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </main>

</body>
</html>