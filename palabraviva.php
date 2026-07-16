<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palabra Viva | Blog de Andrea Katerji</title>
    <meta name="description" content="Un espacio de transformación donde la medicina funcional y el flow se encuentran. Artículos, reflexiones y conversaciones con la Dra. Andrea Katerji.">
    <link rel="stylesheet" href="palabraviva-styles.css">
    <link rel="stylesheet" href="blog-modal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Favicon AK - Palabra Viva -->
    <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
</head>
<body>
    <!-- Navigation -->
    <nav class="blog-nav">
        <div class="nav-container">
            <a href="index.php" class="nav-logo">
                <span class="logo-text">Palabra Viva</span>
                <span class="logo-subtitle">Literatura Médica</span>
            </a>
            
            <div class="nav-links">
                <a href="index.php" class="nav-link">
                    <span class="nav-link-text">Inicio</span>
                    <span class="nav-link-subtitle">Portal Principal</span>
                </a>
                <a href="myowndoc.php" class="nav-link">
                    <span class="nav-link-text">MyOwnDoc</span>
                    <span class="nav-link-subtitle">Medicina Personalizada</span>
                </a>
                <a href="theflowmethod.php" class="nav-link">
                    <span class="nav-link-text">The Flow Method</span>
                    <span class="nav-link-subtitle">Fluir en Salud</span>
                </a>
            </div>
            
            <button class="nav-toggle" aria-label="Menú">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="blog-hero">
        <div class="hero-background">
            <div class="hero-gradient"></div>
            <div class="hero-particles">
                <span class="particle"></span>
                <span class="particle"></span>
                <span class="particle"></span>
                <span class="particle"></span>
                <span class="particle"></span>
                <span class="particle"></span>
                <span class="particle"></span>
            </div>
        </div>
        
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="badge-text">Literatura Médica</span>
                    <span class="badge-icon"></span>
                </div>
                
                <h1 class="hero-title">
                    <span class="title-main">Palabra Viva</span>
                    <span class="title-subtitle">Donde la ciencia encuentra el alma</span>
                </h1>
                
                <p class="hero-description">
                    Un espacio de transformación profunda donde la medicina funcional y la literatura se entrelazan 
                    para revelar las verdades ocultas del cuerpo y el espíritu. Aquí exploramos la salud como un acto 
                    de autoconocimiento, donde cada síntoma es una palabra y cada diagnóstico, una historia por escribir.
                </p>
                
                <div class="hero-quote">
                    <span class="quote-mark">"</span>
                    <p class="quote-text">
                        La verdadera medicina no trata enfermedades, sino que narra historias de sanación 
                        donde el paciente se convierte en protagonista de su propia transformación.
                    </p>
                    <span class="quote-author">Dra. Andrea Katerji</span>
                </div>
                
                <div class="hero-author">
                    <div class="author-avatar">
                        <div class="avatar-placeholder">
                            <span class="avatar-initials">AK</span>
                        </div>
                    </div>
                    <div class="author-info">
                        <span class="author-name">Dra. Andrea Katerji</span>
                        <span class="author-title">Medicina Funcional & The Flow Method</span>
                        <div class="author-social">
                            <a href="https://instagram.com/myowndoc" target="_blank" class="social-link">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1 1 12.324 0 6.162 6.162 0 0 1-12.324 0zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm4.965-10.405a1.44 1.44 0 1 1 2.881.001 1.44 1.44 0 0 1-2.881-.001z"/>
                                </svg>
                                @myowndoc
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="scroll-indicator">
            <span class="scroll-text">Explorar artículos</span>
            <div class="scroll-arrow"></div>
        </div>
    </section>

    <!-- Featured Books -->
    <section class="featured-books-section">
        <div class="container">
            <div class="section-label">Destacados</div>
            <h2 class="section-title-main">Libros Digitales</h2>
            
            <div class="books-grid">
                <!-- Book 1: El Cortisol No Miente -->
                <article class="book-card">
                    <div class="book-cover-wrapper">
                        <div class="book-cover">
                            <img src="myowndoc/ebook1.png" alt="El Cortisol No Miente - Portada" class="book-cover-image">
                        </div>
                        <div class="book-glow"></div>
                    </div>
                    
                    <div class="book-content">
                        <h3 class="book-title">El Cortisol No Miente</h3>
                        <p class="book-author">Dra. Andrea Katerji</p>
                        <p class="book-description">
                            Descubre cómo el cortisol afecta tu salud y aprende a manejarlo para recuperar tu bienestar.
                        </p>
                        
                        <div class="book-formats">
                            <span class="format-badge">PDF</span>
                            <span class="format-badge">EPUB</span>
                        </div>
                        
                        <div class="book-actions">
                            <button class="btn-download" onclick="window.open('myowndoc/ebook1.pdf', '_blank')">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M10 3v10m0 0l-4-4m4 4l4-4M3 17h14" stroke-linecap="round"/>
                                </svg>
                                <span>Descargar PDF</span>
                            </button>
                            <button class="btn-download btn-download-secondary" onclick="window.open('myowndoc/ebook1.epub', '_blank')">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M10 3v10m0 0l-4-4m4 4l4-4M3 17h14" stroke-linecap="round"/>
                                </svg>
                                <span>Descargar EPUB</span>
                            </button>
                        </div>
                    </div>
                </article>
                
                <!-- Book 2: Tu Metabolismo No Está Roto -->
                <article class="book-card">
                    <div class="book-cover-wrapper">
                        <div class="book-cover">
                            <img src="myowndoc/ebook2.png" alt="Tu Metabolismo No Está Roto - Portada" class="book-cover-image">
                        </div>
                        <div class="book-glow"></div>
                    </div>
                    
                    <div class="book-content">
                        <h3 class="book-title">Tu Metabolismo No Está Roto</h3>
                        <p class="book-author">Dra. Andrea Katerji</p>
                        <p class="book-description">
                            Entiende cómo funciona realmente tu metabolismo y recupera tu salud metabólica.
                        </p>
                        
                        <div class="book-formats">
                            <span class="format-badge">PDF</span>
                            <span class="format-badge">EPUB</span>
                        </div>
                        
                        <div class="book-actions">
                            <button class="btn-download" onclick="window.open('myowndoc/ebook2.pdf', '_blank')">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M10 3v10m0 0l-4-4m4 4l4-4M3 17h14" stroke-linecap="round"/>
                                </svg>
                                <span>Descargar PDF</span>
                            </button>
                            <button class="btn-download btn-download-secondary" onclick="window.open('myowndoc/ebook2.epub', '_blank')">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M10 3v10m0 0l-4-4m4 4l4-4M3 17h14" stroke-linecap="round"/>
                                </svg>
                                <span>Descargar EPUB</span>
                            </button>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="blog-grid-section" id="articulos">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Artículos de Medicina Funcional</h2>
                <p class="section-subtitle">Lecturas clínicas, humanas y accionables para transformar tu salud desde la raíz</p>
            </div>

            <div class="blog-grid">
                <article class="blog-card" data-article="periodo" id="salud-hormonal">
                    <div class="card-content">
                        <div class="card-category" style="background: linear-gradient(135deg, #481F71, #6EC6D2)">Salud Hormonal</div>
                        <h3 class="card-title">Tu periodo no es el problema. Tu cuerpo está mandando una señal de auxilio.</h3>
                        <p class="card-excerpt">Dolor, coágulos, irregularidad y cansancio: entender tu ciclo es entender tu salud completa.</p>
                        <button class="btn-read-article" onclick="openModal('periodo')">
                            <span>Leer artículo</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 8h10m0 0l-3-3m3 3l-3 3" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </article>

                <article class="blog-card" data-article="cansancio">
                    <div class="card-content">
                        <div class="card-category">Fatiga Crónica</div>
                        <h3 class="card-title">Llevás 10 años cansada y te dijeron que es estrés.</h3>
                        <p class="card-excerpt">Cuando el agotamiento no mejora con descanso, hay una raíz biológica que merece ser investigada.</p>
                        <button class="btn-read-article" onclick="openModal('cansancio')">
                            <span>Leer artículo</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 8h10m0 0l-3-3m3 3l-3 3" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </article>

                <article class="blog-card" data-article="cortisol">
                    <div class="card-content">
                        <div class="card-category" style="background: linear-gradient(135deg, #6EC6D2, #A3C9A8)">Manejo del Estrés</div>
                        <h3 class="card-title">El cortisol no es tu enemigo. Es que nunca aprendiste a manejarlo.</h3>
                        <p class="card-excerpt">No se trata de “bajar” cortisol, sino de recuperar su ritmo natural para dormir, pensar y rendir mejor.</p>
                        <button class="btn-read-article" onclick="openModal('cortisol')">
                            <span>Leer artículo</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 8h10m0 0l-3-3m3 3l-3 3" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </article>

                <article class="blog-card" data-article="memoria" id="salud-cerebral">
                    <div class="card-content">
                        <div class="card-category" style="background: linear-gradient(135deg, #481F71, #A3C9A8)">Salud Cerebral</div>
                        <h3 class="card-title">No es que tenés mala memoria. Es que tu cerebro está inflamado.</h3>
                        <p class="card-excerpt">Niebla mental, olvidos y baja concentración pueden ser señales de neuroinflamación silenciosa.</p>
                        <button class="btn-read-article" onclick="openModal('memoria')">
                            <span>Leer artículo</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 8h10m0 0l-3-3m3 3l-3 3" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </article>

                <article class="blog-card" data-article="peso" id="metabolismo">
                    <div class="card-content">
                        <div class="card-category" style="background: linear-gradient(135deg, #3A6B73, #481F71)">Metabolismo</div>
                        <h3 class="card-title">Por qué engordás aunque comas poco y te mates en el gym.</h3>
                        <p class="card-excerpt">El peso no es una ecuación de voluntad: hormonas, sueño y estrés cambian todo el tablero.</p>
                        <button class="btn-read-article" onclick="openModal('peso')">
                            <span>Leer artículo</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 8h10m0 0l-3-3m3 3l-3 3" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </article>

                <article class="blog-card" data-article="intestino">
                    <div class="card-content">
                        <div class="card-category" style="background: linear-gradient(135deg, #D1B280, #6EC6D2)">Eje Intestino-Cerebro</div>
                        <h3 class="card-title">Tu intestino y tus hormonas hablan entre sí. Y probablemente no se están llevando bien.</h3>
                        <p class="card-excerpt">Disbiosis, hinchazón y tránsito irregular también pueden explicar fatiga, ansiedad y desbalance hormonal.</p>
                        <button class="btn-read-article" onclick="openModal('intestino')">
                            <span>Leer artículo</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 8h10m0 0l-3-3m3 3l-3 3" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </article>

                <article class="blog-card" data-article="atleta">
                    <div class="card-content">
                        <div class="card-category" style="background: linear-gradient(135deg, #481F71, #6EC6D2)">Ejercicio & Hormonas</div>
                        <h3 class="card-title">El síndrome de la atleta femenina: cuando más ejercicio te cuesta más caro.</h3>
                        <p class="card-excerpt">Entrenar más no siempre es entrenar mejor: recuperar tu ciclo también es un marcador de rendimiento.</p>
                        <button class="btn-read-article" onclick="openModal('atleta')">
                            <span>Leer artículo</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 8h10m0 0l-3-3m3 3l-3 3" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </article>

                <article class="blog-card" data-article="tiroides">
                    <div class="card-content">
                        <div class="card-category" style="background: linear-gradient(135deg, #3A6B73, #A3C9A8)">Salud Tiroidea</div>
                        <h3 class="card-title">Tiroides "normal" no significa tiroides sana.</h3>
                        <p class="card-excerpt">TSH “normal” no descarta síntomas: la evaluación tiroidea completa va mucho más allá de un valor.</p>
                        <button class="btn-read-article" onclick="openModal('tiroides')">
                            <span>Leer artículo</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 8h10m0 0l-3-3m3 3l-3 3" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </article>

                <article class="blog-card" data-article="almidon" id="nutricion-funcional">
                    <div class="card-content">
                        <div class="card-category" style="background: linear-gradient(135deg, #6EC6D2, #D1B280)">Nutrición Funcional</div>
                        <h3 class="card-title">Lo que el almidón resistente hace por tus hormonas y nadie te está enseñando a comer.</h3>
                        <p class="card-excerpt">Una fibra estratégica que mejora microbiota, glucosa y sensibilidad a la insulina sin dietas extremas.</p>
                        <button class="btn-read-article" onclick="openModal('almidon')">
                            <span>Leer artículo</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 8h10m0 0l-3-3m3 3l-3 3" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </article>

                <article class="blog-card" data-article="medicina-funcional">
                    <div class="card-content">
                        <div class="card-category" style="background: linear-gradient(135deg, #481F71, #D1B280)">Medicina Funcional</div>
                        <h3 class="card-title">Medicina Funcional no es medicina alternativa. Es medicina con evidencia que va más profundo.</h3>
                        <p class="card-excerpt">No compite con la medicina tradicional: la completa, conectando síntomas, contexto y causa raíz.</p>
                        <button class="btn-read-article" onclick="openModal('medicina-funcional')">
                            <span>Leer artículo</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 8h10m0 0l-3-3m3 3l-3 3" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </article>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <!-- Modal -->
    <div class="modal-overlay" id="modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal()">×</button>
            <div class="modal-category" id="modal-category"></div>
            <h1 class="modal-title" id="modal-title"></h1>
            <div class="modal-text" id="modal-text"></div>
        </div>
    </div>

    <footer class="blog-footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3 class="footer-title">Palabra Viva</h3>
                    <p class="footer-text">
                        Blog de medicina funcional donde la ciencia y el alma se encuentran para transformar tu salud.
                    </p>
                    <div class="footer-social">
                        <a href="https://instagram.com/myowndoc" class="social-link" aria-label="Instagram">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="https://youtube.com/@myowndoc" class="social-link" aria-label="YouTube">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.5 7.2a4 4 0 0 0-2.8-2.9C18.7 3.8 12 3.8 12 3.8s-6.7 0-8.7.5A4 4 0 0 0 .5 7.2 41 41 0 0 0 0 12a41 41 0 0 0 .5 4.8 4 4 0 0 0 2.8 2.9c2 .5 8.7.5 8.7.5s6.7 0 8.7-.5a4 4 0 0 0 2.8-2.9c.3-1.6.5-3.2.5-4.8s-.2-3.2-.5-4.8zM9.8 15.2V8.8L15.5 12l-5.7 3.2z"/>
                            </svg>
                        </a>
                        <a href="https://tiktok.com/@medicinasinanestesia" class="social-link" aria-label="TikTok">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M21 8.5c-2.4 0-4.6-1.3-5.8-3.3V17a5.75 5.75 0 1 1-5.8-5.75c.36 0 .7.04 1.03.1v2.79a2.95 2.95 0 1 0 2.95 2.95V1h2.65c.33 2.4 2.2 4.4 4.6 4.87V8.5z"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/573106640387" class="social-link" aria-label="WhatsApp">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="footer-col">
                    <h4 class="footer-heading">Explora</h4>
                    <ul class="footer-links">
                        <li><a href="index.php">Portal Principal</a></li>
                        <li><a href="myowndoc.php">MyOwnDoc</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h4 class="footer-heading">Categorías</h4>
                    <ul class="footer-links">
                        <li><a href="#salud-hormonal">Salud Hormonal</a></li>
                        <li><a href="#metabolismo">Metabolismo</a></li>
                        <li><a href="#salud-cerebral">Salud Cerebral</a></li>
                        <li><a href="#nutricion-funcional">Nutrición Funcional</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h4 class="footer-heading">Recursos</h4>
                    <ul class="footer-links">
                        <li><a href="#libros">Libros Digitales</a></li>
                        <li><a href="mailto:myowndoc@andreakaterji.com">myowndoc@andreakaterji.com</a></li>
                        <li><a href="mailto:citas@andreakaterji.com">citas@andreakaterji.com</a></li>
                        <li><a href="https://wa.me/573106640387">WhatsApp</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Andrea Katerji. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <style>
        /* Modal Styles - Versión Simple que Funciona */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }
        
        .modal-overlay.active {
            display: flex;
        }
        
        .modal-content {
            background: white;
            border-radius: 20px;
            max-width: 800px;
            max-height: 90vh;
            width: 90%;
            overflow-y: auto;
            position: relative;
            padding: 40px;
        }
        
        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #481F71;
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .modal-close:hover {
            background: #6EC6D2;
            transform: rotate(90deg);
        }
        
        .modal-category {
            background: linear-gradient(135deg, #481F71, #6EC6D2);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            display: inline-block;
            margin-bottom: 20px;
        }
        
        .modal-title {
            font-size: 2rem;
            color: #481F71;
            margin-bottom: 30px;
            line-height: 1.3;
            font-family: 'Georgia', serif;
        }
        
        .modal-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
        }
        
        .modal-text p {
            margin-bottom: 20px;
        }
        
        .modal-text h2 {
            font-size: 1.5rem;
            color: #481F71;
            margin: 30px 0 15px;
            font-family: 'Georgia', serif;
        }
        
        .modal-text blockquote {
            border-left: 4px solid #481F71;
            padding-left: 20px;
            margin: 20px 0;
            font-style: italic;
            color: #666;
        }
        
        .modal-text strong {
            background: linear-gradient(135deg, rgba(72, 31, 113, 0.1), rgba(110, 198, 210, 0.1));
            padding: 2px 6px;
            border-radius: 3px;
        }
        
        @media (max-width: 768px) {
            .modal-content {
                width: 95%;
                padding: 20px;
            }
            
            .modal-title {
                font-size: 1.5rem;
            }
            
            .modal-text {
                font-size: 1rem;
            }
        }
        
        /* Navbar Elegante y Literario */
        .blog-nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(72, 31, 113, 0.1);
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 80px;
        }
        
        .nav-logo {
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            transition: all 0.3s ease;
        }
        
        .nav-logo:hover {
            transform: translateY(-2px);
        }
        
        .logo-text {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.6rem;
            font-weight: 700;
            color: #481F71;
            line-height: 1.2;
            text-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }
        
        .logo-subtitle {
            font-family: 'Inter', sans-serif;
            font-size: 0.75rem;
            font-weight: 500;
            color: #6EC6D2;
            opacity: 0.9;
            margin-top: 3px;
            text-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }
        
        .nav-links {
            display: flex;
            align-items: center;
            gap: 40px;
        }
        
        .nav-link {
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px 0;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #481F71, #6EC6D2);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::before {
            width: 100%;
        }
        
        .nav-link:hover {
            transform: translateY(-2px);
        }
        
        .nav-link-text {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.3rem;
            font-weight: 600;
            color: #481F71;
            line-height: 1.2;
            text-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }
        
        .nav-link-subtitle {
            font-family: 'Inter', sans-serif;
            font-size: 0.8rem;
            font-weight: 500;
            color: #6EC6D2;
            opacity: 0.9;
            line-height: 1.2;
            margin-top: 3px;
            text-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }
        
        .nav-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
        }
        
        .nav-toggle span {
            display: block;
            width: 25px;
            height: 2px;
            background: #481F71;
            margin: 5px 0;
            transition: all 0.3s ease;
        }
        
        .nav-toggle:hover span {
            background: #6EC6D2;
        }
        
        /* Responsive Navbar */
        @media (max-width: 768px) {
            .nav-container {
                padding: 0 20px;
                height: 70px;
            }
            
            .logo-text {
                font-size: 1.4rem;
            }
            
            .logo-subtitle {
                font-size: 0.7rem;
            }
            
            .nav-links {
                position: fixed;
                top: 70px;
                left: 0;
                width: 100%;
                background: rgba(255, 255, 255, 0.98);
                backdrop-filter: blur(20px);
                flex-direction: column;
                padding: 30px 20px;
                gap: 20px;
                transform: translateY(-100%);
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                border-bottom: 1px solid rgba(72, 31, 113, 0.1);
            }
            
            .nav-links.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }
            
            .nav-link {
                width: 100%;
                text-align: center;
                padding: 15px 0;
            }
            
            .nav-toggle {
                display: block;
            }
            
            .nav-toggle.active span:nth-child(1) {
                transform: rotate(45deg) translate(5px, 5px);
            }
            
            .nav-toggle.active span:nth-child(2) {
                opacity: 0;
            }
            
            .nav-toggle.active span:nth-child(3) {
                transform: rotate(-45deg) translate(7px, -6px);
            }
        }
        
        /* Hero Section Mejorado */
        .blog-hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-top: 80px;
        }
        
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 50%, #481F71 100%);
            z-index: 1;
        }
        
        .hero-gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 80%, rgba(110, 198, 210, 0.3) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(72, 31, 113, 0.4) 0%, transparent 50%),
                        radial-gradient(circle at 40% 40%, rgba(72, 31, 113, 0.2) 0%, transparent 50%);
            animation: gradientShift 15s ease-in-out infinite;
        }
        
        @keyframes gradientShift {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        
        .hero-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: linear-gradient(135deg, #481F71, #6EC6D2);
            border-radius: 50%;
            opacity: 0.3;
            animation: float 20s infinite linear;
        }
        
        .particle:nth-child(1) { top: 10%; left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { top: 20%; left: 80%; animation-delay: 2s; }
        .particle:nth-child(3) { top: 60%; left: 20%; animation-delay: 4s; }
        .particle:nth-child(4) { top: 80%; left: 70%; animation-delay: 6s; }
        .particle:nth-child(5) { top: 30%; left: 50%; animation-delay: 8s; }
        .particle:nth-child(6) { top: 70%; left: 30%; animation-delay: 10s; }
        .particle:nth-child(7) { top: 40%; left: 60%; animation-delay: 12s; }
        
        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); opacity: 0; }
            10% { opacity: 0.3; }
            90% { opacity: 0.3; }
            100% { transform: translateY(-100vh) rotate(360deg); opacity: 0; }
        }
        
        .hero-container {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            padding: 0 30px;
            width: 100%;
        }
        
        .hero-content {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 8px 20px;
            border-radius: 30px;
            margin-bottom: 30px;
            border: 1px solid rgba(72, 31, 113, 0.1);
            animation: fadeInUp 1s ease-out;
        }
        
        .badge-text {
            font-family: 'Inter', sans-serif;
            font-size: 0.85rem;
            font-weight: 500;
            color: #481F71;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }
        
        .badge-icon {
            width: 8px;
            height: 8px;
            background: linear-gradient(135deg, #481F71, #6EC6D2);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.2); opacity: 0.7; }
        }
        
        .hero-title {
            margin-bottom: 40px;
            animation: fadeInUp 1s ease-out 0.2s both;
        }
        
        .title-main {
            display: block;
            font-family: 'Cormorant Garamond', serif;
            font-size: 4rem;
            font-weight: 700;
            color: #481F71;
            line-height: 1.1;
            letter-spacing: -0.02em;
            margin-bottom: 10px;
        }
        
        .title-subtitle {
            display: block;
            font-family: 'Inter', sans-serif;
            font-size: 1.2rem;
            font-weight: 600;
            color: #2f4f5a;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            background: rgba(255, 255, 255, 0.82);
            border: 1px solid rgba(47, 79, 90, 0.22);
            text-shadow: 0 1px 2px rgba(255, 255, 255, 0.75);
            border-radius: 999px;
            padding: 0.5rem 1rem;
            width: fit-content;
            margin: 0.25rem auto 0;
        }

        .featured-books-section .section-label {
            display: inline-block;
            padding: 0.45rem 0.95rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.88);
            border: 1px solid rgba(72, 31, 113, 0.2);
            color: #3d285f;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            text-shadow: 0 1px 2px rgba(255, 255, 255, 0.7);
        }
        
        .hero-description {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.3rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 40px;
            animation: fadeInUp 1s ease-out 0.4s both;
        }
        
        .hero-quote {
            position: relative;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            margin-bottom: 50px;
            border: 1px solid rgba(72, 31, 113, 0.1);
            animation: fadeInUp 1s ease-out 0.6s both;
        }
        
        .quote-mark {
            position: absolute;
            top: 20px;
            left: 20px;
            font-family: 'Georgia', serif;
            font-size: 4rem;
            color: rgba(72, 31, 113, 0.1);
            line-height: 1;
        }
        
        .quote-text {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.2rem;
            line-height: 1.6;
            color: #481F71;
            font-style: italic;
            margin-bottom: 20px;
        }
        
        .quote-author {
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            font-weight: 500;
            color: #6EC6D2;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }
        
        .hero-author {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            animation: fadeInUp 1s ease-out 0.8s both;
        }
        
        .author-avatar {
            position: relative;
        }
        
        .avatar-placeholder {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #481F71, #6EC6D2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(72, 31, 113, 0.2);
        }
        
        .avatar-initials {
            font-family: 'Inter', sans-serif;
            font-size: 1.2rem;
            font-weight: 600;
            color: white;
            text-transform: uppercase;
        }
        
        .author-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        
        .author-name {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.2rem;
            font-weight: 600;
            color: #481F71;
            margin-bottom: 5px;
        }
        
        .author-title {
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 10px;
        }
        
        .author-social {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .social-link {
            display: flex;
            align-items: center;
            gap: 6px;
            font-family: 'Inter', sans-serif;
            font-size: 0.85rem;
            color: #6EC6D2;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            color: #481F71;
            transform: translateY(-2px);
        }
        
        .scroll-indicator {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            animation: fadeInUp 1s ease-out 1s both, bounce 2s infinite 1.5s;
            z-index: 2;
        }
        
        .scroll-text {
            font-family: 'Inter', sans-serif;
            font-size: 0.8rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }
        
        .scroll-arrow {
            width: 2px;
            height: 20px;
            background: linear-gradient(to bottom, #481F71, transparent);
            position: relative;
        }
        
        .scroll-arrow::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 8px;
            height: 8px;
            border-right: 2px solid #481F71;
            border-bottom: 2px solid #481F71;
            transform: translateX(-50%) rotate(45deg);
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
            40% { transform: translateX(-50%) translateY(-10px); }
            60% { transform: translateX(-50%) translateY(-5px); }
        }
        
        /* Responsive Hero */
        @media (max-width: 768px) {
            .blog-hero {
                margin-top: 70px;
                min-height: 90vh;
                padding: 40px 0;
            }
            
            .hero-container {
                padding: 0 20px;
            }
            
            .title-main {
                font-size: 2.5rem;
            }
            
            .title-subtitle {
                font-size: 1rem;
            }
            
            .hero-description {
                font-size: 1.1rem;
            }
            
            .hero-quote {
                padding: 30px 20px;
            }
            
            .quote-text {
                font-size: 1.1rem;
            }
            
            .hero-author {
                flex-direction: column;
                text-align: center;
            }
            
            .author-info {
                align-items: center;
            }
        }
        
        /* Blog Grid Section - Estilos Elegantes */
        .blog-grid-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 50%, rgba(110, 198, 210, 0.05) 100%);
            position: relative;
            overflow: hidden;
        }
        
        .blog-grid-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 30% 70%, rgba(72, 31, 113, 0.03) 0%, transparent 50%),
                        radial-gradient(circle at 70% 30%, rgba(110, 198, 210, 0.03) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 80px;
            position: relative;
            z-index: 2;
        }
        
        .section-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 3.5rem;
            font-weight: 700;
            color: #481F71;
            line-height: 1.2;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(135deg, #481F71, #6EC6D2);
            border-radius: 2px;
        }
        
        .section-subtitle {
            font-family: 'Inter', sans-serif;
            font-size: 1.2rem;
            font-weight: 400;
            color: #666;
            line-height: 1.6;
            max-width: 600px;
            margin: 30px auto 0;
            opacity: 0.9;
        }
        
        /* Blog Grid Layout */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        
        /* Blog Cards - Diseño Original sin card-image */
        .blog-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(248, 249, 250, 0.9));
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(72, 31, 113, 0.12);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            border: 1px solid rgba(72, 31, 113, 0.08);
            backdrop-filter: blur(10px);
        }
        
        .blog-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 70px rgba(72, 31, 113, 0.25);
            border-color: rgba(72, 31, 113, 0.15);
        }
        
        .blog-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #481F71, #6EC6D2);
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }
        
        .blog-card:hover::before {
            opacity: 1;
        }
        
        .card-content {
            padding: 35px 30px 30px;
            position: relative;
            z-index: 2;
        }
        
        .card-category {
            display: inline-block;
            background: linear-gradient(135deg, #481F71, #6EC6D2);
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            font-family: 'Inter', sans-serif;
            font-size: 0.8rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 15px;
        }
        
        .card-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.5rem;
            font-weight: 600;
            color: #481F71;
            line-height: 1.3;
            margin-bottom: 15px;
        }
        
        .card-excerpt {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 25px;
        }
        
        .btn-read-article {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #481F71, #6EC6D2);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 25px;
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .btn-read-article:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(72, 31, 113, 0.3);
        }
        
        .btn-read-article svg {
            transition: transform 0.3s ease;
        }
        
        .btn-read-article:hover svg {
            transform: translateX(3px);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .blog-grid-section {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 2.5rem;
            }
            
            .section-subtitle {
                font-size: 1.1rem;
                padding: 0 20px;
            }
            
            .blog-grid {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 0 20px;
            }
            
            .card-content {
                padding: 25px;
            }
            
            .card-title {
                font-size: 1.3rem;
            }
        }
    </style>
    
    <script>
        console.log('MODAL TEST: Iniciando...');
        
        const articles = {
            periodo: {
                category: 'Salud Hormonal',
                title: 'Tu periodo no es el problema. Tu cuerpo está mandando una señal de auxilio.',
                content: `
                    <p>Cada mes, millones de mujeres se toman un ibuprofeno, aprietan los dientes y esperan que pase. El dolor, los coágulos, el humor que cambia tres días antes, el hinchazón que parece inexplicable. Y lo que les dicen <strong>si es que les dicen algo</strong> es que eso es normal. Que las mujeres duelen. Que así es el periodo.</p>
                    
                    <p><strong>No. No es normal.</strong> Doloroso no significa normal. Y esta diferencia importa más de lo que creés.</p>
                    
                    <h2>¿Qué le está pasando realmente a tu cuerpo?</h2>
                    
                    <p>El ciclo menstrual es, en esencia, una conversación entre tu cerebro, tus ovarios y tu útero. Cuando esa conversación fluye bien, el periodo llega, hace lo que tiene que hacer, y se va en cuatro o cinco días sin mayor drama. Pero cuando hay interferencia en esa conversación <strong>y hoy hay muchas fuentes de interferencia</strong> el resultado es lo que la mayoría de las mujeres viven como "normal": dolor, irregularidad, síndrome premenstrual severo, coágulos.</p>
                    
                    <p>El principal culpable en la mayoría de los casos es la <strong>dominancia estrogénica</strong>. Este término suena técnico pero describe algo muy concreto: una situación en la que el estrógeno está elevado o actúa de manera excesiva en relación con la progesterona. El estrógeno, cuando está en balance, es una hormona poderosa y necesaria. Es la que construye el endometrio, la que nos da energía en la primera mitad del ciclo, la que contribuye a la salud cardiovascular y ósea. Pero cuando domina sin oposición, se convierte en el motor de inflamación, dolor y proliferación celular que muchas mujeres experimentan mes a mes.</p>
                    
                    <blockquote>
                        Tu cuerpo no te está fallando. Tu cuerpo está respondiendo a un ambiente que lo sobrepasa.
                    </blockquote>
                    
                    <h2>¿Qué se puede hacer?</h2>
                    
                    <p>La respuesta convencional a un periodo doloroso suele ser la misma: anticonceptivos orales para "regular" el ciclo, antiinflamatorios para el dolor, y si hay endometriosis, eventualmente cirugía. Nada de esto está mal en el contexto correcto. Pero ninguno de estos abordajes le pregunta al cuerpo qué está pasando.</p>
                    
                    <p>La medicina funcional hace otra cosa: mira al sistema completo. Evalúa el estroboloma con un estudio de microbioma. Mide el metabolismo del estrógeno con un análisis de orina seco (DUTCH test). Evalúa la carga hepática con marcadores específicos. Mide el cortisol salival a lo largo del día para ver el ritmo del eje HPA. Y con esa información, construye un plan que va a la raíz.</p>
                    
                    <p><strong>No es magia. Es medicina que entiende que el cuerpo es un sistema conectado, y que no podés arreglar una parte sin entender el todo.</strong></p>
                `
            },
            cansancio: {
                category: 'Fatiga Crónica',
                title: 'Llevás 10 años cansada y te dijeron que es estrés.',
                content: `
                    <p>Hay un tipo de agotamiento que no se resuelve con vacaciones. Que no mejora con dormir más el fin de semana. Que no responde al café, al ejercicio ni a la sugerencia bien intencionada de "tomártelo con calma". Es un cansancio que vive en el hueso. Que te hace abrir los ojos por la mañana sintiéndote igual que cuando te acostaste. Que te convence, con el tiempo, de que simplemente sos así.</p>
                    
                    <p><strong>No sos así. Pero alguien te convenció de que sí.</strong></p>
                    
                    <h2>Por qué el cansancio crónico femenino es sistemáticamente ignorado</h2>
                    
                    <p>En la consulta médica convencional, el agotamiento crónico en mujeres tiene dos destinos posibles. O se diagnostica como depresión y se prescribe un antidepresivo. O se atribuye al estrés, al ritmo de vida, a "hacer demasiado", y la mujer se va con una palmada en el hombro y la sugerencia de meditar.</p>
                    
                    <p>Ambas respuestas ignoran la biología femenina. El cansancio crónico en mujeres rara vez es solo "estrés". Es casi siempre una combinación de disfunciones sistémicas que la medicina tradicional no está entrenada a buscar: inflamación crónica de bajo grado, resistencia a la insulina silenciosa, disfunción del eje HPA, deficiencias nutricionales específicas, y desequilibrios hormonales que no aparecen en un análisis de rutina.</p>
                    
                    <blockquote>
                        El cansancio que sentís no es tu culpa. Es una señal de que algo en tu sistema necesita atención.
                    </blockquote>
                    
                    <h2>La inflamación crónica: el fuego invisible</h2>
                    
                    <p>La inflamación aguda es visible: te cortás, se hincha, duele, se cura. La inflamación crónica de bajo grado es silenciosa. No duele. No se ve. Pero consume energía constantemente. Es como tener un motor corriendo en segundo plano todo el tiempo, drenando tus reservas.</p>
                    
                    <h2>Qué podés hacer hoy</h2>
                    
                    <p>La solución no es un antidepresivo ni "tomarte las cosas con más calma". La solución es entender qué está pasando realmente en tu cuerpo y abordarlo desde la raíz.</p>
                `
            },
            cortisol: {
                category: 'Manejo del Estrés',
                title: 'El cortisol no es tu enemigo. Es que nunca aprendiste a manejarlo.',
                content: `
                    <p>Si hay una hormona que recibe más críticas que el cortisol, no se me ocurre cuál es. "Tengo el cortisol por las nubes", "el cortisol me está matando", "hay que bajar el cortisol". Se habla de él como si fuera un intruso en el cuerpo, algo que hay que eliminar. Ese es el primer error.</p>
                    
                    <p><strong>El cortisol es esencial. Sin cortisol, morirías.</strong> El problema no es que exista. El problema es cuándo, cuánto y en qué ritmo aparece.</p>
                    
                    <h2>El ritmo circadiano del cortisol</h2>
                    
                    <p>El cortisol tiene un ritmo diario preciso y elegante. Debería estar en su pico máximo aproximadamente 30-45 minutos después de despertar y luego descender de manera gradual a lo largo del día, llegando a su nivel más bajo en la noche. Este ritmo no es opcional. Es esencial para que decenas de procesos biológicos funcionen correctamente.</p>
                    
                    <p>Cuando el ritmo se invierte <strong>bajo en la mañana, alto en la noche</strong> todo el sistema falla. La persona no puede despertar, arrastra el día con niebla mental, y cuando finalmente llega la noche y debería dormir, está activada, rumiando, incapaz de apagar. Eso no es "ser noctámbula". Es un eje HPA disfuncional.</p>
                    
                    <blockquote>
                        El problema no es que tengas cortisol. El problema es cuándo lo tenés y en qué cantidad.
                    </blockquote>
                    
                    <h2>Qué se puede hacer</h2>
                    
                    <p>Manejar el cortisol no significa eliminarlo. Significa respetar su ritmo. Algunas de las intervenciones más respaldadas por evidencia incluyen: exposición a luz solar en los primeros 30 minutos después de despertar para anclar el ritmo circadiano, entrenamiento físico dosificado con períodos de recuperación genuinos, adaptógenos como la ashwagandha o la rhodiola con evidencia de modulación del eje HPA, magnesio en la noche para facilitar el descenso del cortisol y mejorar el sueño, y reducción de estresores digitales en las horas nocturnas.</p>
                    
                    <p>Pero sobre todo: aprender a reconocer que el descanso no es un lujo. Es una necesidad fisiológica sin la cual el eje HPA no puede regularse. En nuestra cultura, eso sigue siendo radical.</p>
                `
            },
            memoria: {
                category: 'Salud Cerebral',
                title: 'No es que tenés mala memoria. Es que tu cerebro está inflamado.',
                content: `
                    <p>Se llama brain fog, niebla mental, o simplemente "no soy la misma de antes". La incapacidad de terminar un pensamiento, de encontrar la palabra justa, de concentrarse más de veinte minutos, de recordar qué ibas a buscar a la cocina. Y lo que te dicen <em>cuando te lo dicen</em> es que es la edad, el estrés, la menopausia, la maternidad. Como si perder claridad mental fuera simplemente parte del paquete de ser mujer adulta.</p>
                    
                    <p>No lo es. Y hay tres causas raíz que la medicina convencional raramente une bajo el mismo diagnóstico: inflamación sistémica de bajo grado, intestino permeable, y resistencia a la insulina silenciosa. Las tres se retroalimentan. Las tres se pueden medir. Las tres responden al tratamiento.</p>
                    
                    <h2>Inflamación crónica: el fuego que nadie ve</h2>
                    
                    <p>La inflamación aguda es visible y tiene sentido: te cortás un dedo, se hincha, duele, se cura. La inflamación crónica de bajo grado es lo opuesto: es silenciosa, persistente, y no produce síntomas llamativos. Lo que produce es un deterioro gradual de múltiples sistemas, incluyendo el cerebro.</p>
                    
                    <p>El cerebro tiene su propio sistema inmune, compuesto por células llamadas microglía. Cuando hay señales inflamatorias circulando de manera constante <em>citoquinas proinflamatorias como IL-6, IL-1ß, TNF-±</em>, la microglía se activa. Y una microglía crónicamente activada interfiere con la transmisión neuronal, reduce la neuroplasticidad, altera la producción de neurotransmisores y produce exactamente lo que se siente como niebla mental.</p>
                    
                    <p>Las fuentes más comunes de inflamación crónica de bajo grado en mujeres son: alimentación ultraprocesada, exceso de azúcar y grasas trans, sobrepeso visceral, estrés psicológico sostenido, disrupción del sueño, toxinas ambientales, y el intestino permeable <em>del que hablamos a continuación</em>.</p>
                    
                    <blockquote>La niebla mental no es un signo de envejecimiento. Es una respuesta inflamatoria que tiene origen y tiene solución.</blockquote>
                    
                    <h2>Intestino permeable: la puerta que no debería estar abierta</h2>
                    
                    <p>El intestino tiene una barrera epitelial cuya función es selectiva: dejar pasar nutrientes y bloquear el paso de bacterias, toxinas y partículas no digeridas. Cuando esa barrera se daña <em>por antibióticos, alcohol, estrés, gluten en personas susceptibles, o simplemente una dieta baja en fibra y alta en ultraprocesados</em>, se produce lo que se llama hiperpermeabilidad intestinal o "leaky gut".</p>
                    
                    <p>Cuando la barrera es permeable, las lipopolisacáridos <em>fragmentos de la pared de bacterias gram-negativas</em> pasan al torrente sanguíneo. El sistema inmune los reconoce como amenaza y monta una respuesta inflamatoria. Esa inflamación cruza la barrera hematoencefálica <em>que también es permeable cuando hay inflamación sistémica</em> y llega al cerebro.</p>
                    
                    <p>El resultado es neuroinflamación. Y la neuroinflamación produce exactamente los síntomas que la mayoría de las mujeres atribuyen a "la edad": dificultad de concentración, fatiga mental, cambios de humor, pérdida de memoria de corto plazo.</p>
                    
                    <h2>Resistencia a la insulina silenciosa: el cerebro también necesita glucosa</h2>
                    
                    <p>El cerebro consume aproximadamente el 20% de la glucosa total del cuerpo, a pesar de representar solo el 2% del peso corporal. Para que la glucosa entre en las neuronas, necesita señalización de insulina. Cuando hay resistencia a la insulina <em>incluso leve, incluso prediabética, incluso "normal" en los análisis convencionales</em>, las neuronas empiezan a estar sub-alimentadas.</p>
                    
                    <p>La resistencia a la insulina cerebral ha sido llamada por algunos investigadores como "diabetes tipo 3", y su relación con el deterioro cognitivo es uno de los campos de investigación más activos en neurología. Pero no necesitás tener diabetes para que tu cerebro esté recibiendo menos glucosa de la que necesita. El proceso empieza años antes del diagnóstico.</p>
                    
                    <p>Los marcadores que hay que medir no son solo la glucosa en ayunas: son la insulina en ayunas, la hemoglobina glicosilada (HbA1c), el índice HOMA-IR. Esos son los indicadores reales de qué tan bien está manejando tu cuerpo el azúcar.</p>
                    
                    <h2>Qué podés hacer hoy</h2>
                    
                    <p>Reducir la inflamación sistémica, reparar la barrera intestinal y mejorar la sensibilidad a la insulina son objetivos concretos y alcanzables. No requieren medicamentos de por vida ni procedimientos invasivos. Requieren información y consistencia.</p>
                    
                    <p>Algunos puntos de partida respaldados por evidencia: reducir el azúcar añadida y los ultraprocesados, incorporar alimentos ricos en polifenoles <em>frutas oscuras, cúrcuma, aceite de oliva extra virgen</em>, consumir suficiente fibra para alimentar el microbioma, incorporar omega-3 de fuentes de calidad, mejorar el sueño de manera prioritaria, y considerar suplementación de L-glutamina para la barrera intestinal, en el contexto de una evaluación individualizada.</p>
                    
                    <blockquote>Tu cerebro también necesita una estrategia antiinflamatoria, no solo fuerza de voluntad.</blockquote>
                    
                    <p>Regular glucosa, reparar intestino, mejorar sueño profundo y entrenar pausas cognitivas puede devolver claridad en pocas semanas cuando el plan está bien diseñado. La clave está en abordar las tres raíces simultáneamente, porque están interconectadas y se refuerzan mutuamente.</p>
                `
            },
            peso: {
                category: 'Metabolismo',
                title: 'Por qué engordás aunque comas poco y te mates en el gym.',
                content: `
                    <p>Si alguna vez te pesaste después de una semana de comer "perfecto" y entrenar todos los días y viste que la balanza no se movió <em>o peor, que subió</em>, sabés exactamente de qué estoy hablando. Esa sensación de traición. De que tu cuerpo juega para el otro equipo.</p>
                    
                    <p>No es tu imaginación. No es falta de voluntad. Y definitivamente no se resuelve comiendo menos y moverte más. Lo que está pasando tiene nombre, tiene causa y tiene solución. Pero ninguna de esas cosas vas a encontrarla en una app de calorías ni en el plan de entrenamiento de tu influencer de turno.</p>
                    
                    <h2>El modelo de calorías in-calorías out: por qué falla en mujeres</h2>
                    
                    <p>El modelo de balance calórico <em>si gastas más de lo que comes, bajás de peso</em> es una simplificación que ignora casi todo lo que sabemos sobre bioquímica humana. Sí, las calorías importan. No, no son lo único que importa.</p>
                    
                    <p>Lo que el modelo calórico no puede explicar es por qué dos personas que comen lo mismo y se mueven igual pierden cantidades diferentes de peso. Por qué hay mujeres que comen 1200 calorías y no bajan. Por qué algunas personas suben de peso en períodos de estrés aunque no cambien lo que comen. La respuesta está en las hormonas, el microbioma, el sistema nervioso y la biología única del cuerpo femenino.</p>
                    
                    <blockquote>El problema no es tu voluntad. El problema es que nadie te enseñó cómo funciona tu cuerpo realmente.</blockquote>
                    
                    <h2>GLUT-4 y resistencia a la insulina: el metabolismo que nadie te explicó</h2>
                    
                    <p>La insulina es la hormona que le dice a tus células que abran la puerta y dejen entrar la glucosa. El GLUT-4 es el transportador <em>la "puerta"</em> que hace posible ese ingreso, principalmente en músculo y tejido adiposo. Cuando la señalización de insulina funciona bien, la glucosa entra a las células, se usa como energía o se almacena en los músculos como glucógeno.</p>
                    
                    <p>Cuando hay resistencia a la insulina, la puerta no se abre bien. El cuerpo compensa produciendo más insulina. Y la insulina elevada cronicamente tiene un efecto claro: promueve el almacenamiento de grasa, especialmente visceral, e inhibe su liberación. Podés estar comiendo lo mismo que antes, pero si tu insulina basal está alta, tu cuerpo está en modo de almacenamiento, no de liberación.</p>
                    
                    <p>La buena noticia: el ejercicio de fuerza <em>específicamente la contracción muscular</em> activa el GLUT-4 de manera independiente a la insulina. Esto significa que el músculo puede tomar glucosa del torrente sanguíneo sin necesitar la señal insulínica. Por eso el entrenamiento de fuerza es una de las herramientas más poderosas para mejorar el metabolismo, mucho más que el cardio en zona de quema de grasa.</p>
                    
                    <h2>Cortisol alto: cuando el estrés te hace almacenar</h2>
                    
                    <p>El cortisol eleva la glucosa en sangre. Si esa glucosa no se usa <em>porque el estrés es mental, no físico</em>, el páncreas libera insulina para manejarla. La insulina promueve el almacenamiento de grasa visceral. Este ciclo, repetido miles de veces a lo largo de meses y años de estrés crónico, produce exactamente lo que muchas mujeres describen: peso acumulado en el abdomen que no responde al ejercicio ni a la dieta.</p>
                    
                    <p>Además, el cortisol elevado cronicamente interfiere con la función del tejido adiposo pardo <em>el que quema calorías para generar calor</em> y altera la leptina, la hormona de la saciedad. El resultado: menos quema basal, más hambre, más almacenamiento. Tu cuerpo está perfectamente adaptado para sobrevivir a una hambruna que nunca llega.</p>
                    
                    <h2>El ciclo hormonal y el metabolismo: lo que la industria fitness ignora</h2>
                    
                    <p>El cuerpo femenino no funciona igual durante todo el mes. En la fase folicular <em>la primera mitad del ciclo</em>, el estrógeno predomina, la sensibilidad a la insulina mejora, el metabolismo basal se mantiene estable y la resistencia al esfuerzo es mayor. En la fase lútea <em>después de la ovulación</em>, la progesterona sube, el metabolismo basal aumenta ligeramente (entre 100 y 300 calorías más por día en algunos estudios), pero también aumenta el apetito y la preferencia por carbohidratos.</p>
                    
                    <p>Ignorar estas diferencias <em>como hace cualquier plan de alimentación y entrenamiento que no tiene en cuenta el ciclo</em> es planificar sin información. Adaptar la nutrición y el entrenamiento al ciclo no es una tendencia de bienestar femenino. Es fisiología básica.</p>
                    
                    <h2>Qué cambia cuando abordás el problema correctamente</h2>
                    
                    <p>Cuando una mujer empieza a trabajar su metabolismo desde la raíz <em>mejorando la sensibilidad a la insulina con entrenamiento de fuerza y reducción de ultraprocesados, regulando el cortisol, sincronizando la alimentación con su ciclo hormonal, reparando el microbioma</em> los cambios que no se producían con años de dieta y cardio empiezan a aparecer. No de manera milagrosa. De manera fisiológica.</p>
                    
                    <blockquote>Tu cuerpo no es tu enemigo. Es un sistema que responde a la información que le das. El problema es que durante años te dieron información equivocada.</blockquote>
                    
                    <p>No estás fallando vos. Está fallando la estrategia. Un enfoque funcional prioriza estabilidad glucémica, sueño reparador, periodización del entrenamiento y nutrición adaptada a tu biología femenina.</p>
                `
            },
            intestino: {
                category: 'Eje Intestino-Cerebro',
                title: 'Tu intestino y tus hormonas hablan entre sí. Y probablemente no se están llevando bien.',
                content: `
                    <p>Hay una conversación que ocurre a cada momento en tu cuerpo, entre dos sistemas que la medicina tradicional trata como si fueran completamente independientes: el microbioma intestinal y el sistema endocrino. Esta conversación determina, en gran medida, si tus hormonas están en equilibrio o en caos.</p>
                    
                    <p>Cuando se rompe, las consecuencias van mucho más allá de la digestión. Afectan tu ciclo menstrual, tu fertilidad, tu peso, tu estado de ánimo y tu riesgo de ciertas patologías hormonodependientes. Y la mayoría de las mujeres que viven esas consecuencias nunca reciben este diagnóstico, porque nadie les preguntó por el intestino cuando fueron a la consulta ginecológica.</p>
                    
                    <h2>El estroboloma: el microbioma que gestiona tus estrógenos</h2>
                    
                    <p>El estroboloma es el conjunto de bacterias intestinales que tiene la capacidad de metabolizar estrógenos. No es el microbioma completo: es esa porción específica encargada de una función muy concreta y crítica.</p>
                    
                    <p>El proceso funciona así: el hígado metaboliza el estrógeno circulante, lo conjuga <em>lo "etiqueta"</em> para que sea eliminado por la bilis hacia el intestino. En condiciones normales, ese estrógeno conjugado llega al colon y se excreta. Pero cuando el estroboloma está en mal estado, produce una enzima llamada beta-glucuronidasa que rompe esa conjugación. El estrógeno se desconjuga, se vuelve a absorber en la circulación, y el hígado tiene que volver a procesarlo. El resultado: niveles de estrógeno más altos de lo que deberían ser. Dominancia estrogénica que no tiene que ver directamente con los ovarios.</p>
                    
                    <blockquote>El desequilibrio hormonal puede estar en el intestino mucho antes de que aparezca en los ovarios.</blockquote>
                    
                    <h2>Tres atacantes silenciosos del estroboloma</h2>
                    
                    <p>El primero son los antibióticos. Cada curso de antibióticos <em>especialmente los de amplio espectro</em> elimina no solo bacterias patógenas sino también los productores de bacterias beneficiosas del estroboloma. Una sola ronda puede alterar la composición del microbioma por semanas o meses. Múltiples rondas a lo largo de la vida tienen efectos acumulativos. Esto no significa que los antibióticos sean malos <em>cuando son necesarios, son vitales</em>. Significa que su uso tiene consecuencias que merecen atención activa.</p>
                    
                    <p>El segundo es la dieta baja en fibra. Las bacterias del estroboloma se alimentan de fibra fermentable <em>prebióticos</em>. Sin ella, mueren o disminuyen en número. La dieta occidental promedio <em>alta en ultraprocesados, baja en vegetales y legumbres</em> produce exactamente esa pérdida de diversidad microbiana. Y con menos bacterias beneficiosas, la beta-glucuronidasa producida por bacterias menos deseables domina.</p>
                    
                    <p>El tercero es el estrés. El eje intestino-cerebro es bidireccional. El estrés psicológico altera la permeabilidad intestinal, cambia el entorno del microbioma y modifica la composición bacteriana. Es una vía directa entre lo que sentís emocionalmente y lo que pasa en tu intestino <em>y por ende en tus hormonas</em>.</p>
                    
                    <h2>Estreñimiento: el síntoma que más se ignora</h2>
                    
                    <p>El estreñimiento merece mención especial porque es simultáneamente uno de los síntomas más comunes en mujeres y uno de los más minimizados. "Ir al baño cada dos o tres días" se normaliza como variación individual. Desde la medicina funcional, es una señal de alarma.</p>
                    
                    <p>Cuando el tránsito intestinal es lento, el estrógeno que debería eliminarse pasa más tiempo en contacto con la mucosa intestinal, dando más oportunidad a la beta-glucuronidasa de actuar. El estreñimiento crónico es, literalmente, un factor que eleva los estrógenos. Mejorar el tránsito intestinal <em>con fibra, hidratación, movimiento y magnesio en las dosis adecuadas</em> no es solo una cuestión de comodidad digestiva. Es parte del manejo hormonal.</p>
                    
                    <h2>Cómo evaluar y mejorar el estroboloma</h2>
                    
                    <p>La evaluación más completa del microbioma hoy disponible es el análisis de microbioma intestinal por secuenciación genómica. Algunas versiones miden específicamente la beta-glucuronidasa y la diversidad del estroboloma. El DUTCH test también permite ver el metabolismo del estrógeno a nivel celular, evaluando las vías de detoxificación hepática y la relación entre los distintos metabolitos estrogénicos.</p>
                    
                    <p>En cuanto a intervención, las estrategias más sólidas incluyen: aumentar dramáticamente el consumo de fibra diversa, incorporar alimentos fermentados como el chucrut, el kéfir y el kimchi, considerar suplementación con calcio d-glucarato para inhibir la beta-glucuronidasa en casos de dominancia estrogénica documentada, y atender el estreñimiento de manera activa si está presente.</p>
                    
                    <blockquote>Sanar hormonas sin mirar intestino es tratar la consecuencia y no la raíz.</blockquote>
                    
                    <p>La recuperación incluye fibra funcional, reparación de barrera intestinal, manejo de estrés digestivo y un protocolo antiinflamatorio sostenible. Hinchazón diaria, estreñimiento, reflujo, gases o diarrea recurrente no son molestias aisladas: son pistas clínicas de un ecosistema intestinal alterado que merece atención integral.</p>
                `
            },
            atleta: {
                category: 'Ejercicio & Hormonas',
                title: 'El síndrome de la atleta femenina: cuando más ejercicio te cuesta más caro.',
                content: `
                    <p>Hay una imagen cultural muy instalada: la mujer que entrena duro, come limpio, tiene disciplina de hierro y un cuerpo que "lo demuestra". Esa imagen no solo es incompleta. En muchos casos, es la imagen de alguien que está enfermándose.</p>
                    
                    <p>El síndrome de la atleta femenina <em>en inglés, Female Athlete Triad, hoy expandido al concepto de RED-S, Relative Energy Deficiency in Sport</em> es una de las condiciones más subdiagnosticadas en mujeres activas. Y ocurre no solo en atletas de élite. Ocurre en la mujer de 35 años que hace CrossFit seis días por semana y come "saludable". Ocurre en la corredora amateur que se levanta a las 5am para sumar kilómetros. Ocurre en la nutricionista que pesa cada alimento.</p>
                    
                    <h2>Qué es exactamente el síndrome</h2>
                    
                    <p>El síndrome de la atleta femenina se define por la coexistencia de tres elementos: baja disponibilidad energética, disfunción menstrual y baja densidad ósea. Pero en su versión expandida RED-S, el impacto es mucho mayor e incluye disfunción inmune, problemas cardiovasculares, deterioro cognitivo, alteraciones endocrinas y psicológicas, y caída del rendimiento deportivo <em>la paradoja de que más entrenamiento produce peores resultados</em>.</p>
                    
                    <p>El mecanismo central es la baja disponibilidad energética: el cuerpo percibe que el gasto calórico supera la ingesta de manera sostenida. Eso no tiene que significar anorexia ni desorden alimentario obvio. Puede ser simplemente que una mujer entrena 10 horas por semana y come lo que "le parece suficiente" sin calcular el déficit real.</p>
                    
                    <blockquote>Más ejercicio no siempre es mejor. Tu cuerpo tiene un umbral más allá del cual el ejercicio se convierte en un estresor sin retorno.</blockquote>
                    
                    <h2>La kisspeptina: la señal que apaga todo</h2>
                    
                    <p>Cuando el cuerpo detecta baja disponibilidad energética, activa un sistema de ahorro que tiene lógica evolutiva perfecta: apagar los procesos no esenciales para la supervivencia inmediata. La reproducción es el primero en la lista.</p>
                    
                    <p>La kisspeptina es un neuropéptido producido en el hipotálamo que actúa como el director del eje reproductivo. Cuando la energía disponible cae, la kisspeptina disminuye. Con menos kisspeptina, el hipotálamo libera menos GnRH, la hipófisis libera menos LH y FSH, y los ovarios dejan de producir estrógeno y de ovular. El resultado más visible es la amenorrea <em>pérdida del periodo</em>. Pero antes de que el periodo desaparezca, hay una fase de irregularidad, de ciclos anovulatorios, de SPM atípico que rara vez se conecta con el entrenamiento.</p>
                    
                    <h2>Los huesos: la consecuencia que nadie ve venir</h2>
                    
                    <p>El estrógeno es fundamental para la densidad ósea. Cuando los ovarios dejan de producirlo por baja disponibilidad energética, los huesos empiezan a perder densidad. En mujeres jóvenes que deberían estar construyendo masa ósea <em>el pico de densidad ósea ocurre alrededor de los 30 años</em>, el síndrome de la atleta puede producir una densidad ósea comparable a la de mujeres en menopausia.</p>
                    
                    <p>Las fracturas por estrés son la consecuencia más inmediata. Pero el impacto a largo plazo en el riesgo de osteoporosis en la mediana edad y más allá es igualmente serio. Y raramente se diagnostica, porque la mujer atlética no encaja en el perfil que los médicos tienen de alguien con riesgo óseo.</p>
                    
                    <h2>Por qué el sistema médico lo ignora</h2>
                    
                    <p>Parte del problema es cultural. Una mujer que entrena y come "saludable" recibe validación constante. Los médicos, los familiares, los amigos refuerzan la conducta. Los síntomas <em>fatiga, irregularidad menstrual, irritabilidad, caída del rendimiento</em> se atribuyen a "el estrés", "la fase de la vida" o simplemente a entrenar "mucho". La posibilidad de que el cuerpo esté en un estado de déficit energético que requiere ajuste raramente aparece en el radar.</p>
                    
                    <p>Desde la medicina funcional, la evaluación incluye: historia menstrual detallada, densitometría ósea si hay amenorrea, panel hormonal completo incluyendo LH, FSH, estradiol y progesterona en la fase lútea, y evaluación de la disponibilidad energética real <em>no solo calorías consumidas, sino calorías disponibles después del ejercicio</em>.</p>
                    
                    <h2>El camino de regreso</h2>
                    
                    <p>La solución no es dejar de entrenar. Es reequilibrar la energía disponible, generalmente a través de un aumento calórico estratégico y una reducción temporal del volumen de entrenamiento. En muchos casos, el periodo vuelve en semanas o meses una vez que el cuerpo percibe que hay suficiente energía. Los huesos toman más tiempo en recuperarse, razón por la cual la detección temprana es crítica.</p>
                    
                    <blockquote>Rendir mejor no es entrenar más: es recuperar mejor.</blockquote>
                    
                    <p>Si sos una mujer activa que ha perdido el periodo, tiene el periodo irregular, se lesiona con frecuencia o nota que rinde menos a pesar de entrenar más, este es el artículo que debiste leer antes. La solución combina nutrición estratégica, fuerza inteligente, carga progresiva y monitoreo hormonal para que tu rendimiento no te cueste la salud.</p>
                `
            },
            tiroides: {
                category: 'Salud Tiroidea',
                title: 'Tiroides \'normal\' no significa tiroides sana.',
                content: `
                    <p>Hay una frase que escucho con una frecuencia que me preocupa: "Fui al médico por el cansancio, la caída de pelo y el frío permanente. Me hicieron el análisis de tiroides y me dijeron que estaba normal". Y la mujer se va sin diagnóstico, sin respuesta y convencida de que algo está mal con ella, no con su tiroides.</p>
                    
                    <p>Lo que nadie le explicó es que el análisis que le hicieron probablemente midió solo la TSH. Y que "normal en TSH" y "tiroides funcionando bien" son dos cosas completamente distintas.</p>
                    
                    <h2>Cómo funciona la tiroides realmente</h2>
                    
                    <p>La tiroides es una glándula en forma de mariposa ubicada en la base del cuello. Produce dos hormonas principales: T4 (tiroxina) y T3 (triyodotironina). La T4 es la forma de almacenamiento <em>no tiene actividad biológica significativa por sí misma. La T3 es la forma activa <em>la que entra a las células y regula el metabolismo, la temperatura, el estado de ánimo, la velocidad del tránsito intestinal, la caída del cabello, la frecuencia cardíaca.</p>
                    
                    <p>El 80-90% de lo que produce la tiroides es T4. Para que sea útil, tiene que convertirse en T3 activa. Esa conversión ocurre principalmente en el hígado, los riñones y el tejido periférico, a través de una enzima llamada deiodinasa. Cuando la deiodinasa está bloqueada <em>por inflamación, deficiencia de selenio, estrés crónico o exceso de cortisol</em>, la T4 no se convierte eficientemente en T3. La tiroides puede estar produciendo hormonas perfectamente. El problema está en la conversión.</p>
                    
                    <blockquote>Podés tener TSH normal, T4 normal y aún así estar hipotiroidea funcionalmente porque la T3 activa no está llegando a tus células.</blockquote>
                    
                    <h2>El problema del rango de referencia</h2>
                    
                    <p>El rango normal de TSH en la mayoría de los laboratorios va aproximadamente de 0.5 a 4.5 o incluso 5.0 mIU/L. Ese rango fue establecido incluyendo en la muestra a personas con disfunción tiroidea subclínica no diagnosticada, lo que amplió artificialmente el rango "normal".</p>
                    
                    <p>Desde la medicina funcional y la endocrinología integrativa, el rango óptimo de TSH se sitúa entre 1.0 y 2.5 mIU/L. Por encima de 2.5, muchas personas empiezan a tener síntomas. Por encima de 3.0, la probabilidad de disfunción funcional aumenta significativamente. Sin embargo, una TSH de 3.8 sería reportada como "normal" en prácticamente cualquier laboratorio convencional, y la mujer se iría sin tratamiento.</p>
                    
                    <h2>El panel completo que realmente importa</h2>
                    
                    <p>Para evaluar correctamente la función tiroidea, es necesario medir: TSH (punto de partida), T4 libre (la T4 disponible, no la total), T3 libre (la hormona activa disponible), T3 inversa (una forma inactiva que compite con la T3 activa por los receptores celulares y que se eleva en situaciones de estrés crónico), anticuerpos anti-TPO y anti-tiroglobulina (para detectar tiroiditis de Hashimoto, la causa más común de hipotiroidismo en mujeres, que puede estar presente durante años antes de alterar la TSH).</p>
                    
                    <p>Con solo la TSH, estás viendo el 20% de la imagen. Con el panel completo, empezás a entender qué está pasando realmente.</p>
                    
                    <h2>Hashimoto: la enfermedad autoinmune que nadie menciona</h2>
                    
                    <p>La tiroiditis de Hashimoto es la causa más común de hipotiroidismo en países con suficiente yodo. Es una enfermedad autoinmune: el sistema inmune ataca la glándula tiroides, dañando progresivamente su capacidad de producir hormonas. Puede haber fluctuaciones <em>períodos de hipotiroidismo seguidos de períodos de hipertiroidismo</em> antes de que la glándula se agote definitivamente.</p>
                    
                    <p>Los anticuerpos anti-TPO positivos confirman el diagnóstico. Pero un porcentaje importante de personas con Hashimoto tiene TSH normal durante años, mientras el proceso autoinmune avanza silenciosamente. Sin medir los anticuerpos, Hashimoto no se detecta.</p>
                    
                    <p>Y lo que importa cuando hay Hashimoto no es solo reponer la hormona tiroidea. Es entender por qué el sistema inmune está atacando su propio tejido: qué está triggering la respuesta autoinmune <em>generalmente una combinación de permeabilidad intestinal, infecciones virales, disruptores endocrinos, y carga genética. El abordaje funcional trabaja sobre esas causas raíz, no solo sobre el reemplazo hormonal.</p>
                    
                    <h2>Selenium, zinc y otras piezas del puzzle</h2>
                    
                    <p>La deiodinasa que convierte T4 en T3 depende del selenio. El selenio también actúa como antioxidante en la glándula tiroidea, protegiendo contra el daño que genera el peróxido de hidrógeno durante la síntesis de hormonas. Un estudio publicado en el Journal of Clinical Endocrinology & Metabolism mostró reducción significativa de anticuerpos anti-TPO con suplementación de selenio en pacientes con Hashimoto.</p>
                    
                    <p>El zinc, el hierro y la vitamina D también son co-factores tiroideos. Una mujer con tiroides "normal" en los análisis pero con deficiencia de selenio, zinc bajo y vitamina D insuficiente puede estar teniendo síntomas tiroideos que responderían a la corrección de esas deficiencias antes de necesitar medicación.</p>
                    
                    <blockquote>La tiroides no se interpreta en una sola cifra: se interpreta en red.</blockquote>
                    
                    <p>Un plan funcional integra micronutrientes clave, antiinflamación, salud intestinal y ajuste de estilo de vida para mejorar síntomas reales, no solo números. Muchas mujeres escuchan "tu TSH está normal" mientras siguen con frío, cansancio, piel seca, caída de pelo y aumento de peso. Normal en laboratorio no siempre es óptimo para vos.</p>
                `
            },
            almidon: {
                category: 'Nutrición Funcional',
                title: 'Lo que el almidón resistente hace por tus hormonas y nadie te está enseñando a comer.',
                content: `
                    <p>Hay un componente de la alimentación que se habla poco, se investiga mucho y se subestima casi todo el tiempo: el almidón resistente. No es un suplemento. No es un superalimento de moda. Es una propiedad de ciertos alimentos que podés activar <em>o desactivar</em> simplemente según cómo los cocinás.</p>
                    
                    <p>Y su impacto sobre el microbioma intestinal, la sensibilidad a la insulina, la inflamación y el equilibrio hormonal es uno de los más sólidos que existe en la literatura de nutrición funcional.</p>
                    
                    <h2>Qué es el almidón resistente</h2>
                    
                    <p>El almidón resistente es, como su nombre indica, un tipo de almidón que resiste la digestión en el intestino delgado. A diferencia del almidón regular que se digiere rápidamente y eleva la glucosa en sangre, el almidón resistente llega al colon sin haber sido digerido. Ahí, sirve como alimento para las bacterias beneficiosas del microbioma <em>es un prebiótico por definición.</em></p>
                    
                    <p>Existen cuatro tipos de almidón resistente, pero el más relevante para la práctica cotidiana es el tipo 3: el almidón retrogradado. Este se forma cuando ciertos alimentos ricos en almidón <em>arroz, papas, pasta, legumbres</em> se cocinan y luego se enfrían. El enfriamiento cambia la estructura molecular del almidón, creando una forma que las enzimas digestivas humanas no pueden romper.</p>
                    
                    <blockquote>Enfriar el arroz o la papa después de cocinarlos no es un truco de dieta. Es una transformación bioquímica real con consecuencias medibles.</blockquote>
                    
                    <h2>La cadena que conecta el almidón con tus hormonas</h2>
                    
                    <p>Cuando el almidón resistente llega al colon, las bacterias <em>específicamente bifidobacterias y lactobacilos</em> lo fermentan y producen ácidos grasos de cadena corta, el más importante de los cuales es el butirato.</p>
                    
                    <p>El butirato es el combustible principal de las células del colon <em>los colonocitos. Pero sus efectos van mucho más allá de la salud del colon. El butirato reduce la inflamación intestinal activando receptores que inhiben el factor nuclear kappa-B, una de las vías inflamatorias más centrales del sistema inmune. Reduce la permeabilidad intestinal fortaleciendo las uniones estrechas entre células <em>exactamente lo que se necesita cuando hay "leaky gut". Mejora la señalización de GLP-1, una hormona intestinal que mejora la sensibilidad a la insulina y regula el apetito.</p>
                    
                    <p>Esa cadena <em>almidón resistente fermentación bacteriana butirato menos inflamación mejor permeabilidad intestinal mejor sensibilidad a la insulina equilibrio estrogénico</em> es real, está documentada en múltiples estudios y empieza con lo que ponés en el plato.</p>
                    
                    <h2>El impacto directo en el estrógeno</h2>
                    
                    <p>Recordemos el estroboloma <em>el microbioma que metaboliza estrógenos. Un microbioma más diverso y abundante en bacterias beneficiosas produce menos beta-glucuronidasa, la enzima que reabsorbe el estrógeno que debería eliminarse. El almidón resistente, al alimentar bacterias productoras de butirato y favorecer la diversidad microbiana, mejora directamente la composición del estroboloma. Menos beta-glucuronidasa significa menos reabsorción de estrógeno, lo que contribuye a reducir la dominancia estrogénica.</p>
                    
                    <p>No es el único factor. Pero es uno que podés modificar hoy, con lo que cocinás, sin gastar un peso en suplementos.</p>
                    
                    <h2>Cómo incorporarlo en la práctica</h2>
                    
                    <p>El arroz blanco cocinado y enfriado durante al menos 12 horas en la heladera tiene significativamente más almidón resistente que el arroz recién cocido. Lo mismo aplica para las papas <em>el caso de las papas frías o la ensalada de papa es uno de los más estudiados</em> y las legumbres cocinadas y refrigeradas.</p>
                    
                    <p>Lo que muchos no saben es que recalentar estos alimentos no destruye todo el almidón resistente tipo 3 <em>a diferencia del tipo 2, que sí puede degradarse al cocinar. Podés cocinar el arroz o las papas, enfriarlos y recalentarlos sin perder completamente el beneficio.</p>
                    
                    <p>Otras fuentes ricas en almidón resistente que no requieren enfriamiento: el plátano macho o banana verde (no madura), los copos de avena sin cocinar <em>los soaked overnight oats</em>, las legumbres en general, y la harina de banana verde. La variedad importa porque alimenta distintos tipos de bacterias y produce mayor diversidad microbiana.</p>
                    
                    <h2>Cuánto es suficiente</h2>
                    
                    <p>Los estudios más relevantes han utilizado entre 15 y 30 gramos de almidón resistente por día para observar beneficios metabólicos. Ese volumen es perfectamente alcanzable con alimentación real: media taza de legumbres, una papa mediana enfriada y una banana verde al día ya te acercan a ese rango.</p>
                    
                    <p>La transición debe ser gradual. Un aumento brusco de almidón resistente puede causar distensión y gases, especialmente si el microbioma está empobrecido. La incomodidad inicial no es una señal de que algo va mal <em>es señal de que el microbioma está empezando a trabajar. Con el tiempo, esa incomodidad disminuye a medida que las poblaciones bacterianas se adaptan.</p>
                    
                    <blockquote>A veces, un cambio inteligente de fibra vale más que una dieta extrema.</blockquote>
                    
                    <p>En mujeres con fatiga y resistencia a la insulina, esta estrategia mejora energía sostenida, saciedad y estabilidad hormonal cuando se integra bien al plan global. El almidón resistente es una fibra fermentable que no se digiere en el intestino delgado y llega al colon para alimentar bacterias beneficiosas. Su fermentación produce butirato, un ácido graso clave para reducir inflamación intestinal, mejorar sensibilidad a la insulina y apoyar salud metabólica.</p>
                `
            },
            'medicina-funcional': {
                category: 'Medicina Funcional',
                title: 'Medicina Funcional no es medicina alternativa. Es medicina con evidencia que va más profundo.',
                content: `
                    <p>Cuando digo que practico medicina funcional, hay dos reacciones típicas. La primera: "Ah, eso es como lo natural, las hierbas, ¿no?". La segunda: "¿Eso tiene evidencia o es más bien holístico?". Las dos preguntas vienen del mismo malentendido. Y ese malentendido le está costando a muchos pacientes años de diagnósticos incompletos y tratamientos que no llegan a la raíz.</p>
                    
                    <p>Voy a ser directa: la medicina funcional no es homeopatía. No es energía. No es cristales. No es medicina alternativa. Es medicina con formación convencional <em>bioquímica, fisiología, farmacología, diagnóstico</em> que además se pregunta algo que la medicina convencional rara vez se pregunta: ¿por qué?</p>
                    
                    <h2>De qué se trata realmente</h2>
                    
                    <p>La medicina convencional es extraordinariamente buena en situaciones agudas: trauma, infección, cirugía de emergencia, crisis. Si tenés un infarto, querés estar en un hospital convencional. Si tenés apendicitis, querés un cirujano convencional. En eso, la medicina moderna no tiene par.</p>
                    
                    <p>Pero cuando el problema es crónico <em>fatiga que dura años, síntomas hormonales sin diagnóstico claro, enfermedad autoinmune, síndrome metabólico incipiente, intestino irritable, depresión que no responde a antidepresivos</em>, la medicina convencional empieza a tener un límite estructural. Ese límite se llama especialización por órgano y ausencia de visión de sistemas.</p>
                    
                    <p>La gastroenterología trata el intestino. La endocrinología trata las hormonas. La psiquiatría trata la mente. La reumatología trata las articulaciones. Pero el cuerpo humano no funciona en compartimentos. La inflamación intestinal afecta el cerebro. El estrés crónico altera las hormonas. Las hormonas afectan el sistema inmune. Un abordaje que trata cada pieza de forma aislada, por más sofisticado que sea en cada especialidad, falla en capturar la complejidad del sistema completo.</p>
                    
                    <p>La medicina funcional no niega a la medicina convencional. La complementa con una pregunta que falta: ¿por qué este sistema está fallando?</p>
                    
                    <h2>Causas raíz vs. manejo de síntomas</h2>
                    
                    <p>La diferencia central entre la medicina funcional y la convencional no es el rechazo a los fármacos <em>que tienen su lugar perfectamente legítimo</em> sino el orden de las preguntas. La medicina convencional pregunta: ¿qué síntoma tenés? ¿Qué fármaco reduce ese síntoma? La medicina funcional pregunta: ¿por qué este síntoma está presente? ¿Qué proceso biológico subyacente lo está generando?</p>
                    
                    <p>Un ejemplo concreto: una mujer con hipotiroidismo recibe levotiroxina. Su TSH se normaliza. Pero sigue cansada, sigue con caída de pelo, sigue con dificultad para perder peso. La medicina convencional revisa los análisis, ve que "están bien" y no sabe qué más ofrecer. La medicina funcional pregunta: ¿está convirtiendo bien la T4 en T3? ¿Tiene Hashimoto? ¿Tiene déficit de selenio que bloquea la deiodinasa? ¿Hay inflamación intestinal que está triggering la autoinmunidad? Las respuestas a esas preguntas cambian completamente el plan de tratamiento.</p>
                    
                    <h2>La evidencia que existe y la que falta</h2>
                    
                    <p>Una crítica legítima a la medicina funcional es la heterogeneidad de la evidencia. Algunas intervenciones <em>como la reducción del azúcar, el ejercicio de fuerza, el sueño de calidad, la suplementación de vitamina D en deficientes</em> tienen décadas de evidencia robusta. Otras <em>como ciertos protocolos de detox, algunas combinaciones de suplementos específicos o la eliminación de grupos alimentarios completos</em> tienen evidencia más escasa o preliminar.</p>
                    
                    <p>El médico funcional honesto hace esa distinción. Sabe cuándo está trabajando con evidencia sólida y cuándo con hipótesis plausibles pero no confirmadas. No vende certezas donde no las hay. Y no descarta la evidencia convencional: la integra con la evidencia emergente de la investigación en microbioma, epigenética, medicina de sistemas y nutrición de precisión.</p>
                    
                    <h2>Lo que distingue una consulta funcional</h2>
                    
                    <p>En una consulta de medicina funcional, la historia clínica tarda más. Se pregunta por el modo de nacimiento <em>parto vaginal o cesárea</em>, la alimentación en la infancia, los antibióticos recibidos, el historial de estrés vital, los patrones de sueño, la calidad de las relaciones, las toxinas ambientales de exposición. Todo eso es información biológicamente relevante.</p>
                    
                    <p>Los análisis son más extensos: no solo hemograma y química básica, sino panel tiroideo completo, cortisol salival, DUTCH test para hormonas y sus metabolitos, microbioma intestinal, perfil inflamatorio, marcadores de resistencia a la insulina, niveles de vitaminas y minerales, metales pesados si hay indicación. No porque se haga todo a todo el mundo, sino porque la batería diagnóstica se construye sobre la hipótesis clínica.</p>
                    
                    <p>Y el plan de tratamiento es individualizado. No hay un protocolo estándar para "mujeres de 40 años con fatiga". Hay un plan construido sobre la bioquímica específica de esa mujer, en ese momento de su vida, con ese microbioma, esas hormonas, ese historial.</p>
                    
                    <h2>Por qué esto importa ahora</h2>
                    
                    <p>Vivimos en un momento en que las enfermedades crónicas son la primera causa de mortalidad y morbilidad en el mundo occidental, y la medicina convencional <em>brillante en lo que hace</em> no tiene las herramientas para revertir esa tendencia, porque esas enfermedades son en gran medida consecuencias de estilos de vida, toxinas ambientales, disbiosis intestinal y desequilibrios hormonales que no se abordan con un fármaco.</p>
                    
                    <p>La medicina funcional no es la solución a todo. Pero es una herramienta necesaria, respaldada por una base científica creciente, que merece un lugar en el sistema de salud actual. No como alternativa. Como complemento que hace las preguntas que faltan.</p>
                    
                    <blockquote>No es "alternativa": es medicina de precisión con mirada integral.</blockquote>
                    
                    <p>La medicina funcional no reemplaza la medicina convencional: la amplía. Usa fisiología, evidencia y contexto para responder la pregunta clave: ¿por qué empezó esto? No se enfoca en silenciar síntomas de forma aislada, sino en mapear los sistemas que los generan: metabolismo, inflamación, intestino, hormonas, sueño y estrés. Más tiempo de escucha, análisis más precisos, estrategias personalizadas y seguimiento de hábitos que sí impactan resultados sostenibles. El objetivo final es que recuperes agencia sobre tu salud, con decisiones basadas en datos, síntomas y tu historia personal.</p>
                `
            }
        };
        
        function openModal(articleId) {
            console.log('MODAL TEST: Abriendo artículo:', articleId);
            
            const article = articles[articleId];
            if (!article) {
                console.error('MODAL TEST: Artículo no encontrado:', articleId);
                return;
            }
            
            document.getElementById('modal-category').textContent = article.category;
            document.getElementById('modal-title').textContent = article.title;
            document.getElementById('modal-text').innerHTML = article.content;
            
            document.getElementById('modal').classList.add('active');
            document.body.style.overflow = 'hidden';
            
            console.log('MODAL TEST: Modal abierto');
        }
        
        function closeModal() {
            console.log('MODAL TEST: Cerrando modal');
            document.getElementById('modal').classList.remove('active');
            document.body.style.overflow = '';
        }
        
        // Cerrar modal al hacer click fuera
        document.getElementById('modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
        
        // Cerrar con tecla ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
        
        // Navbar Mobile Toggle
        const navToggle = document.querySelector('.nav-toggle');
        const navLinks = document.querySelector('.nav-links');
        
        if (navToggle && navLinks) {
            navToggle.addEventListener('click', function() {
                navToggle.classList.toggle('active');
                navLinks.classList.toggle('active');
            });
            
            // Cerrar menú al hacer click en un enlace
            navLinks.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', function() {
                    navToggle.classList.remove('active');
                    navLinks.classList.remove('active');
                });
            });
        }
        
        console.log('MODAL TEST: Sistema inicializado');
    </script>
</body>
</html>
