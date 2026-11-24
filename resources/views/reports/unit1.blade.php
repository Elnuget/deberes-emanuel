<!DOCTYPE html>
<html lang="es" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetivos Cumplidos — Unidad 1 | Emanuel</title>
    
    <!-- Metatags para Compartir -->
    <meta property="og:title" content="Objetivos Cumplidos — Unidad 1 | Emanuel">
    <meta property="og:description" content="Informe pedagógico de objetivos cumplidos, importancia y relación interdisciplinaria en Matemática y Computación.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url('/informe/unidad-1') }}">
    
    <!-- Google Fonts: Plus Jakarta Sans -->
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
        }
    </style>
</head>
<body class="min-h-full py-4 sm:py-10 px-3 sm:px-6 lg:px-8 antialiased selection:bg-red-500 selection:text-white text-slate-800 flex items-center justify-center">

    <!-- CONTENEDOR PRINCIPAL RESPONSIVO -->
    <main class="w-full max-w-4xl mx-auto">
        <div class="print-card bg-white rounded-3xl border border-slate-200/80 shadow-xl shadow-slate-200/50 p-5 sm:p-8 md:p-10 space-y-6 sm:space-y-8">
            
            <!-- ENCABEZADO DE LA TARJETA -->
            <div class="text-center sm:text-left border-b border-slate-100 pb-5 sm:pb-6">
                <div class="flex flex-wrap items-center justify-center sm:justify-between gap-2 mb-2">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider bg-red-50 text-red-700 border border-red-200">
                        <i class="fa-solid fa-circle-check text-red-600"></i>
                        Unidad 1 Concluida
                    </span>
                    <span class="text-xs font-semibold text-slate-400">
                        Estudiante: <strong class="text-slate-700">{{ $student->name ?? 'Emanuel' }}</strong>
                    </span>
                </div>
                <h1 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">
                    Objetivos Académicos Cumplidos
                </h1>
                <p class="text-xs sm:text-sm text-slate-500 mt-1 max-w-2xl">
                    Consolidación de bases conceptuales en <strong>Matemática</strong> y <strong>Computación</strong>, estableciendo los cimientos necesarios para el siguiente nivel formativo.
                </p>
            </div>

            <!-- CUADRICULA DE LOS DOS PILARES (MATEMÁTICA Y COMPUTACIÓN) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                
                <!-- PILAR 1: MATEMÁTICA -->
                <div class="rounded-2xl border-2 border-red-200 bg-red-50/30 p-5 sm:p-6 flex flex-col justify-between hover:border-red-300 transition-colors">
                    <div>
                        <div class="flex items-center gap-2.5 mb-3.5 pb-2 border-b border-red-100">
                            <span class="w-8 h-8 rounded-xl bg-red-600 text-white flex items-center justify-center text-sm shadow-xs">
                                <i class="fa-solid fa-calculator"></i>
                            </span>
                            <div>
                                <h2 class="text-sm sm:text-base font-extrabold text-red-950 uppercase tracking-tight leading-tight">
                                    Matemática
                                </h2>
                                <p class="text-[11px] font-semibold text-red-700">Cimientos Numéricos y Pensamiento Lógico</p>
                            </div>
                        </div>

                        <ul class="space-y-3 text-slate-700 text-xs leading-relaxed">
                            <li class="flex items-start gap-2">
                                <span class="text-red-600 font-bold text-sm shrink-0 mt-0.5">✔</span>
                                <div>
                                    <strong class="text-slate-900">Números Naturales (ℕ):</strong>
                                    <span class="text-slate-600 block sm:inline">Dominio en jerarquía de operaciones y cálculo aritmético fundamental.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-red-600 font-bold text-sm shrink-0 mt-0.5">✔</span>
                                <div>
                                    <strong class="text-slate-900">Números Enteros (ℤ):</strong>
                                    <span class="text-slate-600 block sm:inline">Ubicación exacta en la recta numérica y comprensión intuitiva de números opuestos.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-red-600 font-bold text-sm shrink-0 mt-0.5">✔</span>
                                <div>
                                    <strong class="text-slate-900">Fracciones (ℚ):</strong>
                                    <span class="text-slate-600 block sm:inline">Concepto de parte-todo, simplificación rigurosa y cálculo de equivalencias.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-red-600 font-bold text-sm shrink-0 mt-0.5">✔</span>
                                <div>
                                    <strong class="text-slate-900">Algoritmo de División:</strong>
                                    <span class="text-slate-600 block sm:inline">Mecanización analítica del proceso con dos cifras en el divisor y control de residuo.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-red-600 font-bold text-sm shrink-0 mt-0.5">✔</span>
                                <div>
                                    <strong class="text-slate-900">Estimación y Redondeo:</strong>
                                    <span class="text-slate-600 block sm:inline">Cálculo mental aproximado de órdenes de magnitud sin dependencia de calculadora.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- PILAR 2: COMPUTACIÓN -->
                <div class="rounded-2xl border-2 border-indigo-200 bg-indigo-50/30 p-5 sm:p-6 flex flex-col justify-between hover:border-indigo-300 transition-colors">
                    <div>
                        <div class="flex items-center gap-2.5 mb-3.5 pb-2 border-b border-indigo-100">
                            <span class="w-8 h-8 rounded-xl bg-indigo-600 text-white flex items-center justify-center text-sm shadow-xs">
                                <i class="fa-solid fa-laptop-code"></i>
                            </span>
                            <div>
                                <h2 class="text-sm sm:text-base font-extrabold text-indigo-950 uppercase tracking-tight leading-tight">
                                    Computación
                                </h2>
                                <p class="text-[11px] font-semibold text-indigo-700">Maquetación Web y Pensamiento Computacional</p>
                            </div>
                        </div>

                        <ul class="space-y-3 text-slate-700 text-xs leading-relaxed">
                            <li class="flex items-start gap-2">
                                <span class="text-indigo-600 font-bold text-sm shrink-0 mt-0.5">✔</span>
                                <div>
                                    <strong class="text-slate-900">Estructura Semántica HTML5:</strong>
                                    <span class="text-slate-600 block sm:inline">Construcción jerárquica con encabezados, párrafos y distribución de bloques de contenido.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-indigo-600 font-bold text-sm shrink-0 mt-0.5">✔</span>
                                <div>
                                    <strong class="text-slate-900">Hipervínculos e Interconexión:</strong>
                                    <span class="text-slate-600 block sm:inline">Integración de rutas relativas y absolutas para conectar múltiples páginas de un proyecto.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-indigo-600 font-bold text-sm shrink-0 mt-0.5">✔</span>
                                <div>
                                    <strong class="text-slate-900">Tablas de Información Complejas:</strong>
                                    <span class="text-slate-600 block sm:inline">Diseño ordenado de filas, columnas y encabezados aplicados a horarios semanales.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-indigo-600 font-bold text-sm shrink-0 mt-0.5">✔</span>
                                <div>
                                    <strong class="text-slate-900">Despliegue en Internet:</strong>
                                    <span class="text-slate-600 block sm:inline">Publicación autónoma y funcional de sitios web reales utilizando GitHub Pages.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-indigo-600 font-bold text-sm shrink-0 mt-0.5">✔</span>
                                <div>
                                    <strong class="text-slate-900">Rendimiento y Calidad:</strong>
                                    <span class="text-slate-600 block sm:inline">100% de proyectos completados con éxito y calificados con la máxima nota (10 / 10).</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- SECCIÓN CENTRAL: IMPORTANCIA PEDAGÓGICA Y RELACIÓN INTERDISCIPLINARIA -->
            <div class="rounded-2xl bg-gradient-to-br from-slate-900 to-slate-800 text-white p-5 sm:p-7 shadow-lg">
                <div class="flex items-center gap-2 mb-3">
                    <span class="w-6 h-6 rounded-lg bg-amber-400 text-slate-900 flex items-center justify-center text-xs font-black">
                        <i class="fa-solid fa-lightbulb"></i>
                    </span>
                    <h3 class="text-xs sm:text-sm font-extrabold tracking-wide uppercase text-amber-300">
                        Importancia y Relación Entre Cada Objetivo
                    </h3>
                </div>

                <p class="text-xs sm:text-[13px] text-slate-300 leading-relaxed mb-4">
                    Estos aprendizajes no son materias aisladas; están articulados de forma transversal para desarrollar disciplina intelectual, pensamiento analítico y autonomía:
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 text-xs">
                    <!-- Relación 1 -->
                    <div class="bg-white/5 border border-white/10 rounded-xl p-3 sm:p-4">
                        <div class="font-bold text-amber-300 mb-1 flex items-center gap-1.5">
                            <i class="fa-solid fa-link text-[11px]"></i>
                            <span>De la División a los Decimales (Unidad 2)</span>
                        </div>
                        <p class="text-slate-300 text-[11px] leading-relaxed">
                            Mecanizar la división de dos cifras y comprender las fracciones como división no exacta es el puente obligatorio para abordar con total fluidez los <strong>números decimales</strong>, el valor posicional con coma y las operaciones con dinero en la siguiente etapa.
                        </p>
                    </div>

                    <!-- Relación 2 -->
                    <div class="bg-white/5 border border-white/10 rounded-xl p-3 sm:p-4">
                        <div class="font-bold text-cyan-300 mb-1 flex items-center gap-1.5">
                            <i class="fa-solid fa-network-wired text-[11px]"></i>
                            <span>Rigor Matemático y Estructura Web</span>
                        </div>
                        <p class="text-slate-300 text-[11px] leading-relaxed">
                            El orden espacial aprendido en matemáticas (un número por casilla en cuadrícula) se refleja directamente en la indentación y el cierre riguroso de etiquetas en HTML5. La matemática le da la lógica secuencial; la computación le da la aplicación creativa.
                        </p>
                    </div>

                    <!-- Relación 3 -->
                    <div class="bg-white/5 border border-white/10 rounded-xl p-3 sm:p-4">
                        <div class="font-bold text-emerald-300 mb-1 flex items-center gap-1.5">
                            <i class="fa-solid fa-magnifying-glass-chart text-[11px]"></i>
                            <span>Estimación y Sentido Crítico</span>
                        </div>
                        <p class="text-slate-300 text-[11px] leading-relaxed">
                            Aprender a estimar y redondear evita que el estudiante acepte resultados sin sentido por descuido. Este criterio le permite auditar tanto sus operaciones matemáticas como comprobar visualmente que su código web se comporta de forma coherente.
                        </p>
                    </div>

                    <!-- Relación 4 -->
                    <div class="bg-white/5 border border-white/10 rounded-xl p-3 sm:p-4">
                        <div class="font-bold text-purple-300 mb-1 flex items-center gap-1.5">
                            <i class="fa-solid fa-stairs text-[11px]"></i>
                            <span>Andamiaje para el Diseño CSS</span>
                        </div>
                        <p class="text-slate-300 text-[11px] leading-relaxed">
                            Una vez consolidada la maquetación pura en HTML5 y publicado el proyecto en GitHub Pages, Emanuel cuenta con la base técnica lista para incorporar hojas de estilo (CSS), colores y diagramación visual en la Unidad 2 sin confusiones de estructura.
                        </p>
                    </div>
                </div>

                <!-- Resumen final -->
                <div class="mt-4 pt-3.5 border-t border-white/10 text-center sm:text-left flex flex-col sm:flex-row items-center justify-between gap-2 text-[11px] text-slate-400">
                    <span>📌 <em>Cimientos firmes que garantizan un tránsito seguro y motivado hacia los contenidos de la Unidad 2.</em></span>
                    <span class="text-emerald-400 font-bold shrink-0">Evaluación General: Satisfactoria y Completa</span>
                </div>
            </div>

        </div>
    </main>

</body>
</html>