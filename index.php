<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andrea Katerji | Donde la ciencia se encuentra con la conciencia</title>
    <meta name="description" content="Portal central del ecosistema Andrea Katerji. Integración armónica entre ciencia rigurosa (MyOwnDoc 2.0) y conciencia expandida (The Flow Method).">
    <link rel="stylesheet" href="styles.css">
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
                <a href="#home" class="nav-item neutral" aria-label="Inicio">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    <span>Home</span>
                </a>
                <a href="theflowmethod.php" class="nav-item consciousness" aria-label="The Flow Method">
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
                <a href="contacto.php" class="nav-item neutral" aria-label="Contacto">
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
            <a href="#home" class="mobile-nav-item neutral">
                <span class="icon-wrap neutral">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    </svg>
                </span>
                <span>Home</span>
            </a>
            <a href="theflowmethod.php" class="mobile-nav-item consciousness">
                <span class="icon-wrap consciousness">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                    </svg>
                </span>
                <span>The Flow Method</span>
            </a>
            <a href="#myowndoc" class="mobile-nav-item science">
                <span class="icon-wrap science">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M12 1v6m0 6v6M5.64 5.64l4.24 4.24m4.24 4.24l4.24 4.24M1 12h6m6 0h6M5.64 18.36l4.24-4.24m4.24-4.24l4.24-4.24"></path>
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
            <a href="#contact" class="mobile-nav-item neutral">
                <span class="icon-wrap neutral">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    </svg>
                </span>
                <span>Contacto</span>
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="hero-section">
        <!-- Flowing Background Layer -->
        <div class="fluid-bg"></div>

        <section class="split-universes">
            <a href="myowndoc.php" class="universe-card science" aria-label="Explorar MyOwnDoc 2.0" data-image="assets/myowndoc.png" data-fit="contain" data-zoom="balanced">
                <div class="card-media" aria-hidden="true"></div>
                <div class="card-overlay"></div>
                <div class="card-content"></div>
            </a>

            <a href="theflowmethod.php" class="universe-card consciousness" aria-label="Entrar en The Flow Method" data-image="assets/logo_TFM.png" data-fit="contain" data-zoom="balanced">
                <div class="card-media" aria-hidden="true"></div>
                <div class="card-overlay"></div>
                <div class="card-content"></div>
            </a>
        </section>

        <!-- Cosmic Background Elements -->
        <div class="cosmic-orb orb-1"></div>
        <div class="cosmic-orb orb-2"></div>
        <div class="cosmic-orb orb-3"></div>
    </main>

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
                <a class="social-link ig" href="#" target="_blank" rel="noopener" aria-label="Instagram">
                    <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                        <rect x="2" y="2" width="20" height="20" rx="5" fill="currentColor" opacity="0.12"></rect>
                        <path d="M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0-3c2.2 0 2.47.01 3.34.05.86.04 1.45.18 1.96.39.53.22.98.51 1.42.95.44.44.73.89.95 1.42.21.51.35 1.1.39 1.96.04.87.05 1.14.05 3.34s-.01 2.47-.05 3.34c-.04.86-.18 1.45-.39 1.96a4.1 4.1 0 0 1-.95 1.42 4.1 4.1 0 0 1-1.42.95c-.51.21-1.1.35-1.96.39-.87.04-1.14.05-3.34.05s-2.47-.01-3.34-.05c-.86-.04-1.45-.18-1.96-.39a4.1 4.1 0 0 1-1.42-.95 4.1 4.1 0 0 1-.95-1.42c-.21-.51-.35-1.1-.39-1.96C5.01 14.47 5 14.2 5 12s.01-2.47.05-3.34c.04-.86.18-1.45.39-1.96.22-.53.51-.98.95-1.42.44-.44.89-.73 1.42-.95.51-.21 1.1-.35 1.96-.39C9.53 4.01 9.8 4 12 4z" fill="currentColor"></path>
                        <circle cx="17.5" cy="6.5" r="1.3" fill="currentColor"></circle>
                    </svg>
                </a>
                <a class="social-link yt" href="#" target="_blank" rel="noopener" aria-label="YouTube">
                    <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                        <path d="M23.5 7.2a4 4 0 0 0-2.8-2.9C18.7 3.8 12 3.8 12 3.8s-6.7 0-8.7.5A4 4 0 0 0 .5 7.2 41 41 0 0 0 0 12a41 41 0 0 0 .5 4.8 4 4 0 0 0 2.8 2.9c2 .5 8.7.5 8.7.5s6.7 0 8.7-.5a4 4 0 0 0 2.8-2.9c.3-1.6.5-3.2.5-4.8s-.2-3.2-.5-4.8zM9.8 15.2V8.8L15.5 12l-5.7 3.2z" fill="currentColor"></path>
                    </svg>
                </a>
                <a class="social-link li" href="#" target="_blank" rel="noopener" aria-label="LinkedIn">
                    <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                        <path d="M4.98 3.5C4.98 4.88 3.86 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.5 8.5h4V23h-4V8.5zM8.5 8.5h3.8v2.0h.05c.53-1.0 1.83-2.05 3.77-2.05 4.03 0 4.78 2.65 4.78 6.1V23h-4v-5.6c0-1.33-.02-3.04-1.85-3.04-1.86 0-2.14 1.45-2.14 2.95V23h-4V8.5z" fill="currentColor"></path>
                    </svg>
                </a>
                <a class="social-link tk" href="#" target="_blank" rel="noopener" aria-label="TikTok">
                    <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                        <path d="M21 8.5c-2.4 0-4.6-1.3-5.8-3.3V17a5.75 5.75 0 1 1-5.8-5.75c.36 0 .7.04 1.03.1v2.79a2.95 2.95 0 1 0 2.95 2.95V1h2.65c.33 2.4 2.2 4.4 4.6 4.87V8.5z" fill="currentColor"></path>
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
</body>
</html>
