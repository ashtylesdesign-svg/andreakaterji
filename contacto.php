<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Andrea Katerji</title>
    <meta name="description" content="Conecta con Andrea Katerji. Agenda una cita o consulta sobre MyOwnDoc 2.0 y The Flow Method.">
    <link rel="preload" href="styles.css?v=20251106" as="style">
    <link rel="stylesheet" href="styles.css?v=20251106">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg" />
    <link rel="shortcut icon" href="favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="AndreaKaterji" />
    <link rel="manifest" href="favicon/site.webmanifest" />
</head>
<body>
    <!-- Particle Canvas Background -->
    <canvas id="particleCanvas"></canvas>

    <!-- Header with Orbital Navigation -->
    <header class="cosmic-header">
        <nav class="orbital-nav" role="navigation" aria-label="Navegación principal">
            <!-- Left Side Menu Items -->
            <div class="nav-left">
                <a href="index.php" class="nav-item neutral" aria-label="Inicio">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    <span>Home</span>
                </a>
                <a href="index.php#flow" class="nav-item consciousness" aria-label="The Flow Method">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                    </svg>
                    <span>The Flow Method</span>
                </a>
                <a href="myowndoc.php" class="nav-item science" aria-label="MyOwnDoc 2.0">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M12 1v6m0 6v6M5.64 5.64l4.24 4.24m4.24 4.24l4.24 4.24M1 12h6m6 0h6M5.64 18.36l4.24-4.24m4.24-4.24l4.24-4.24"></path>
                    </svg>
                    <span>MyOwnDoc 2.0</span>
                </a>
            </div>

            <!-- Central Logo -->
            <div class="logo-container">
                <div class="logo-glow"></div>
                <h1 class="logo" aria-label="Andrea Katerji">Andrea Katerji</h1>
            </div>

            <!-- Right Side Menu Items -->
            <div class="nav-right">
                <a href="shop.php" class="nav-item neutral" aria-label="Tienda">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                    <span>Shop</span>
                </a>
                <a href="palabraviva.php" class="nav-item neutral" aria-label="Blog">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    <span>Palabra Viva</span>
                </a>
                <a href="contacto.php" class="nav-item neutral active" aria-label="Contacto">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    <span>Contacto</span>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" aria-label="Abrir menú" aria-expanded="false">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
        </nav>

        <!-- Mobile Menu -->
        <div class="mobile-menu" aria-hidden="true">
            <a href="index.php" class="mobile-nav-item neutral">
                <span class="icon-wrap neutral">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    </svg>
                </span>
                <span>Home</span>
            </a>
            <a href="index.php#flow" class="mobile-nav-item consciousness">
                <span class="icon-wrap consciousness">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                    </svg>
                </span>
                <span>The Flow Method</span>
            </a>
            <a href="myowndoc.php" class="mobile-nav-item science">
                <span class="icon-wrap science">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M12 1v6m0 6v6"></path>
                    </svg>
                </span>
                <span>MyOwnDoc 2.0</span>
            </a>
            <a href="shop.php" class="mobile-nav-item neutral">
                <span class="icon-wrap neutral">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                </span>
                <span>Shop</span>
            </a>
            <a href="palabraviva.php" class="mobile-nav-item neutral">
                <span class="icon-wrap neutral">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    </svg>
                </span>
                <span>Palabra Viva</span>
            </a>
            <a href="contacto.php" class="mobile-nav-item neutral active">
                <span class="icon-wrap neutral">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    </svg>
                </span>
                <span>Contacto</span>
            </a>
        </div>
    </header>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="contact-container">
            <!-- Section Header -->
            <div class="contact-header">
                <h2 class="contact-title">Conectemos</h2>
                <p class="contact-subtitle">Estoy aquí para acompañarte en tu camino hacia el bienestar integral</p>
            </div>

            <!-- Contact Content Grid -->
            <div class="contact-grid">
                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    <form id="contactForm" class="contact-form" novalidate>
                        <div class="form-group">
                            <label for="name" class="form-label">Nombre completo</label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                class="form-input" 
                                required
                                placeholder="Tu nombre"
                                aria-required="true"
                            >
                            <span class="form-error" role="alert"></span>
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">Mensaje</label>
                            <textarea 
                                id="message" 
                                name="message" 
                                class="form-input form-textarea" 
                                rows="5" 
                                required
                                placeholder="Cuéntame cómo puedo ayudarte..."
                                aria-required="true"
                            ></textarea>
                            <span class="form-error" role="alert"></span>
                        </div>

                        <button type="submit" class="form-submit">
                            <span class="submit-text">Enviar por WhatsApp</span>
                            <svg class="submit-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"></path>
                            </svg>
                        </button>

                        <div class="form-status" role="status" aria-live="polite"></div>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="contact-info">
                    <div class="info-card">
                        <div class="info-icon-wrapper">
                            <svg class="info-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div class="info-content">
                            <h3 class="info-title">Email</h3>
                            <a href="mailto:myowndoc@andreakaterji.com" class="info-link">myowndoc@andreakaterji.com</a>
                            <p class="info-text-small">Consultas generales</p>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="info-icon-wrapper">
                            <svg class="info-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div class="info-content">
                            <h3 class="info-title">Citas</h3>
                            <a href="mailto:citas@andreakaterji.com" class="info-link">citas@andreakaterji.com</a>
                            <p class="info-text-small">Para agendar consultas</p>
                        </div>
                    </div>

                    <div class="info-card info-card-highlight">
                        <div class="info-content-full">
                            <h3 class="info-title-center">Horario de atención</h3>
                            <p class="info-text">Lunes a Viernes</p>
                            <p class="info-text-emphasis">9:00 AM - 6:00 PM</p>
                            <p class="info-text-small">Respondo todos los mensajes en un plazo de 24 horas</p>
                        </div>
                    </div>

                    <!-- Decorative Element -->
                    <div class="contact-decoration">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="rgba(110,198,210,0.15)" d="M45.3,-59.6C58.9,-50.4,70.3,-36.8,75.1,-21.2C79.9,-5.6,78.1,12,70.8,26.3C63.5,40.6,50.7,51.6,36.8,58.9C22.9,66.2,7.9,69.8,-7.3,69.3C-22.5,68.8,-37.9,64.2,-50.7,55.4C-63.5,46.6,-73.7,33.6,-77.4,18.8C-81.1,4,-78.3,-12.6,-70.8,-26.5C-63.3,-40.4,-51.1,-51.6,-37.3,-60.7C-23.5,-69.8,-8.2,-76.8,4.8,-73.9C17.8,-71,31.7,-68.8,45.3,-59.6Z" transform="translate(100 100)" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Elements -->
        <div class="contact-orb contact-orb-1"></div>
        <div class="contact-orb contact-orb-2"></div>
    </section>

    <!-- Beach-style Animated Footer -->
    <footer class="beach-footer">
        <div class="beach-layer sand"></div>
        <div class="beach-layer shore-glow"></div>
        <div class="waves">
            <svg class="wave wave-back" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true">
                <path d="M0,40 C180,60 300,10 480,30 C660,50 780,20 960,35 C1140,50 1260,30 1440,45 L1440,120 L0,120 Z"></path>
            </svg>
            <svg class="wave wave-back clone" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true">
                <path d="M0,40 C180,60 300,10 480,30 C660,50 780,20 960,35 C1140,50 1260,30 1440,45 L1440,120 L0,120 Z"></path>
            </svg>
            <svg class="wave wave-mid" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true">
                <path d="M0,50 C200,20 300,70 480,50 C660,30 780,65 960,45 C1140,25 1260,55 1440,35 L1440,120 L0,120 Z"></path>
            </svg>
            <svg class="wave wave-mid clone" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true">
                <path d="M0,50 C200,20 300,70 480,50 C660,30 780,65 960,45 C1140,25 1260,55 1440,35 L1440,120 L0,120 Z"></path>
            </svg>
            <svg class="wave wave-front" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true">
                <path d="M0,65 C220,35 320,85 520,65 C700,45 820,80 1000,60 C1180,40 1280,75 1440,55 L1440,120 L0,120 Z"></path>
            </svg>
            <svg class="wave wave-front clone" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true">
                <path d="M0,65 C220,35 320,85 520,65 C700,45 820,80 1000,60 C1180,40 1280,75 1440,55 L1440,120 L0,120 Z"></path>
            </svg>
        </div>
        <div class="footer-inner">
            <div class="social-links" role="navigation" aria-label="Redes sociales">
                <a class="social-link ig" href="https://instagram.com/myowndoc" target="_blank" rel="noopener" aria-label="Instagram">
                    <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                        <rect x="2" y="2" width="20" height="20" rx="5" fill="currentColor" opacity="0.12"></rect>
                        <path d="M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0-3c2.2 0 2.47.01 3.34.05.86.04 1.45.18 1.96.39.53.22.98.51 1.42.95.44.44.73.89.95 1.42.21.51.35 1.1.39 1.96.04.87.05 1.14.05 3.34s-.01 2.47-.05 3.34c-.04.86-.18 1.45-.39 1.96a4.1 4.1 0 0 1-.95 1.42 4.1 4.1 0 0 1-1.42.95c-.51.21-1.1.35-1.96.39-.87.04-1.14.05-3.34.05s-2.47-.01-3.34-.05c-.86-.04-1.45-.18-1.96-.39a4.1 4.1 0 0 1-1.42-.95 4.1 4.1 0 0 1-.95-1.42c-.21-.51-.35-1.1-.39-1.96C5.01 14.47 5 14.2 5 12s.01-2.47.05-3.34c.04-.86.18-1.45.39-1.96.22-.53.51-.98.95-1.42.44-.44.89-.73 1.42-.95.51-.21 1.1-.35 1.96-.39C9.53 4.01 9.8 4 12 4z" fill="currentColor"></path>
                        <circle cx="17.5" cy="6.5" r="1.3" fill="currentColor"></circle>
                    </svg>
                </a>
                <a class="social-link yt" href="https://youtube.com/@myowndoc" target="_blank" rel="noopener" aria-label="YouTube">
                    <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                        <path d="M23.5 7.2a4 4 0 0 0-2.8-2.9C18.7 3.8 12 3.8 12 3.8s-6.7 0-8.7.5A4 4 0 0 0 .5 7.2 41 41 0 0 0 0 12a41 41 0 0 0 .5 4.8 4 4 0 0 0 2.8 2.9c2 .5 8.7.5 8.7.5s6.7 0 8.7-.5a4 4 0 0 0 2.8-2.9c.3-1.6.5-3.2.5-4.8s-.2-3.2-.5-4.8zM9.8 15.2V8.8L15.5 12l-5.7 3.2z" fill="currentColor"></path>
                    </svg>
                </a>
                <a class="social-link tk" href="https://tiktok.com/@medicinasinanestesia" target="_blank" rel="noopener" aria-label="TikTok">
                    <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                        <path d="M21 8.5c-2.4 0-4.6-1.3-5.8-3.3V17a5.75 5.75 0 1 1-5.8-5.75c.36 0 .7.04 1.03.1v2.79a2.95 2.95 0 1 0 2.95 2.95V1h2.65c.33 2.4 2.2 4.4 4.6 4.87V8.5z" fill="currentColor"></path>
                    </svg>
                </a>
                <a class="social-link wa" href="https://wa.me/573106640387" target="_blank" rel="noopener" aria-label="WhatsApp">
                    <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" fill="currentColor"></path>
                    </svg>
                </a>
            </div>
            <p class="footer-text">© 2025 Andrea Katerji. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Audio Element (Optional) -->
    <audio id="ambientSound" loop>
        <source src="assets/olas-del-mar.mp3" type="audio/mpeg">
    </audio>

    <script src="script.js"></script>
    <script src="contact-appointments.js"></script>
</body>
</html>
