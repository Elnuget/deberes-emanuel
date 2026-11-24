<!DOCTYPE html>
<html lang="es" class="h-full bg-slate-100/70">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz Curricular — Objetivos Unidad 1 | Emanuel</title>
    
    <!-- Metatags para Compartir -->
    <meta property="og:title" content="Matriz Curricular — Objetivos Unidad 1 | Emanuel">
    <meta property="og:description" content="Matriz formal de objetivos consolidados y relación transversal entre Matemática y Computación.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url('/informe/unidad-1') }}">
    
    <!-- Fuentes Tipográficas Formales: Merriweather + Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        serif: ['"Merriweather"', 'serif'],
                        sans: ['"Inter"', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            color: #1e293b;
        }

        .font-document-title {
            font-family: 'Merriweather', serif;
        }

        @media print {
            body {
                background: #ffffff !important;
                padding: 0 !important;
            }
            .document-sheet {
                box-shadow: none !important;
                border: none !important;
                max-width: 100% !important;
                padding: 0 !important;
                margin: 0 !important;
            }
        }
    </style>
</head>
<body class="min-h-full py-4 sm:py-8 px-2.5 sm:px-6 lg:px-8 antialiased text-slate-800 flex justify-center">

    <!-- HOJA FORMAL DEL DOCUMENTO -->
    <main class="w-full max-w-4xl">
        <article class="document-sheet bg-white rounded-lg sm:rounded-xl border border-slate-300 shadow-sm p-4 sm:p-8 md:p-10 space-y-6 sm:space-y-7">
            
            <!-- ENCABEZADO INSTITUCIONAL FORMAL -->
            <header class="border-b-2 border-slate-900 pb-4">
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-2 text-xs text-slate-600 mb-2">
                    <div>
                        <span class="font-bold uppercase tracking-wider text-slate-900">Informe Pedagógico de Cierre</span>
                        <span class="block text-[11px] text-slate-500">Ciclo Evaluado: Unidad 1</span>
                    </div>
                    <div class="sm:text-right">
                        <span class="text-slate-500 block text-[11px]">Estudiante evaluado:</span>
                        <strong class="text-slate-900 text-sm font-semibold">{{ $student->name ?? 'Emanuel' }}</strong>
                    </div>
                </div>

                <h1 class="font-document-title text-xl sm:text-2xl font-bold text-slate-900 tracking-tight leading-snug">
                    Matriz Curricular de Objetivos y Relación Transversal
                </h1>
                <p class="text-xs text-slate-600 mt-1">
                    Resumen esquemático de competencias adquiridas en <strong>Matemática</strong> y <strong>Computación</strong>, facilitando su revisión pedagógica y articulación hacia la Unidad 2.
                </p>
            </header>

            <!-- TABLA 1: MATEMÁTICA -->
            <section class="space-y-2.5">
                <div class="flex items-center justify-between">
                    <h2 class="font-document-title text-sm sm:text-base font-bold text-slate-900">
                        Tabla 1. Objetivos Consolidados en Matemática
                    </h2>
                    <span class="text-[11px] font-semibold text-slate-500 uppercase tracking-wider">Cimientos Numéricos</span>
                </div>

                <div class="overflow-x-auto rounded-lg border border-slate-200">
                    <table class="w-full text-left text-xs divide-y divide-slate-200">
                        <thead class="bg-slate-50 text-slate-700 font-semibold text-[11px]">
                            <tr>
                                <th class="py-2.5 px-3 w-1/4">Tema / Contenido</th>
                                <th class="py-2.5 px-3">Destreza Alcanzada (Poco texto)</th>
                                <th class="py-2.5 px-3 w-1/3">Importancia y Conexión (U2 / Lógica)</th>
                                <th class="py-2.5 px-3 text-center w-24">Estado</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 bg-white text-[11px] leading-relaxed">
                            <tr class="hover:bg-slate-50/50">
                                <td class="py-2.5 px-3 font-semibold text-slate-900">
                                    1. Jerarquía de Operaciones (ℕ)
                                </td>
                                <td class="py-2.5 px-3 text-slate-700">
                                    Resolución metódica con paréntesis, productos y sumas sin salirse del orden.
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Base obligatoria para ecuaciones y pensamiento secuencial algorítmico.
                                </td>
                                <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                    <span class="text-[10px] font-bold text-emerald-800 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                                        Consolidado
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/50">
                                <td class="py-2.5 px-3 font-semibold text-slate-900">
                                    2. Recta Numérica y Opuestos (ℤ)
                                </td>
                                <td class="py-2.5 px-3 text-slate-700">
                                    Ubicación espacial de positivos, negativos y distancias respecto al origen (0).
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Introduce el sentido relativo de magnitud (temperatura, balance y ejes).
                                </td>
                                <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                    <span class="text-[10px] font-bold text-emerald-800 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                                        Consolidado
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/50">
                                <td class="py-2.5 px-3 font-semibold text-slate-900">
                                    3. Fracciones y Equivalencias (ℚ)
                                </td>
                                <td class="py-2.5 px-3 text-slate-700">
                                    Concepto parte-todo, simplificación rigurosa e identificación de razones iguales.
                                </td>
                                <td class="py-2.5 px-3 text-slate-600 font-medium text-slate-800">
                                    <strong>Puente directo a la U2:</strong> una fracción es la antesala formal del número decimal.
                                </td>
                                <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                    <span class="text-[10px] font-bold text-emerald-800 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                                        Consolidado
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/50">
                                <td class="py-2.5 px-3 font-semibold text-slate-900">
                                    4. División de Dos Cifras
                                </td>
                                <td class="py-2.5 px-3 text-slate-700">
                                    Proceso largo mecánico, estimación de cociente y control estricto del residuo.
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Desarrolla orden en cuadrícula y prepara la división con coma decimal.
                                </td>
                                <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                    <span class="text-[10px] font-bold text-emerald-800 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                                        Consolidado
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/50">
                                <td class="py-2.5 px-3 font-semibold text-slate-900">
                                    5. Estimación y Redondeo
                                </td>
                                <td class="py-2.5 px-3 text-slate-700">
                                    Aproximación mental rápida de resultados sin uso de calculadora.
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Criterio crítico de auto-auditoría para descartar errores ilógicos por descuido.
                                </td>
                                <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                    <span class="text-[10px] font-bold text-emerald-800 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                                        Consolidado
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- TABLA 2: COMPUTACIÓN -->
            <section class="space-y-2.5 pt-2">
                <div class="flex items-center justify-between">
                    <h2 class="font-document-title text-sm sm:text-base font-bold text-slate-900">
                        Tabla 2. Objetivos Consolidados en Computación
                    </h2>
                    <span class="text-[11px] font-semibold text-slate-500 uppercase tracking-wider">Maquetación Web</span>
                </div>

                <div class="overflow-x-auto rounded-lg border border-slate-200">
                    <table class="w-full text-left text-xs divide-y divide-slate-200">
                        <thead class="bg-slate-50 text-slate-700 font-semibold text-[11px]">
                            <tr>
                                <th class="py-2.5 px-3 w-1/4">Proyecto / Destreza</th>
                                <th class="py-2.5 px-3">Destreza Alcanzada (Poco texto)</th>
                                <th class="py-2.5 px-3 w-1/3">Importancia y Conexión (U2 / Lógica)</th>
                                <th class="py-2.5 px-3 text-center w-24">Evaluación</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 bg-white text-[11px] leading-relaxed">
                            <tr class="hover:bg-slate-50/50">
                                <td class="py-2.5 px-3 font-semibold text-slate-900">
                                    1. Estructura HTML5 Semántica
                                </td>
                                <td class="py-2.5 px-3 text-slate-700">
                                    Maquetación de encabezados (&lt;h1&gt;-&lt;h6&gt;), párrafos y bloques estándar.
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Análogo al orden matemático: código estricto sin etiquetas rotas ni abiertas.
                                </td>
                                <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                    <span class="text-[10px] font-bold text-slate-800 bg-slate-100 px-2 py-0.5 rounded border border-slate-200">
                                        10.0 / 10
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/50">
                                <td class="py-2.5 px-3 font-semibold text-slate-900">
                                    2. Hipervínculos e Interconexión
                                </td>
                                <td class="py-2.5 px-3 text-slate-700">
                                    Rutas relativas y absolutas para navegar entre múltiples páginas web.
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Conecta elementos aislados en un sistema funcional navegable.
                                </td>
                                <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                    <span class="text-[10px] font-bold text-slate-800 bg-slate-100 px-2 py-0.5 rounded border border-slate-200">
                                        10.0 / 10
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/50">
                                <td class="py-2.5 px-3 font-semibold text-slate-900">
                                    3. Tablas de Información
                                </td>
                                <td class="py-2.5 px-3 text-slate-700">
                                    Modelado simétrico de filas (&lt;tr&gt;) y columnas (&lt;td&gt;) en horario escolar.
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Correspondencia directa con la cuadrícula espacial de la división matemática.
                                </td>
                                <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                    <span class="text-[10px] font-bold text-slate-800 bg-slate-100 px-2 py-0.5 rounded border border-slate-200">
                                        10.0 / 10
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/50">
                                <td class="py-2.5 px-3 font-semibold text-slate-900">
                                    4. Publicación en GitHub Pages
                                </td>
                                <td class="py-2.5 px-3 text-slate-700">
                                    Despliegue autónomo de proyectos web en servidores reales de internet.
                                </td>
                                <td class="py-2.5 px-3 text-slate-600 font-medium text-slate-800">
                                    Lleva la teoría a un resultado verificable en línea, fomentando autonomía.
                                </td>
                                <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                    <span class="text-[10px] font-bold text-slate-800 bg-slate-100 px-2 py-0.5 rounded border border-slate-200">
                                        10.0 / 10
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/50">
                                <td class="py-2.5 px-3 font-semibold text-slate-900">
                                    5. Calidad y Eficacia de Entrega
                                </td>
                                <td class="py-2.5 px-3 text-slate-700">
                                    100% de proyectos evaluados con retroalimentación docente superada.
                                </td>
                                <td class="py-2.5 px-3 text-slate-600">
                                    Cierra la maquetación HTML5 y deja la estructura lista para hojas CSS (U2).
                                </td>
                                <td class="py-2.5 px-3 text-center whitespace-nowrap">
                                    <span class="text-[10px] font-bold text-slate-800 bg-slate-100 px-2 py-0.5 rounded border border-slate-200">
                                        10.0 / 10
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- ESQUEMA GRÁFICO DE ARTICULACIÓN 1 A 1 -->
            <section class="space-y-2.5 pt-2">
                <div class="flex items-center justify-between">
                    <h2 class="font-document-title text-sm sm:text-base font-bold text-slate-900">
                        Tabla 3. Matriz de Correspondencia Transversal (Matemática ⟷ Computación)
                    </h2>
                    <span class="text-[11px] font-semibold text-slate-500 uppercase tracking-wider">Sinergia Directa</span>
                </div>

                <div class="overflow-x-auto rounded-lg border border-slate-200">
                    <table class="w-full text-left text-xs divide-y divide-slate-200">
                        <thead class="bg-slate-100/80 text-slate-700 font-semibold text-[11px]">
                            <tr>
                                <th class="py-2 px-3 w-1/3">Eje Matemático (Lógica)</th>
                                <th class="py-2 px-2 text-center w-12 text-slate-400">Vínculo</th>
                                <th class="py-2 px-3 w-1/3">Eje Computacional (Aplicación)</th>
                                <th class="py-2 px-3">Relación Formativa Integrada</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 bg-white text-[11px]">
                            <tr class="hover:bg-slate-50/50">
                                <td class="py-2 px-3 font-semibold text-slate-900">
                                    Jerarquía de Operaciones
                                </td>
                                <td class="py-2 px-2 text-center text-slate-400 font-bold">
                                    ⇄
                                </td>
                                <td class="py-2 px-3 font-semibold text-slate-900">
                                    Estructura Semántica HTML
                                </td>
                                <td class="py-2 px-3 text-slate-600">
                                    Ambos exigen orden secuencial estricto sin ambigüedades.
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/50">
                                <td class="py-2 px-3 font-semibold text-slate-900">
                                    Recta Numérica y Opuestos
                                </td>
                                <td class="py-2 px-2 text-center text-slate-400 font-bold">
                                    ⇄
                                </td>
                                <td class="py-2 px-3 font-semibold text-slate-900">
                                    Rutas e Hipervínculos
                                </td>
                                <td class="py-2 px-3 text-slate-600">
                                    Comprensión de posición relativa y direccionamiento ordenado.
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/50">
                                <td class="py-2 px-3 font-semibold text-slate-900">
                                    Fracciones y Equivalencias
                                </td>
                                <td class="py-2 px-2 text-center text-slate-400 font-bold">
                                    ⇄
                                </td>
                                <td class="py-2 px-3 font-semibold text-slate-900">
                                    Proporciones y Modelo Web
                                </td>
                                <td class="py-2 px-3 text-slate-600">
                                    Noción de partes; cimiento clave para Decimales y estilos CSS (U2).
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/50">
                                <td class="py-2 px-3 font-semibold text-slate-900">
                                    División en Cuadrícula
                                </td>
                                <td class="py-2 px-2 text-center text-slate-400 font-bold">
                                    ⇄
                                </td>
                                <td class="py-2 px-3 font-semibold text-slate-900">
                                    Tablas y Horario HTML
                                </td>
                                <td class="py-2 px-3 text-slate-600">
                                    Organización espacial rigurosa de datos en filas y columnas.
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/50">
                                <td class="py-2 px-3 font-semibold text-slate-900">
                                    Estimación y Redondeo
                                </td>
                                <td class="py-2 px-2 text-center text-slate-400 font-bold">
                                    ⇄
                                </td>
                                <td class="py-2 px-3 font-semibold text-slate-900">
                                    Publicación en GitHub Pages
                                </td>
                                <td class="py-2 px-3 text-slate-600">
                                    Criterio crítico de auto-revisión antes de dar por buena la entrega.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- PIE DE HOJA FORMAL -->
            <footer class="pt-3 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-1 text-[11px] text-slate-500">
                <span>Informe académico oficial de competencias • Cierre de la Unidad 1</span>
                <span class="font-medium text-slate-700">Listo para inicio de la Unidad 2</span>
            </footer>

        </article>
    </main>

</body>
</html>