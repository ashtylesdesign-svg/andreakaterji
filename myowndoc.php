<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyOwnDoc 2.0 | Medicina Funcional con Andrea Katerji</title>
    <meta name="description" content="Transforma tu salud con medicina funcional personalizada. MyOwnDoc 2.0 - Donde la ciencia médica se encuentra con el bienestar integral.">
    <link rel="stylesheet" href="myowndoc-styles.css?v=20260409-1350">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="myowndoc/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="myowndoc/favicon.svg" />
    <link rel="shortcut icon" href="myowndoc/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="myowndoc/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Myowndoc" />
    <link rel="manifest" href="myowndoc/site.webmanifest" />
</head>
<body class="myowndoc-body">
    <!-- Animated Background -->
    <div class="animated-background">
        <div class="gradient-orb orb-1"></div>
        <div class="gradient-orb orb-2"></div>
        <div class="gradient-orb orb-3"></div>
        <canvas id="particleCanvas"></canvas>
    </div>

    <!-- Navigation -->
    <nav class="myowndoc-nav">
        <div class="nav-container">
            <a href="index.php" class="nav-logo">
                <img src="assets/myowndoc_horizonal.png" alt="MyOwnDoc 2.0" class="nav-logo-img">
            </a>
            
            <div class="nav-links">
                <a href="index.php" class="nav-link">Portal Principal</a>
                <a href="#inicio" class="nav-link active">Inicio</a>
                <a href="#servicios" class="nav-link">Servicios</a>
                <a href="#metodologia" class="nav-link">Metodología</a>
                <a href="#testimonios" class="nav-link">Testimonios</a>
                <a href="#sobre-mi" class="nav-link">Sobre Mí</a>
                <a href="#" class="nav-link-cta" data-open-appointment role="button" aria-haspopup="dialog">Agendar Cita</a>
            </div>

            <button class="mobile-toggle" aria-label="Menú">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Floating Social Media Button -->
    <div class="floating-social-container">
        <button class="floating-social-btn" id="floatingSocialBtn" aria-label="Abrir redes sociales" aria-expanded="false">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M12 2v20M2 12h20"/>
            </svg>
        </button>
        
        <div class="social-menu" id="socialMenu">
            <a href="https://wa.me/573106640387" target="_blank" class="social-item whatsapp" aria-label="WhatsApp">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.029 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.488"/>
                </svg>
                <span>WhatsApp</span>
            </a>
            
            <a href="https://instagram.com/myowndoc" target="_blank" class="social-item instagram" aria-label="Instagram">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1112.324 0 6.162 6.162 0 01-12.324 0zM12 16a4 4 0 110-8 4 4 0 010 8zm4.965-10.405a1.44 1.44 0 112.881.001 1.44 1.44 0 01-2.881-.001z"/>
                </svg>
                <span>Instagram</span>
            </a>
            
            <a href="https://tiktok.com/@medicinasinanestesia" target="_blank" class="social-item tiktok" aria-label="TikTok">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.95-.01 2.84.02 5.68-.02 8.52-.05 1.36-.26 2.73-.85 3.98-.68 1.49-1.83 2.71-3.32 3.47-1.52.77-3.28 1.07-4.96.83-1.57-.22-3.06-.91-4.23-1.97-1.38-1.25-2.23-2.98-2.35-4.81-.04-.5-.04-1-.01-1.49.18-1.9.97-3.73 2.32-5.08 1.49-1.5 3.52-2.35 5.59-2.38.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                </svg>
                <span>TikTok</span>
            </a>
            
            <a href="https://youtube.com/@myowndoc" target="_blank" class="social-item youtube" aria-label="YouTube">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
                <span>YouTube</span>
            </a>
        </div>
    </div>

    <!-- Floating Menu Button -->
    <button class="floating-menu-btn" id="floatingMenuBtn" aria-label="Abrir menú" aria-expanded="false">
        <img src="assets/andrea_menu.png" alt="Menú" class="menu-img menu-img-closed">
        <img src="assets/andrea_menu2.png" alt="Cerrar menú" class="menu-img menu-img-open">
    </button>

    <!-- Hero Section -->
    <section class="hero-section" id="inicio">
        <div class="hero-particles"></div>
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-logo-container">
                    <img src="assets/myowndoc_horizonal.png" alt="MyOwnDoc 2.0" class="hero-logo" data-tilt>
                </div>
                <span class="hero-badge" data-aos="fade-up">Medicina Funcional Personalizada</span>
                <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
                    Transforma tu salud desde
                    <span class="gradient-text typing-effect">la raíz</span>
                </h1>
                <p class="hero-description" data-aos="fade-up" data-aos-delay="200">
                    Descubre un enfoque integral que va más allá de los síntomas. 
                    Con MyOwnDoc 2.0, te acompaño en tu camino hacia el bienestar óptimo 
                    a través de la medicina funcional basada en evidencia científica.
                </p>
                <div class="hero-cta" data-aos="fade-up" data-aos-delay="300">
                    <a href="https://wa.me/573106640387?text=Hola,%20quiero%20agendar%20una%20consulta" target="_blank" class="btn btn-primary btn-glow">
                        <span>Agenda tu Consulta</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M4 10h12m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </a>
                    <a href="#metodologia" class="btn btn-secondary btn-magnetic">
                        <span>Conoce el Método</span>
                    </a>
                </div>
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-item" data-counter="500">
                        <span class="stat-number">0+</span>
                        <span class="stat-label">Pacientes Atendidos</span>
                    </div>
                    <div class="stat-item" data-counter="8">
                        <span class="stat-number">0+</span>
                        <span class="stat-label">Años de Experiencia</span>
                    </div>
                    <div class="stat-item" data-counter="98">
                        <span class="stat-number">0%</span>
                        <span class="stat-label">Satisfacción</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="andrea-welcome" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/andrea_spk.gif" alt="Dra. Andrea Katerji" class="andrea-gif" id="andreaGif">
                    <div class="audio-indicator" id="audioIndicator">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z" fill="currentColor"/>
                        </svg>
                        <span>Toca para escuchar</span>
                    </div>
                    <audio id="welcomeAudio" preload="auto">
                        <source src="assets/bienvenida.m4a" type="audio/mpeg">
                    </audio>
                </div>
                <div class="floating-icons">
                    <div class="icon-bubble" data-aos="fade-left" data-aos-delay="300" style="top: 10%; left: 10%;">
                        <span>🧬</span>
                    </div>
                    <div class="icon-bubble" data-aos="fade-left" data-aos-delay="400" style="top: 30%; right: 15%;">
                        <span>🌿</span>
                    </div>
                    <div class="icon-bubble" data-aos="fade-left" data-aos-delay="500" style="bottom: 20%; left: 20%;">
                        <span>💊</span>
                    </div>
                    <div class="icon-bubble" data-aos="fade-left" data-aos-delay="600" style="bottom: 40%; right: 10%;">
                        <span>🧘</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <span>Scroll para explorar</span>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="servicios">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Servicios</span>
                <h2 class="section-title">¿Cómo puedo ayudarte?</h2>
                <p class="section-description">
                    Servicios integrales de medicina funcional diseñados para abordar 
                    las causas raíz de tus problemas de salud
                </p>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="2"/>
                            <path d="M20 12v8l6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Consulta Inicial Integral</h3>
                    <p class="service-description">
                        Evaluación completa de tu historial médico, análisis de laboratorio 
                        y creación de un plan personalizado de tratamiento.
                    </p>
                    <ul class="service-features">
                        <li>Duración: 90 minutos</li>
                        <li>Análisis de laboratorios</li>
                        <li>Plan de acción personalizado</li>
                    </ul>
                    <a href="https://wa.me/573106640387?text=Hola,%20me%20gustaría%20agendar%20una%20consulta" target="_blank" class="service-link">
                        Agendar consulta
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M3 8h10m0 0l-3-3m3 3l-3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>

                <div class="service-card featured">
                    <div class="featured-badge">Más Popular</div>
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M20 5v30M5 20h30" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="20" cy="20" r="8" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Programa de Transformación</h3>
                    <p class="service-description">
                        Acompañamiento completo de 3 meses con consultas mensuales, 
                        seguimiento continuo y ajustes personalizados.
                    </p>
                    <ul class="service-features">
                        <li>3 consultas mensuales</li>
                        <li>Seguimiento por WhatsApp</li>
                        <li>Protocolos personalizados</li>
                        <li>Ajustes continuos</li>
                    </ul>
                    <a href="#" class="service-link" data-open-appointment role="button" aria-haspopup="dialog">
                        Comenzar ahora
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M3 8h10m0 0l-3-3m3 3l-3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <rect x="5" y="8" width="30" height="24" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M5 15h30M15 8v7M25 8v7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Consulta de Seguimiento</h3>
                    <p class="service-description">
                        Evaluación de progreso, ajuste de protocolos y resolución 
                        de dudas para optimizar tu tratamiento.
                    </p>
                    <ul class="service-features">
                        <li>Duración: 45 minutos</li>
                        <li>Revisión de resultados</li>
                        <li>Ajuste de protocolos</li>
                    </ul>
                    <a href="https://wa.me/573106640387?text=Hola,%20me%20gustaría%20agendar%20una%20consulta%20de%20seguimiento" target="_blank" class="service-link">
                        Agendar consulta
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M3 8h10m0 0l-3-3m3 3l-3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Methodology Section - ULTRA INTERACTIVE -->
    <section class="methodology-section" id="metodologia">
        <div class="methodology-bg">
            <div class="method-orb method-orb-1"></div>
            <div class="method-orb method-orb-2"></div>
        </div>
        
        <div class="container">
            <div class="section-header">
                <span class="section-badge" data-aos="fade-up">Metodología</span>
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="100">
                    El Método <span class="gradient-text">MyOwnDoc 2.0</span>
                </h2>
                <p class="section-description" data-aos="fade-up" data-aos-delay="200">
                    Transformación digital de tu salud en 4 fases interconectadas
                </p>
            </div>

            <!-- Interactive Roadmap -->
            <div class="methodology-roadmap">
                <!-- Progress Line -->
                <div class="roadmap-progress-line">
                    <div class="progress-fill" id="methodProgress"></div>
                </div>

                <!-- Phase 1 -->
                <div class="method-phase" data-phase="1" data-aos="zoom-in" data-aos-delay="100">
                    <div class="phase-connector"></div>
                    <div class="phase-card">
                        <div class="phase-icon-wrapper">
                            <div class="phase-icon-bg"></div>
                            <div class="phase-icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <path d="M20 5v30M5 20h30" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                                    <circle cx="20" cy="20" r="8" stroke="currentColor" stroke-width="3"/>
                                </svg>
                            </div>
                            <div class="phase-number">01</div>
                        </div>
                        <div class="phase-content">
                            <h3 class="phase-title">Evaluación Integral</h3>
                            <p class="phase-description">Análisis profundo de tu historial médico, síntomas actuales, estilo de vida y objetivos de salud.</p>
                            <div class="phase-features">
                                <div class="feature-item">
                                    <span class="feature-icon">🔍</span>
                                    <span>Historia clínica detallada</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">🧪</span>
                                    <span>Análisis de laboratorios</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">📊</span>
                                    <span>Evaluación de hábitos</span>
                                </div>
                            </div>
                            <div class="phase-stats">
                                <div class="stat-mini">
                                    <span class="stat-value">90min</span>
                                    <span class="stat-label">Duración</span>
                                </div>
                                <div class="stat-mini">
                                    <span class="stat-value">100%</span>
                                    <span class="stat-label">Personalizado</span>
                                </div>
                            </div>
                        </div>
                        <div class="phase-hover-effect"></div>
                    </div>
                </div>

                <!-- Phase 2 -->
                <div class="method-phase" data-phase="2" data-aos="zoom-in" data-aos-delay="200">
                    <div class="phase-connector"></div>
                    <div class="phase-card">
                        <div class="phase-icon-wrapper">
                            <div class="phase-icon-bg"></div>
                            <div class="phase-icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <path d="M20 10L30 20L20 30L10 20L20 10Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                                    <circle cx="20" cy="20" r="3" fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="phase-number">02</div>
                        </div>
                        <div class="phase-content">
                            <h3 class="phase-title">Identificación de Causas Raíz</h3>
                            <p class="phase-description">Descubrimos los desequilibrios subyacentes que están afectando tu salud.</p>
                            <div class="phase-features">
                                <div class="feature-item">
                                    <span class="feature-icon">🧬</span>
                                    <span>Análisis de sistemas corporales</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">⚡</span>
                                    <span>Identificación de deficiencias</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">🔬</span>
                                    <span>Evaluación de toxicidad</span>
                                </div>
                            </div>
                            <div class="phase-stats">
                                <div class="stat-mini">
                                    <span class="stat-value">7-14</span>
                                    <span class="stat-label">Días análisis</span>
                                </div>
                                <div class="stat-mini">
                                    <span class="stat-value">15+</span>
                                    <span class="stat-label">Biomarcadores</span>
                                </div>
                            </div>
                        </div>
                        <div class="phase-hover-effect"></div>
                    </div>
                </div>

                <!-- Phase 3 -->
                <div class="method-phase" data-phase="3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="phase-connector"></div>
                    <div class="phase-card">
                        <div class="phase-icon-wrapper">
                            <div class="phase-icon-bg"></div>
                            <div class="phase-icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <rect x="8" y="8" width="24" height="24" rx="4" stroke="currentColor" stroke-width="3"/>
                                    <path d="M15 20l4 4 8-8" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="phase-number">03</div>
                        </div>
                        <div class="phase-content">
                            <h3 class="phase-title">Plan Personalizado</h3>
                            <p class="phase-description">Creamos un protocolo único basado en tu biología individual y objetivos específicos.</p>
                            <div class="phase-features">
                                <div class="feature-item">
                                    <span class="feature-icon">🥗</span>
                                    <span>Protocolo nutricional</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">💊</span>
                                    <span>Suplementación específica</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">🏃</span>
                                    <span>Cambios de estilo de vida</span>
                                </div>
                            </div>
                            <div class="phase-stats">
                                <div class="stat-mini">
                                    <span class="stat-value">3-6</span>
                                    <span class="stat-label">Meses programa</span>
                                </div>
                                <div class="stat-mini">
                                    <span class="stat-value">24/7</span>
                                    <span class="stat-label">Soporte</span>
                                </div>
                            </div>
                        </div>
                        <div class="phase-hover-effect"></div>
                    </div>
                </div>

                <!-- Phase 4 -->
                <div class="method-phase" data-phase="4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="phase-connector"></div>
                    <div class="phase-card">
                        <div class="phase-icon-wrapper">
                            <div class="phase-icon-bg"></div>
                            <div class="phase-icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <path d="M10 25L15 15L20 20L25 10L30 15" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="30" cy="15" r="3" fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="phase-number">04</div>
                        </div>
                        <div class="phase-content">
                            <h3 class="phase-title">Seguimiento y Optimización</h3>
                            <p class="phase-description">Monitoreamos tu progreso y ajustamos el plan para resultados óptimos.</p>
                            <div class="phase-features">
                                <div class="feature-item">
                                    <span class="feature-icon">📈</span>
                                    <span>Consultas de seguimiento</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">🔄</span>
                                    <span>Ajustes personalizados</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">💬</span>
                                    <span>Soporte continuo</span>
                                </div>
                            </div>
                            <div class="phase-stats">
                                <div class="stat-mini">
                                    <span class="stat-value">∞</span>
                                    <span class="stat-label">Seguimiento</span>
                                </div>
                                <div class="stat-mini">
                                    <span class="stat-value">98%</span>
                                    <span class="stat-label">Éxito</span>
                                </div>
                            </div>
                        </div>
                        <div class="phase-hover-effect"></div>
                    </div>
                </div>
            </div>

            <!-- Interactive CTA -->
            <div class="methodology-cta" data-aos="fade-up" data-aos-delay="500">
                <div class="cta-card">
                    <h3>¿Listo para comenzar tu transformación?</h3>
                    <p>Agenda tu consulta inicial y descubre cómo el Método MyOwnDoc 2.0 puede cambiar tu vida</p>
                    <a href="https://wa.me/573106640387?text=Hola,%20quiero%20iniciar%20mi%20transformación%20con%20MyOwnDoc" target="_blank" class="btn btn-primary btn-glow">
                        <span>Iniciar Mi Transformación</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M4 10h12m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Conditions Section -->
    <section class="conditions-section">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Especialidades</span>
                <h2 class="section-title">Condiciones que tratamos</h2>
                <p class="section-description">
                    Medicina funcional para una amplia variedad de condiciones de salud
                </p>
            </div>

            <div class="conditions-grid">
                <div class="condition-card">
                    <div class="condition-icon">🔥</div>
                    <h3>Inflamación Crónica</h3>
                    <p>Dolor articular, autoinmunidad, alergias</p>
                </div>
                <div class="condition-card">
                    <div class="condition-icon">⚡</div>
                    <h3>Fatiga y Energía</h3>
                    <p>Cansancio crónico, fatiga adrenal</p>
                </div>
                <div class="condition-card">
                    <div class="condition-icon">🧠</div>
                    <h3>Salud Mental</h3>
                    <p>Ansiedad, depresión, niebla mental</p>
                </div>
                <div class="condition-card">
                    <div class="condition-icon">🌡️</div>
                    <h3>Metabolismo</h3>
                    <p>Resistencia a la insulina, diabetes</p>
                </div>
                <div class="condition-card">
                    <div class="condition-icon">💚</div>
                    <h3>Salud Digestiva</h3>
                    <p>Intestino permeable, SIBO, disbiosis</p>
                </div>
                <div class="condition-card">
                    <div class="condition-icon">⚖️</div>
                    <h3>Control de Peso</h3>
                    <p>Pérdida de peso saludable y sostenible</p>
                </div>
                <div class="condition-card">
                    <div class="condition-icon">💤</div>
                    <h3>Sueño</h3>
                    <p>Insomnio, calidad del sueño</p>
                </div>
                <div class="condition-card">
                    <div class="condition-icon">🔄</div>
                    <h3>Hormonas</h3>
                    <p>Desequilibrios hormonales, tiroides</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" id="testimonios">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Testimonios</span>
                <h2 class="section-title">Historias de Transformación</h2>
                <p class="section-description">
                    Lo que dicen nuestros pacientes sobre su experiencia
                </p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Yo ya había probado TODO… dietas, gym, nutricionistas. Nada me funcionaba. En 4 semanas con MyOwnDoc bajé 6 kilos sin matarme y entendiendo por fin mi cuerpo."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">M</div>
                        <div class="author-info">
                            <h4>María Fernanda G.</h4>
                            <p>32 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Lo que más me impactó no fue solo bajar de peso… fue verme en el espejo y reconocerme otra vez. Tenía años sin sentirme así."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">L</div>
                        <div class="author-info">
                            <h4>Laura P.</h4>
                            <p>28 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Pensé que era otro programa más… pero esto es medicina aplicada. No es dieta, es estrategia. Bajé grasa sin perder músculo."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">C</div>
                        <div class="author-info">
                            <h4>Carolina R.</h4>
                            <p>35 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Andrea no te da tips… te cambia la forma en la que entiendes tu cuerpo. Después de esto, nunca vuelves a hacer una dieta mal."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">V</div>
                        <div class="author-info">
                            <h4>Valentina M.</h4>
                            <p>26 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Por primera vez alguien me explicó el 'por qué' de lo que me pasaba. Todo tenía sentido: mi ansiedad, mi cansancio, mi peso."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">N</div>
                        <div class="author-info">
                            <h4>Natalia C.</h4>
                            <p>34 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Esto no es fitness, es medicina funcional bien aplicada. Se nota el nivel."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">P</div>
                        <div class="author-info">
                            <h4>Paula Andrea S.</h4>
                            <p>38 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Yo vivía cansada, con ansiedad y despertándome a las 3 a.m. Después del programa, duermo profundo y tengo energía TODO el día."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">D</div>
                        <div class="author-info">
                            <h4>Daniela V.</h4>
                            <p>29 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "No sabía que mi problema no era comida… era cortisol. Eso me cambió todo."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">J</div>
                        <div class="author-info">
                            <h4>Juliana T.</h4>
                            <p>31 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Al inicio dudé por el precio… hoy siento que fue lo mejor que pude pagar por mí. Literal me devolvió el control de mi vida."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">M</div>
                        <div class="author-info">
                            <h4>Marcela D.</h4>
                            <p>40 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "He gastado mucho más en cosas que no me funcionaron. Esto sí lo vale."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">A</div>
                        <div class="author-info">
                            <h4>Ana Sofía L.</h4>
                            <p>27 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Trabajo todo el día y pensé que no iba a poder… pero el programa está diseñado para gente ocupada. Eso fue clave."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">G</div>
                        <div class="author-info">
                            <h4>Gabriela H.</h4>
                            <p>33 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "No necesitas vivir en el gimnasio ni cocinar 3 horas. Es realista y aplicable."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">A</div>
                        <div class="author-info">
                            <h4>Andrea B.</h4>
                            <p>36 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Tengo problemas hormonales y pensé que nunca iba a bajar de peso. Este fue el primer programa que sí tuvo en cuenta eso."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">V</div>
                        <div class="author-info">
                            <h4>Verónica F.</h4>
                            <p>39 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Tenía inflamación constante y problemas digestivos. Mejoré piel, digestión y peso al mismo tiempo."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">D</div>
                        <div class="author-info">
                            <h4>Diana K.</h4>
                            <p>41 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Llegué sintiéndome frustrada y culpable conmigo misma… hoy tengo disciplina sin esfuerzo y me siento en paz con mi cuerpo."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">P</div>
                        <div class="author-info">
                            <h4>Paola E.</h4>
                            <p>30 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "No es solo físico… me devolvió la seguridad que había perdido."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">C</div>
                        <div class="author-info">
                            <h4>Camila N.</h4>
                            <p>25 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Si eres de las que ya lo ha intentado todo y nada le funciona… esto es para ti."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">S</div>
                        <div class="author-info">
                            <h4>Sofía A.</h4>
                            <p>28 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Si sientes que haces dieta y no bajas… probablemente estás haciendo todo mal. A mí me pasaba."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">I</div>
                        <div class="author-info">
                            <h4>Isabella G.</h4>
                            <p>33 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Esto no es un programa… es una experiencia. Se siente premium desde el primer día."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">A</div>
                        <div class="author-info">
                            <h4>Alejandra W.</h4>
                            <p>37 años</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="testimonial-text">
                        "Es como tener una médica experta guiándote paso a paso, pero con una estructura que sí te lleva a resultados."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">M</div>
                        <div class="author-info">
                            <h4>Manuela O.</h4>
                            <p>29 años</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Testimonials Section -->
    <section class="video-testimonials-section">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Testimonios en Video</span>
                <h2 class="section-title">Escucha sus historias</h2>
                <p class="section-description">
                    Nuestras clientas comparten su experiencia de transformación
                </p>
            </div>

            <div class="video-testimonials-grid">
                <!-- Video Testimonio 1 -->
                <div class="video-testimonial-card">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video 
                                controls 
                                preload="metadata" 
                                playsinline
                                muted
                                loop
                                style="width: 100%; height: 100%; object-fit: contain;">
                                <source src="myowndoc/testimonio1.mp4" type="video/mp4">
                                Tu navegador no soporta videos HTML5.
                            </video>
                        </div>
                    </div>
                    <div class="video-testimonial-info">
                        <h4 class="video-testimonial-name">Testimonio 1</h4>
                        <p class="video-testimonial-result">Experiencia de transformación</p>
                    </div>
                </div>

                <!-- Video Testimonio 2 -->
                <div class="video-testimonial-card">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video 
                                controls 
                                preload="metadata" 
                                playsinline
                                muted
                                loop
                                style="width: 100%; height: 100%; object-fit: contain;">
                                <source src="myowndoc/testimonio2.mp4" type="video/mp4">
                                Tu navegador no soporta videos HTML5.
                            </video>
                        </div>
                    </div>
                    <div class="video-testimonial-info">
                        <h4 class="video-testimonial-name">Testimonio 2</h4>
                        <p class="video-testimonial-result">Historia de éxito</p>
                    </div>
                </div>

                <!-- Puedes agregar más videos aquí siguiendo la misma estructura -->
            </div>
        </div>
        
        <!-- Divisor decorativo entre secciones -->
        <div class="section-divider"></div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="sobre-mi">
        <div class="container">
            <div class="about-content">
                <div class="about-image">
                    <div class="image-placeholder portrait-frame">
                        <div class="portrait-media">
                            <video src="assets/andrea.mp4" autoplay muted loop playsinline preload="metadata"></video>
                        </div>
                        <div class="portrait-glow"></div>
                    </div>
                </div>
                <div class="about-text">
                    <span class="section-badge">Sobre Mí</span>
                    <h2 class="section-title">Dra. Andrea Katerji</h2>
                    <p class="about-slogan">Salud con ciencia y conciencia</p>
                    <p class="about-description">
                        Médica especializada en medicina funcional con más de 8 años de experiencia 
                        ayudando a pacientes a recuperar su salud y vitalidad.
                    </p>
                    <p class="about-description">
                        Mi enfoque se basa en entender las causas raíz de los problemas de salud 
                        para crear planes personalizados que te ayuden a alcanzar tu bienestar óptimo.
                    </p>
                    <div class="about-credentials">
                        <div class="credential-item">
                            <div class="credential-icon">🎓</div>
                            <div>
                                <h4>Formación</h4>
                                <p>Medicina Funcional Certificada</p>
                            </div>
                        </div>
                        <div class="credential-item">
                            <div class="credential-icon">📚</div>
                            <div>
                                <h4>Especialización</h4>
                                <p>Nutrición y Metabolismo</p>
                            </div>
                        </div>
                        <div class="credential-item">
                            <div class="credential-icon">🏆</div>
                            <div>
                                <h4>Experiencia</h4>
                                <p>8+ años en práctica clínica</p>
                            </div>
                        </div>
                    </div>

                    <!-- About Highlights: animated flip cards -->
                    <div class="about-highlight-grid">
                        <div class="about-card" data-aos="zoom-in">
                            <div class="card-inner">
                                <div class="card-face card-front">
                                    <div class="about-card-icon">🧬</div>
                                    <h4>Enfoque Integrativo</h4>
                                    <p>Ciencia + conciencia para transformar tu salud desde la raíz</p>
                                </div>
                                <div class="card-face card-back">
                                    <ul>
                                        <li>Protocolos personalizados</li>
                                        <li>Hábitos sostenibles</li>
                                        <li>Evidencia científica</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="about-card" data-aos="zoom-in" data-aos-delay="100">
                            <div class="card-inner">
                                <div class="card-face card-front">
                                    <div class="about-card-icon">🔬</div>
                                    <h4>Método MyOwnDoc</h4>
                                    <p>Fases claras: Evaluar, Identificar, Personalizar y Optimizar</p>
                                </div>
                                <div class="card-face card-back">
                                    <ul>
                                        <li>Laboratorios clave</li>
                                        <li>Biomarcadores</li>
                                        <li>Seguimiento continuo</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="about-card" data-aos="zoom-in" data-aos-delay="200">
                            <div class="card-inner">
                                <div class="card-face card-front">
                                    <div class="about-card-icon">💜</div>
                                    <h4>Acompañamiento Humano</h4>
                                    <p>Escucha activa, empatía y pedagogía para cada proceso</p>
                                </div>
                                <div class="card-face card-back">
                                    <ul>
                                        <li>Educación del paciente</li>
                                        <li>Hábitos conscientes</li>
                                        <li>Bienestar integral</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="about-card" data-aos="zoom-in" data-aos-delay="300">
                            <div class="card-inner">
                                <div class="card-face card-front">
                                    <div class="about-card-icon">🌿</div>
                                    <h4>Nutrición Funcional</h4>
                                    <p>La alimentación como medicina, adaptada a tu biología</p>
                                </div>
                                <div class="card-face card-back">
                                    <ul>
                                        <li>Protocolos alimentarios</li>
                                        <li>Suplementación precisa</li>
                                        <li>Estilo de vida</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- About Social Links -->
                    <div class="about-social">
                        <a class="social-link ig" href="https://instagram.com/myowndoc" target="_blank" rel="noopener" aria-label="Instagram MyOwnDoc">
                            <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                                <rect x="2" y="2" width="20" height="20" rx="5" fill="currentColor" opacity="0.12"></rect>
                                <path d="M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0-3c2.2 0 2.47.01 3.34.05.86.04 1.45.18 1.96.39.53.22.98.51 1.42.95.44.44.73.89.95 1.42.21.51.35 1.1.39 1.96.04.87.05 1.14.05 3.34s-.01 2.47-.05 3.34c-.04.86-.18 1.45-.39 1.96a4.1 4.1 0 0 1-.95 1.42 4.1 4.1 0 0 1-1.42.95c-.51.21-1.1.35-1.96.39-.87.04-1.14.05-3.34.05s-2.47-.01-3.34-.05c-.86-.04-1.45-.18-1.96-.39a4.1 4.1 0 0 1-1.42-.95 4.1 4.1 0 0 1-.95-1.42c-.21-.51-.35-1.1-.39-1.96C5.01 14.47 5 14.2 5 12s.01-2.47.05-3.34c.04-.86.18-1.45.39-1.96.22-.53.51-.98.95-1.42.44-.44.89-.73 1.42-.95.51-.21 1.1-.35 1.96-.39C9.53 4.01 9.8 4 12 4z" fill="currentColor"></path>
                                <circle cx="17.5" cy="6.5" r="1.3" fill="currentColor"></circle>
                            </svg>
                        </a>
                        <a class="social-link yt" href="https://youtube.com/@myowndoc" target="_blank" rel="noopener" aria-label="YouTube MyOwnDoc">
                            <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                                <path d="M23.5 7.2a4 4 0 0 0-2.8-2.9C18.7 3.8 12 3.8 12 3.8s-6.7 0-8.7.5A4 4 0 0 0 .5 7.2 41 41 0 0 0 0 12a41 41 0 0 0 .5 4.8 4 4 0 0 0 2.8 2.9c2 .5 8.7.5 8.7.5s6.7 0 8.7-.5a4 4 0 0 0 2.8-2.9c.3-1.6.5-3.2.5-4.8s-.2-3.2-.5-4.8zM9.8 15.2V8.8L15.5 12l-5.7 3.2z" fill="currentColor"></path>
                            </svg>
                        </a>
                        <a class="social-link tk" href="https://tiktok.com/@medicinasinanestesia" target="_blank" rel="noopener" aria-label="TikTok MyOwnDoc">
                            <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                                <path d="M21 8.5c-2.4 0-4.6-1.3-5.8-3.3V17a5.75 5.75 0 1 1-5.8-5.75c.36 0 .7.04 1.03.1v2.79a2.95 2.95 0 1 0 2.95 2.95V1h2.65c.33 2.4 2.2 4.4 4.6 4.87V8.5z" fill="currentColor"></path>
                            </svg>
                        </a>
                        <a class="social-link wa" href="https://wa.me/573106640387" target="_blank" rel="noopener" aria-label="WhatsApp MyOwnDoc">
                            <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">¿Listo para transformar tu salud?</h2>
                <p class="cta-description">
                    Agenda tu consulta inicial y comienza tu camino hacia el bienestar óptimo
                </p>
                <div class="cta-buttons">
                    <a href="https://wa.me/573106640387?text=Hola,%20quiero%20agendar%20una%20consulta%20ahora" target="_blank" class="btn btn-primary btn-large">
                        <span>Agendar Consulta Ahora</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M4 10h12m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="myowndoc-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <img src="assets/myowndoc_horizonal.png" alt="MyOwnDoc 2.0" class="footer-logo-img">
                    </div>
                    <p class="footer-tagline">
                        Salud con ciencia y conciencia
                    </p>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h4>Navegación</h4>
                        <a href="#inicio">Inicio</a>
                        <a href="#servicios">Servicios</a>
                        <a href="#metodologia">Metodología</a>
                        <a href="#testimonios">Testimonios</a>
                    </div>
                    <div class="footer-column">
                        <h4>Contacto</h4>
                        <a href="mailto:myowndoc@andreakaterji.com">myowndoc@andreakaterji.com</a>
                        <a href="contacto.php">Formulario de contacto</a>
                    </div>
                    <div class="footer-column">
                        <h4>Legal</h4>
                        <a href="#">Política de Privacidad</a>
                        <a href="#">Términos y Condiciones</a>
                        <a href="index.php">Volver al Portal Principal</a>
                    </div>
                </div>
            </div>
            <!-- Botones de navegación para pantallas pequeñas -->
            <div class="footer-mobile-nav" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 2rem; padding: 0 1rem;">
                <a href="index.php" class="footer-nav-btn footer-nav-btn-primary" style="display: flex; align-items: center; justify-content: center; gap: 0.75rem; padding: 1.25rem 1.75rem; border-radius: 18px; font-family: var(--font-heading); font-size: 1.05rem; font-weight: 700; text-decoration: none; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2); border: 2px solid rgba(255, 255, 255, 0.1); background: linear-gradient(135deg, #481F71, #5A2691); color: white;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    <span>Portal Principal</span>
                </a>
                <a href="palabraviva.php" class="footer-nav-btn footer-nav-btn-secondary" style="display: flex; align-items: center; justify-content: center; gap: 0.75rem; padding: 1.25rem 1.75rem; border-radius: 18px; font-family: var(--font-heading); font-size: 1.05rem; font-weight: 700; text-decoration: none; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2); border: 2px solid rgba(255, 255, 255, 0.1); background: linear-gradient(135deg, #6EC6D2, #4FB3C4); color: white;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                    </svg>
                    <span>Palabra Viva</span>
                </a>
            </div>
            
            <div class="footer-bottom">
                <p> 2026 Andrea Katerji - MyOwnDoc 2.0. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Appointment Modal -->
    <div class="modal-overlay" id="appointmentModal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="appointmentTitle">
        <div class="modal-dialog">
            <button class="modal-close" type="button" aria-label="Cerrar" data-close-appointment>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            
            <div class="modal-header">
                <div class="modal-icon">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <rect x="4" y="6" width="24" height="20" rx="2" stroke="currentColor" stroke-width="2"/>
                        <path d="M4 12h24M11 6v5M21 6v5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="modal-title" id="appointmentTitle">Agenda tu Consulta</h3>
                <p class="modal-subtitle">Completa el formulario y te contactaremos para confirmar tu cita</p>
            </div>
            
            <form id="appointmentForm" class="modal-form" novalidate>
                <input type="hidden" name="source" value="myowndoc" />
                
                <div class="form-grid">
                    <div class="form-group">
                        <label for="ap_name">Nombre completo *</label>
                        <input id="ap_name" name="name" type="text" required placeholder="Ej: María García" />
                        <small class="error" data-error-for="name"></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="ap_email">Correo electrónico *</label>
                        <input id="ap_email" name="email" type="email" required placeholder="tu@email.com" />
                        <small class="error" data-error-for="email"></small>
                    </div>
                </div>
                
                <div class="form-grid">
                    <div class="form-group">
                        <label for="ap_phone">Teléfono</label>
                        <input id="ap_phone" name="phone" type="tel" placeholder="+57 300 123 4567" />
                    </div>
                    
                    <div class="form-group">
                        <label for="ap_date">Fecha preferida *</label>
                        <input id="ap_date" name="date" type="text" required placeholder="Ej: 12/11 en la tarde" />
                        <small class="error" data-error-for="date"></small>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="ap_message">Motivo de consulta</label>
                    <textarea id="ap_message" name="message" rows="3" placeholder="Cuéntanos brevemente qué te trae..."></textarea>
                </div>
                
                <button class="btn btn-primary btn-submit" type="submit" id="ap_submit">
                    <span>Enviar Solicitud</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M4 10h12m0 0l-4-4m4 4l-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
                
                <div class="form-feedback" id="ap_feedback" role="status" aria-live="polite"></div>
            </form>
        </div>
    </div>

    <script src="myowndoc-script.js"></script>
    <script src="myowndoc-appointments.js"></script>
    
    <!-- Floating Social Media Button Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const floatingSocialBtn = document.getElementById('floatingSocialBtn');
            const socialMenu = document.getElementById('socialMenu');
            let isMenuOpen = false;

            // Toggle social menu
            floatingSocialBtn.addEventListener('click', function() {
                isMenuOpen = !isMenuOpen;
                
                if (isMenuOpen) {
                    socialMenu.classList.add('active');
                    floatingSocialBtn.setAttribute('aria-expanded', 'true');
                } else {
                    socialMenu.classList.remove('active');
                    floatingSocialBtn.setAttribute('aria-expanded', 'false');
                }
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                if (isMenuOpen && 
                    !floatingSocialBtn.contains(event.target) && 
                    !socialMenu.contains(event.target)) {
                    isMenuOpen = false;
                    socialMenu.classList.remove('active');
                    floatingSocialBtn.setAttribute('aria-expanded', 'false');
                }
            });

            // Close menu on Escape key
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape' && isMenuOpen) {
                    isMenuOpen = false;
                    socialMenu.classList.remove('active');
                    floatingSocialBtn.setAttribute('aria-expanded', 'false');
                    floatingSocialBtn.focus();
                }
            });
        });
    </script>
</body>
</html>
