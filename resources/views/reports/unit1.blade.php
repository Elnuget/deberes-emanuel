<!DOCTYPE html>
<html lang="es" class="h-full bg-slate-100/70">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe Formal de Objetivos Cumplidos — Unidad 1 | Emanuel</title>
    
    <!-- Metatags para Compartir -->
    <meta property="og:title" content="Informe Formal de Objetivos Cumplidos — Unidad 1 | Emanuel">
    <meta property="og:description" content="Documento formal de competencias consolidadas, importancia curricular y articulación formativa en Matemática y Computación.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url('/informe/unidad-1') }}">
    
    <!-- Fuentes Tipográficas para Documento Formal: Merriweather (Serif) + Inter (Sans) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet">
    
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
            .page-break-avoid {
                break-inside: avoid;
                page-break-inside: avoid;
            }
        }
    </style>
</head>
<body class="min-h-full py-4 sm:py-10 px-2.5 sm:px-6 lg:px-8 antialiased text-slate-800 flex justify-center">

    <!-- HOJA FORMAL DEL DOCUMENTO -->
    <main class="w-full max-w-4xl">
        <article class="document-sheet bg-white rounded-lg sm:rounded-xl border border-slate-300 shadow-sm sm:shadow-md p-5 sm:p-10 md:p-12 space-y-8">
            
            <!-- ENCABEZADO INSTITUCIONAL FORMAL -->
            <header class="border-b-2 border-slate-900 pb-5 sm:pb-6">
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-3 text-xs text-slate-600 mb-3">
                    <div>
                        <span class="font-bold uppercase tracking-wider text-slate-900">Informe Pedagógico y Curricular</span>
                        <span class="block text-[11px] text-slate-500">Período Académico: Cierre de la Unidad 1</span>
                    </div>
                    <div class="sm:text-right">
                        <span class="text-slate-500 block text-[11px]">Estudiante evaluado:</span>
                        <strong class="text-slate-900 text-sm font-semibold">{{ $student->name ?? 'Emanuel' }}</strong>
                    </div>
                </div>

                <h1 class="font-document-title text-xl sm:text-2xl md:text-3xl font-bold text-slate-900 tracking-tight leading-snug">
                    Matriz de Objetivos Cumplidos y Articulación Pedagógica
                </h1>
                <p class="text-xs sm:text-[13px] text-slate-600 mt-2 leading-relaxed">
                    El presente informe formal detalla las destrezas consolidadas durante la <strong>Unidad 1</strong> en las áreas de <strong>Matemática</strong> y <strong>Computación</strong>, especificando el dominio técnico adquirido y la justificación pedagógica de su relevancia hacia los contenidos de la siguiente etapa formativa.
                </p>
            </header>

            <!-- SECCIÓN 1: MATEMÁTICA -->
            <section class="space-y-4">
                <div class="border-b border-slate-200 pb-2 flex items-center justify-between">
                    <h2 class="font-document-title text-base sm:text-lg font-bold text-slate-900 flex items-center gap-2">
                        <span>1. Área de Matemática: Pensamiento Lógico-Aritmético</span>
                    </h2>
                    <span class="text-[11px] font-semibold text-slate-500 uppercase tracking-wider">5 Competencias</span>
                </div>

                <div class="space-y-3.5">
                    
                    <!-- 1.1 Números Naturales -->
                    <div class="border border-slate-200 rounded-md p-4 bg-slate-50/40 page-break-avoid">
                        <div class="flex items-baseline justify-between gap-2 border-b border-slate-200/60 pb-1.5 mb-2">
                            <h3 class="font-semibold text-slate-900 text-xs sm:text-sm">
                                1.1. Números Naturales (ℕ) y Jerarquía de Operaciones
                            </h3>
                            <span class="text-[10px] uppercase font-bold text-slate-700 bg-slate-200/70 px-2 py-0.5 rounded">
                                Consolidado
                            </span>
                        </div>
                        <p class="text-xs text-slate-700 leading-relaxed mb-2">
                            <strong class="text-slate-900">Destreza consolidada:</strong> Resolución metódica de operaciones combinadas, aplicando con estricta precisión el orden jerárquico (paréntesis, multiplicaciones y divisiones, seguidas de adiciones y sustracciones).
                        </p>
                        <div class="bg-white p-2.5 rounded border-l-2 border-slate-500 text-[11px] text-slate-600 leading-relaxed">
                            <strong class="text-slate-800">Importancia y relación pedagógica:</strong> Erradica la ambigüedad en el cálculo manual y entrena la disciplina de resolución paso a paso. Constituye la base lógica obligatoria para la posterior formulación de igualdades y ecuaciones algebraicas.
                        </div>
                    </div>

                    <!-- 1.2 Números Enteros -->
                    <div class="border border-slate-200 rounded-md p-4 bg-slate-50/40 page-break-avoid">
                        <div class="flex items-baseline justify-between gap-2 border-b border-slate-200/60 pb-1.5 mb-2">
                            <h3 class="font-semibold text-slate-900 text-xs sm:text-sm">
                                1.2. Números Enteros (ℤ) y Representación en la Recta Numérica
                            </h3>
                            <span class="text-[10px] uppercase font-bold text-slate-700 bg-slate-200/70 px-2 py-0.5 rounded">
                                Consolidado
                            </span>
                        </div>
                        <p class="text-xs text-slate-700 leading-relaxed mb-2">
                            <strong class="text-slate-900">Destreza consolidada:</strong> Comprensión espacial de valores positivos, negativos y el cero como origen; cálculo exacto de distancias relativas y asimilación conceptual de números opuestos.
                        </p>
                        <div class="bg-white p-2.5 rounded border-l-2 border-slate-500 text-[11px] text-slate-600 leading-relaxed">
                            <strong class="text-slate-800">Importancia y relación pedagógica:</strong> Rompe la limitación del conteo aritmético básico e introduce la noción de sentido y magnitud relativa, esencial para interpretar balances contables, variaciones térmicas y sistemas de coordenadas.
                        </div>
                    </div>

                    <!-- 1.3 Fracciones -->
                    <div class="border border-slate-200 rounded-md p-4 bg-slate-50/40 page-break-avoid">
                        <div class="flex items-baseline justify-between gap-2 border-b border-slate-200/60 pb-1.5 mb-2">
                            <h3 class="font-semibold text-slate-900 text-xs sm:text-sm">
                                1.3. Fracciones (ℚ), Simplificación y Razones Equivalentes
                            </h3>
                            <span class="text-[10px] uppercase font-bold text-slate-700 bg-slate-200/70 px-2 py-0.5 rounded">
                                Consolidado
                            </span>
                        </div>
                        <p class="text-xs text-slate-700 leading-relaxed mb-2">
                            <strong class="text-slate-900">Destreza consolidada:</strong> Comprensión analítica de la relación parte-todo, simplificación de términos hasta su mínima expresión irreducible e identificación de fracciones equivalentes por amplificación.
                        </p>
                        <div class="bg-white p-2.5 rounded border-l-2 border-slate-500 text-[11px] text-slate-600 leading-relaxed">
                            <strong class="text-slate-800">Importancia y relación pedagógica:</strong> Es el puente directo y no negociable hacia la <strong>Unidad 2</strong>: una fracción es formalmente una división. Comprender las equivalencias fraccionarias garantiza que el aprendizaje de los números decimales y conversiones fraccionarias se realice con solvencia y comprensión profunda.
                        </div>
                    </div>

                    <!-- 1.4 Algoritmo de División -->
                    <div class="border border-slate-200 rounded-md p-4 bg-slate-50/40 page-break-avoid">
                        <div class="flex items-baseline justify-between gap-2 border-b border-slate-200/60 pb-1.5 mb-2">
                            <h3 class="font-semibold text-slate-900 text-xs sm:text-sm">
                                1.4. Algoritmo Formal de la División (Dos Cifras en el Divisor)
                            </h3>
                            <span class="text-[10px] uppercase font-bold text-slate-700 bg-slate-200/70 px-2 py-0.5 rounded">
                                Consolidado
                            </span>
                        </div>
                        <p class="text-xs text-slate-700 leading-relaxed mb-2">
                            <strong class="text-slate-900">Destreza consolidada:</strong> Mecanización estructurada del algoritmo de división larga en cuaderno cuadriculado, estimación rigurosa de cocientes parciales y verificación sistemática de que el residuo sea estrictamente menor al divisor.
                        </p>
                        <div class="bg-white p-2.5 rounded border-l-2 border-slate-500 text-[11px] text-slate-600 leading-relaxed">
                            <strong class="text-slate-800">Importancia y relación pedagógica:</strong> Desarrolla concentración sostenida y orden gráfico espacial. Prepara técnicamente al alumno para extender la división hacia la coma decimal en la Unidad 2, donde el cálculo de cifras periódicas o finitas exige este mismo dominio algorítmico.
                        </div>
                    </div>

                    <!-- 1.5 Estimación y Redondeo -->
                    <div class="border border-slate-200 rounded-md p-4 bg-slate-50/40 page-break-avoid">
                        <div class="flex items-baseline justify-between gap-2 border-b border-slate-200/60 pb-1.5 mb-2">
                            <h3 class="font-semibold text-slate-900 text-xs sm:text-sm">
                                1.5. Estimación Aritmética y Redondeo de Magnitudes
                            </h3>
                            <span class="text-[10px] uppercase font-bold text-slate-700 bg-slate-200/70 px-2 py-0.5 rounded">
                                Consolidado
                            </span>
                        </div>
                        <p class="text-xs text-slate-700 leading-relaxed mb-2">
                            <strong class="text-slate-900">Destreza consolidada:</strong> Cálculo mental aproximado y fijación rápida de órdenes de magnitud (decenas, centenas y millares) en adiciones, sustracciones y productos de varios dígitos sin calculadora.
                        </p>
                        <div class="bg-white p-2.5 rounded border-l-2 border-slate-500 text-[11px] text-slate-600 leading-relaxed">
                            <strong class="text-slate-800">Importancia y relación pedagógica:</strong> Fomenta el juicio numérico crítico y el hábito de auto-corrección. Antes de finalizar una operación, el estudiante es capaz de prever si su resultado es verosímil, eliminando sistemáticamente los errores involuntarios por descuido.
                        </div>
                    </div>

                </div>
            </section>

            <!-- SECCIÓN 2: COMPUTACIÓN -->
            <section class="space-y-4 pt-4">
                <div class="border-b border-slate-200 pb-2 flex items-center justify-between">
                    <h2 class="font-document-title text-base sm:text-lg font-bold text-slate-900 flex items-center gap-2">
                        <span>2. Área de Computación: Arquitectura y Maquetación Web</span>
                    </h2>
                    <span class="text-[11px] font-semibold text-slate-500 uppercase tracking-wider">5 Competencias</span>
                </div>

                <div class="space-y-3.5">
                    
                    <!-- 2.1 Estructura Semántica HTML5 -->
                    <div class="border border-slate-200 rounded-md p-4 bg-slate-50/40 page-break-avoid">
                        <div class="flex items-baseline justify-between gap-2 border-b border-slate-200/60 pb-1.5 mb-2">
                            <h3 class="font-semibold text-slate-900 text-xs sm:text-sm">
                                2.1. Estructura y Jerarquía Semántica en HTML5
                            </h3>
                            <span class="text-[10px] uppercase font-bold text-slate-700 bg-slate-200/70 px-2 py-0.5 rounded">
                                Consolidado
                            </span>
                        </div>
                        <p class="text-xs text-slate-700 leading-relaxed mb-2">
                            <strong class="text-slate-900">Destreza consolidada:</strong> Construcción limpia de páginas web mediante etiquetas semánticas estándar, jerarquía ordenada de encabezados (&lt;h1&gt; a &lt;h6&gt;), organización en párrafos y separación estructural entre cabecera, cuerpo y pie.
                        </p>
                        <div class="bg-white p-2.5 rounded border-l-2 border-slate-500 text-[11px] text-slate-600 leading-relaxed">
                            <strong class="text-slate-800">Importancia y relación pedagógica:</strong> Se relaciona directamente con el rigor analítico de las matemáticas: el código exige orden formal y no tolera etiquetas incompletas. Constituye el andamiaje estructural sobre el cual se aplicará el diseño estético con CSS en la Unidad 2.
                        </div>
                    </div>

                    <!-- 2.2 Hipervínculos e Interconexión -->
                    <div class="border border-slate-200 rounded-md p-4 bg-slate-50/40 page-break-avoid">
                        <div class="flex items-baseline justify-between gap-2 border-b border-slate-200/60 pb-1.5 mb-2">
                            <h3 class="font-semibold text-slate-900 text-xs sm:text-sm">
                                2.2. Hipervínculos y Conectividad entre Documentos
                            </h3>
                            <span class="text-[10px] uppercase font-bold text-slate-700 bg-slate-200/70 px-2 py-0.5 rounded">
                                Consolidado
                            </span>
                        </div>
                        <p class="text-xs text-slate-700 leading-relaxed mb-2">
                            <strong class="text-slate-900">Destreza consolidada:</strong> Implementación de rutas relativas y absolutas para articular navegación fluida entre múltiples archivos del proyecto personal y referencias académicas externas.
                        </p>
                        <div class="bg-white p-2.5 rounded border-l-2 border-slate-500 text-[11px] text-slate-600 leading-relaxed">
                            <strong class="text-slate-800">Importancia y relación pedagógica:</strong> Transforma archivos estáticos aislados en un sistema de información estructurado. Enseña cómo los sistemas informáticos interconectan recursos bajo estándares de direccionamiento web.
                        </div>
                    </div>

                    <!-- 2.3 Tablas de Información -->
                    <div class="border border-slate-200 rounded-md p-4 bg-slate-50/40 page-break-avoid">
                        <div class="flex items-baseline justify-between gap-2 border-b border-slate-200/60 pb-1.5 mb-2">
                            <h3 class="font-semibold text-slate-900 text-xs sm:text-sm">
                                2.3. Modelado de Información en Tablas Bidimensionales
                            </h3>
                            <span class="text-[10px] uppercase font-bold text-slate-700 bg-slate-200/70 px-2 py-0.5 rounded">
                                Consolidado
                            </span>
                        </div>
                        <p class="text-xs text-slate-700 leading-relaxed mb-2">
                            <strong class="text-slate-900">Destreza consolidada:</strong> Maquetación de tablas complejas con alineación simétrica de filas (&lt;tr&gt;), columnas (&lt;td&gt;) y encabezados (&lt;th&gt;), aplicado concretamente en su horario semanal de clases.
                        </p>
                        <div class="bg-white p-2.5 rounded border-l-2 border-slate-500 text-[11px] text-slate-600 leading-relaxed">
                            <strong class="text-slate-800">Importancia y relación pedagógica:</strong> Guarda correspondencia directa con la organización en cuadrícula de las divisiones matemáticas. Facilita la representación visual ordenada de datos tabulares, habilidad clave para futuras hojas de cálculo y bases de datos.
                        </div>
                    </div>

                    <!-- 2.4 Publicación en GitHub Pages -->
                    <div class="border border-slate-200 rounded-md p-4 bg-slate-50/40 page-break-avoid">
                        <div class="flex items-baseline justify-between gap-2 border-b border-slate-200/60 pb-1.5 mb-2">
                            <h3 class="font-semibold text-slate-900 text-xs sm:text-sm">
                                2.4. Publicación y Despliegue en Internet (GitHub Pages)
                            </h3>
                            <span class="text-[10px] uppercase font-bold text-slate-700 bg-slate-200/70 px-2 py-0.5 rounded">
                                Consolidado
                            </span>
                        </div>
                        <p class="text-xs text-slate-700 leading-relaxed mb-2">
                            <strong class="text-slate-900">Destreza consolidada:</strong> Carga y publicación autónoma de su sitio web en servidores remotos públicos de GitHub Pages, haciéndolo accesible globalmente mediante URL web.
                        </p>
                        <div class="bg-white p-2.5 rounded border-l-2 border-slate-500 text-[11px] text-slate-600 leading-relaxed">
                            <strong class="text-slate-800">Importancia y relación pedagógica:</strong> Conecta la teoría de aula con el mundo profesional real. Permite al alumno verificar que sus creaciones son funcionales en la web abierta, fomentando autonomía y orgullo académico.
                        </div>
                    </div>

                    <!-- 2.5 Rendimiento y Calidad -->
                    <div class="border border-slate-200 rounded-md p-4 bg-slate-50/40 page-break-avoid">
                        <div class="flex items-baseline justify-between gap-2 border-b border-slate-200/60 pb-1.5 mb-2">
                            <h3 class="font-semibold text-slate-900 text-xs sm:text-sm">
                                2.5. Calidad Técnica y Eficacia de Entrega
                            </h3>
                            <span class="text-[10px] uppercase font-bold text-slate-700 bg-slate-200/70 px-2 py-0.5 rounded">
                                10.0 / 10
                            </span>
                        </div>
                        <p class="text-xs text-slate-700 leading-relaxed mb-2">
                            <strong class="text-slate-900">Destreza consolidada:</strong> Cumplimiento oportuno de la totalidad de entregas requeridas, con revisión de calidad previa y calificación perfecta en todas las asignaciones evaluadas.
                        </p>
                        <div class="bg-white p-2.5 rounded border-l-2 border-slate-500 text-[11px] text-slate-600 leading-relaxed">
                            <strong class="text-slate-800">Importancia y relación pedagógica:</strong> Evidencia constancia, atención al detalle y capacidad para seguir especificaciones técnicas sin omisiones, consolidando una sólida ética de trabajo escolar.
                        </div>
                    </div>

                </div>
            </section>

            <!-- SÍNTESIS PEDAGÓGICA Y ARTICULACIÓN HACIA LA UNIDAD 2 -->
            <section class="border-t-2 border-slate-200 pt-5 page-break-avoid">
                <h3 class="font-document-title text-sm sm:text-base font-bold text-slate-900 mb-2">
                    3. Síntesis Formativa y Articulación Curricular
                </h3>
                <div class="text-xs text-slate-600 leading-relaxed space-y-2">
                    <p>
                        La evaluación de la <strong>Unidad 1</strong> demuestra que el estudiante cuenta con una estructura de pensamiento ordenada: en Matemática demuestra solvencia operativa para abordar divisiones complejas y fracciones, mientras que en Computación ha asimilado la lógica del código estandarizado y la publicación web.
                    </p>
                    <p>
                        Esta integración disciplinaria asegura las condiciones pedagógicas idóneas para avanzar en la <strong>Unidad 2</strong> hacia los <strong>números decimales</strong> (cálculo con coma y resolución de problemas financieros) y la incorporación de <strong>hojas de estilo CSS</strong> (diseño visual y composición tipográfica) con total seguridad conceptual.
                    </p>
                </div>
            </section>

            <!-- NOTA AL PIE FORMAL -->
            <footer class="pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-2 text-[11px] text-slate-500">
                <span>Documento académico oficial emitido para revisión pedagógica.</span>
                <span class="font-medium text-slate-600">Unidad 1 Evaluada con Éxito</span>
            </footer>

        </article>
    </main>

</body>
</html>