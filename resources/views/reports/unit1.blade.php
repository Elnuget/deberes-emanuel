<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz Curricular — Objetivos Unidad 1 | Emmanuel</title>
    
    <!-- Metatags para Compartir -->
    <meta property="og:title" content="Matriz Curricular — Objetivos Unidad 1 | Emmanuel">
    <meta property="og:description" content="Matriz formal de objetivos consolidados y relación transversal entre Matemática y Computación.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url('/informe/unidad-1') }}">
    
    <!-- Fuentes Tipográficas Formales -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- ESTILOS FORMALES 100% AUTOCONTENIDOS (Garantía de Carga Inmediata y Resiliencia Total) -->
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html, body {
            min-height: 100%;
            background-color: #f1f5f9;
            color: #1e293b;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }

        body {
            padding: 1.25rem 0.75rem;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        @media (min-width: 640px) {
            body {
                padding: 2.5rem 1.5rem;
            }
        }

        .doc-container {
            width: 100%;
            max-width: 56rem;
            margin: 0 auto;
        }

        .doc-sheet {
            background-color: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
        }

        @media (min-width: 640px) {
            .doc-sheet {
                padding: 2.5rem 3rem;
                border-radius: 1rem;
            }
        }

        /* Encabezado */
        .doc-header {
            border-bottom: 2px solid #0f172a;
            padding-bottom: 1.25rem;
            margin-bottom: 1.75rem;
        }

        .doc-header-top {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 0.5rem;
            font-size: 0.75rem;
            color: #64748b;
            margin-bottom: 0.65rem;
        }

        @media (min-width: 640px) {
            .doc-header-top {
                flex-direction: row;
                align-items: flex-end;
            }
        }

        .doc-tag {
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #0f172a;
        }

        .doc-title {
            font-family: 'Merriweather', Georgia, serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: #0f172a;
            line-height: 1.3;
            letter-spacing: -0.01em;
        }

        @media (min-width: 640px) {
            .doc-title {
                font-size: 1.75rem;
            }
        }

        .doc-subtitle {
            font-size: 0.8125rem;
            color: #475569;
            margin-top: 0.35rem;
            line-height: 1.45;
        }

        /* Secciones */
        .doc-section {
            margin-bottom: 1.75rem;
        }

        .doc-section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 0.65rem;
        }

        .doc-section-title {
            font-family: 'Merriweather', Georgia, serif;
            font-size: 0.95rem;
            font-weight: 700;
            color: #0f172a;
        }

        @media (min-width: 640px) {
            .doc-section-title {
                font-size: 1.05rem;
            }
        }

        .doc-section-badge {
            font-size: 0.6875rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #64748b;
        }

        /* Tablas */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
            background: #ffffff;
            -webkit-overflow-scrolling: touch;
        }

        .formal-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.75rem;
            min-width: 600px;
        }

        .formal-table th {
            background-color: #f8fafc;
            color: #334155;
            font-weight: 700;
            padding: 0.65rem 0.85rem;
            border-bottom: 1px solid #e2e8f0;
            text-transform: uppercase;
            font-size: 0.6875rem;
            letter-spacing: 0.05em;
        }

        .formal-table td {
            padding: 0.65rem 0.85rem;
            border-bottom: 1px solid #f1f5f9;
            color: #475569;
            vertical-align: top;
            line-height: 1.45;
        }

        .formal-table tbody tr:last-child td {
            border-bottom: none;
        }

        .formal-table tbody tr:hover td {
            background-color: #f8fafc;
        }

        .item-name {
            font-weight: 600;
            color: #0f172a;
        }

        .item-desc {
            color: #334155;
        }

        .item-link-u2 {
            color: #475569;
        }

        .item-highlight {
            font-weight: 600;
            color: #0f172a;
        }

        /* Badges de Estado */
        .badge-status {
            display: inline-block;
            padding: 0.2rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.65rem;
            font-weight: 700;
            text-transform: uppercase;
            background-color: #ecfdf5;
            color: #065f46;
            border: 1px solid #a7f3d0;
            white-space: nowrap;
        }

        .badge-grade {
            display: inline-block;
            padding: 0.2rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.65rem;
            font-weight: 700;
            background-color: #f1f5f9;
            color: #1e293b;
            border: 1px solid #cbd5e1;
            white-space: nowrap;
        }

        .cell-center {
            text-align: center;
        }

        .symbol-connector {
            font-size: 0.95rem;
            color: #94a3b8;
            font-weight: bold;
            text-align: center;
        }

        /* Pie de documento */
        .doc-footer {
            border-top: 1px solid #e2e8f0;
            padding-top: 0.85rem;
            margin-top: 1.75rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 0.35rem;
            font-size: 0.6875rem;
            color: #64748b;
        }

        @media (min-width: 640px) {
            .doc-footer {
                flex-direction: row;
                align-items: center;
            }
        }

        @media print {
            body {
                background: #ffffff !important;
                padding: 0 !important;
            }
            .doc-sheet {
                box-shadow: none !important;
                border: none !important;
                padding: 0 !important;
            }
            .formal-table {
                min-width: 100% !important;
            }
        }
    </style>
</head>
<body>

    <main class="doc-container">
        <article class="doc-sheet">
            
            <!-- ENCABEZADO INSTITUCIONAL FORMAL -->
            <header class="doc-header">
                <div class="doc-header-top">
                    <div>
                        <span class="doc-tag">Informe Pedagógico de Cierre</span>
                        <div style="font-size: 0.6875rem; color: #64748b; margin-top: 0.15rem;">Ciclo Evaluado: Unidad 1</div>
                    </div>
                    <div style="font-size: 0.75rem;">
                        <span style="color: #64748b;">Estudiante evaluado:</span>
                        <strong style="color: #0f172a; margin-left: 0.25rem;">{{ $student->name ?? 'Emmanuel' }}</strong>
                    </div>
                </div>

                <h1 class="doc-title">
                    Matriz Curricular de Objetivos y Relación Transversal
                </h1>
                <p class="doc-subtitle">
                    Resumen esquemático de competencias adquiridas en <strong>Matemática</strong> y <strong>Computación</strong>, facilitando su revisión pedagógica y articulación hacia la Unidad 2.
                </p>
            </header>

            <!-- TABLA 1: MATEMÁTICA -->
            <section class="doc-section">
                <div class="doc-section-header">
                    <h2 class="doc-section-title">
                        Tabla 1. Objetivos Consolidados en Matemática
                    </h2>
                    <span class="doc-section-badge">Cimientos Numéricos</span>
                </div>

                <div class="table-responsive">
                    <table class="formal-table">
                        <thead>
                            <tr>
                                <th style="width: 26%;">Tema / Contenido</th>
                                <th style="width: 34%;">Destreza Alcanzada (Poco texto)</th>
                                <th style="width: 28%;">Importancia y Conexión (U2 / Lógica)</th>
                                <th style="width: 12%; text-align: center;">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="item-name">
                                    1. Jerarquía de Operaciones (ℕ)
                                </td>
                                <td class="item-desc">
                                    Resolución metódica con paréntesis, productos y sumas sin salirse del orden.
                                </td>
                                <td class="item-link-u2">
                                    Base obligatoria para ecuaciones y pensamiento secuencial algorítmico.
                                </td>
                                <td class="cell-center">
                                    <span class="badge-status">Consolidado</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">
                                    2. Recta Numérica y Opuestos (ℤ)
                                </td>
                                <td class="item-desc">
                                    Ubicación espacial de positivos, negativos y distancias respecto al origen (0).
                                </td>
                                <td class="item-link-u2">
                                    Introduce el sentido relativo de magnitud (temperatura, balance y ejes).
                                </td>
                                <td class="cell-center">
                                    <span class="badge-status">Consolidado</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">
                                    3. Fracciones y Equivalencias (ℚ)
                                </td>
                                <td class="item-desc">
                                    Concepto parte-todo, simplificación rigurosa e identificación de razones iguales.
                                </td>
                                <td class="item-link-u2">
                                    <span class="item-highlight">Puente directo a la U2:</span> una fracción es la antesala formal del número decimal.
                                </td>
                                <td class="cell-center">
                                    <span class="badge-status">Consolidado</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">
                                    4. División de Dos Cifras
                                </td>
                                <td class="item-desc">
                                    Proceso largo mecánico, estimación de cociente y control estricto del residuo.
                                </td>
                                <td class="item-link-u2">
                                    Desarrolla orden en cuadrícula y prepara la división con coma decimal.
                                </td>
                                <td class="cell-center">
                                    <span class="badge-status">Consolidado</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">
                                    5. Estimación y Redondeo
                                </td>
                                <td class="item-desc">
                                    Aproximación mental rápida de resultados sin uso de calculadora.
                                </td>
                                <td class="item-link-u2">
                                    Criterio crítico de auto-auditoría para descartar errores ilógicos por descuido.
                                </td>
                                <td class="cell-center">
                                    <span class="badge-status">Consolidado</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- TABLA 2: COMPUTACIÓN -->
            <section class="doc-section">
                <div class="doc-section-header">
                    <h2 class="doc-section-title">
                        Tabla 2. Objetivos Consolidados en Computación
                    </h2>
                    <span class="doc-section-badge">Maquetación Web</span>
                </div>

                <div class="table-responsive">
                    <table class="formal-table">
                        <thead>
                            <tr>
                                <th style="width: 26%;">Proyecto / Destreza</th>
                                <th style="width: 34%;">Destreza Alcanzada (Poco texto)</th>
                                <th style="width: 28%;">Importancia y Conexión (U2 / Lógica)</th>
                                <th style="width: 12%; text-align: center;">Evaluación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="item-name">
                                    1. Estructura HTML5 Semántica
                                </td>
                                <td class="item-desc">
                                    Maquetación de encabezados (&lt;h1&gt;-&lt;h6&gt;), párrafos y bloques estándar.
                                </td>
                                <td class="item-link-u2">
                                    Análogo al orden matemático: código estricto sin etiquetas rotas ni abiertas.
                                </td>
                                <td class="cell-center">
                                    <span class="badge-grade">10.0 / 10</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">
                                    2. Hipervínculos e Interconexión
                                </td>
                                <td class="item-desc">
                                    Rutas relativas y absolutas para navegar entre múltiples páginas web.
                                </td>
                                <td class="item-link-u2">
                                    Conecta elementos aislados en un sistema funcional navegable.
                                </td>
                                <td class="cell-center">
                                    <span class="badge-grade">10.0 / 10</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">
                                    3. Tablas de Información
                                </td>
                                <td class="item-desc">
                                    Modelado simétrico de filas (&lt;tr&gt;) y columnas (&lt;td&gt;) en horario escolar.
                                </td>
                                <td class="item-link-u2">
                                    Correspondencia directa con la cuadrícula espacial de la división matemática.
                                </td>
                                <td class="cell-center">
                                    <span class="badge-grade">10.0 / 10</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">
                                    4. Publicación en GitHub Pages
                                </td>
                                <td class="item-desc">
                                    Despliegue autónomo de proyectos web en servidores reales de internet.
                                </td>
                                <td class="item-link-u2">
                                    <span class="item-highlight">Lleva la teoría a un resultado verificable</span> en línea, fomentando autonomía.
                                </td>
                                <td class="cell-center">
                                    <span class="badge-grade">10.0 / 10</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">
                                    5. Calidad y Eficacia de Entrega
                                </td>
                                <td class="item-desc">
                                    100% de proyectos evaluados con retroalimentación docente superada.
                                </td>
                                <td class="item-link-u2">
                                    Cierra la maquetación HTML5 y deja la estructura lista para hojas CSS (U2).
                                </td>
                                <td class="cell-center">
                                    <span class="badge-grade">10.0 / 10</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- TABLA 3: MATRIZ DE CORRESPONDENCIA TRANSVERSAL -->
            <section class="doc-section" style="margin-bottom: 0;">
                <div class="doc-section-header">
                    <h2 class="doc-section-title">
                        Tabla 3. Matriz de Correspondencia Transversal (Matemática ⟷ Computación)
                    </h2>
                    <span class="doc-section-badge">Sinergia Directa</span>
                </div>

                <div class="table-responsive">
                    <table class="formal-table">
                        <thead>
                            <tr style="background-color: #f1f5f9;">
                                <th style="width: 30%;">Eje Matemático (Lógica)</th>
                                <th style="width: 8%; text-align: center;">Vínculo</th>
                                <th style="width: 30%;">Eje Computacional (Aplicación)</th>
                                <th style="width: 32%;">Relación Formativa Integrada</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="item-name">
                                    Jerarquía de Operaciones
                                </td>
                                <td class="symbol-connector">
                                    ⇄
                                </td>
                                <td class="item-name">
                                    Estructura Semántica HTML
                                </td>
                                <td class="item-desc">
                                    Ambos exigen orden secuencial estricto sin ambigüedades.
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">
                                    Recta Numérica y Opuestos
                                </td>
                                <td class="symbol-connector">
                                    ⇄
                                </td>
                                <td class="item-name">
                                    Rutas e Hipervínculos
                                </td>
                                <td class="item-desc">
                                    Comprensión de posición relativa y direccionamiento ordenado.
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">
                                    Fracciones y Equivalencias
                                </td>
                                <td class="symbol-connector">
                                    ⇄
                                </td>
                                <td class="item-name">
                                    Proporciones y Modelo Web
                                </td>
                                <td class="item-desc">
                                    Noción de partes; cimiento clave para Decimales y estilos CSS (U2).
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">
                                    División en Cuadrícula
                                </td>
                                <td class="symbol-connector">
                                    ⇄
                                </td>
                                <td class="item-name">
                                    Tablas y Horario HTML
                                </td>
                                <td class="item-desc">
                                    Organización espacial rigurosa de datos en filas y columnas.
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">
                                    Estimación y Redondeo
                                </td>
                                <td class="symbol-connector">
                                    ⇄
                                </td>
                                <td class="item-name">
                                    Publicación en GitHub Pages
                                </td>
                                <td class="item-desc">
                                    Criterio crítico de auto-revisión antes de dar por buena la entrega.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- PIE DE HOJA FORMAL -->
            <footer class="doc-footer">
                <div>Informe académico oficial de competencias &bull; Cierre de la Unidad 1</div>
                <div style="font-weight: 600; color: #334155;">Estudiante: Emmanuel &bull; Listo para Unidad 2</div>
            </footer>

        </article>
    </main>

</body>
</html>