<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palabra Viva | Blog de Andrea Katerji</title>
    <meta name="description" content="Un espacio de transformación donde la medicina funcional y el flow se encuentran. Artículos, reflexiones y conversaciones con la Dra. Andrea Katerji.">
    <link rel="stylesheet" href="palabraviva-styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* ===================================
           MODAL DE ARTÍCULOS - PALABRA VIVA
           Diseño moderno y funcional
           =================================== */
        
        .articulo-modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            z-index: 999999;
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .articulo-modal-overlay.active {
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
        }
        
        .articulo-modal-container {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border-radius: 20px;
            max-width: 950px;
            max-height: 92vh;
            width: 95%;
            overflow: hidden;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.3),
                0 0 0 1px rgba(255, 255, 255, 0.1);
            transform: scale(0.8) translateY(30px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }
        
        .articulo-modal-overlay.active .articulo-modal-container {
            transform: scale(1) translateY(0);
        }
        
        .articulo-modal-header {
            background: linear-gradient(135deg, #481F71 0%, #6EC6D2 100%);
            padding: 2.5rem 3rem 2rem;
            position: relative;
            overflow: hidden;
        }
        
        .articulo-modal-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.05)"/><circle cx="10" cy="50" r="0.5" fill="rgba(255,255,255,0.05)"/><circle cx="90" cy="30" r="0.5" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }
        
        .articulo-modal-close {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
            color: white;
            font-size: 24px;
            font-weight: 300;
        }
        
        .articulo-modal-close:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(90deg);
        }
        
        .articulo-modal-category {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 0.5rem 1.2rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 1rem;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
        
        .articulo-modal-title {
            color: white;
            font-family: 'Georgia', 'Times New Roman', serif;
            font-size: clamp(1.8rem, 4vw, 2.8rem);
            font-weight: 700;
            line-height: 1.2;
            margin: 0;
            position: relative;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .articulo-modal-content {
            padding: 3rem;
            max-height: calc(92vh - 200px);
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        .articulo-modal-content::-webkit-scrollbar {
            width: 8px;
        }
        
        .articulo-modal-content::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .articulo-modal-content::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #481F71, #6EC6D2);
            border-radius: 10px;
        }
        
        .articulo-modal-text {
            font-size: 1.15rem;
            line-height: 1.8;
            color: #2c3e50;
        }
        
        .articulo-modal-text p {
            margin-bottom: 1.8rem;
        }
        
        .articulo-modal-text h2 {
            font-family: 'Georgia', 'Times New Roman', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: #481F71;
            margin: 3rem 0 1.5rem;
            position: relative;
            padding-left: 1.5rem;
        }
        
        .articulo-modal-text h2::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 70%;
            background: linear-gradient(135deg, #481F71, #6EC6D2);
            border-radius: 2px;
        }
        
        .articulo-modal-text strong {
            font-weight: 600;
            color: #2c3e50;
            background: linear-gradient(135deg, rgba(72, 31, 113, 0.1), rgba(110, 198, 210, 0.1));
            padding: 0.1rem 0.3rem;
            border-radius: 3px;
        }
        
        .articulo-modal-text blockquote {
            margin: 2.5rem 0;
            padding: 1.5rem 2rem;
            background: linear-gradient(135deg, rgba(72, 31, 113, 0.05), rgba(110, 198, 210, 0.05));
            border-left: 4px solid #481F71;
            border-radius: 0 10px 10px 0;
            font-style: italic;
            font-size: 1.1rem;
            color: #481F71;
            position: relative;
        }
        
        .articulo-modal-text blockquote::before {
            content: '"';
            position: absolute;
            top: -0.5rem;
            left: 1rem;
            font-size: 3rem;
            color: rgba(72, 31, 113, 0.2);
            font-family: Georgia, serif;
        }
        
        .articulo-modal-text a {
            color: #481F71;
            text-decoration: none;
            font-weight: 600;
            border-bottom: 2px solid transparent;
            transition: all 0.3s ease;
        }
        
        .articulo-modal-text a:hover {
            color: #6EC6D2;
            border-bottom-color: #6EC6D2;
        }
        
        .articulo-modal-cta {
            margin-top: 3rem;
            padding: 2rem;
            background: linear-gradient(135deg, rgba(72, 31, 113, 0.05), rgba(110, 198, 210, 0.05));
            border-radius: 15px;
            text-align: center;
            border: 1px solid rgba(72, 31, 113, 0.1);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .articulo-modal-container {
                width: 98%;
                max-height: 95vh;
                border-radius: 15px;
            }
            
            .articulo-modal-header {
                padding: 2rem 1.5rem 1.5rem;
            }
            
            .articulo-modal-close {
                width: 40px;
                height: 40px;
                font-size: 20px;
                top: 1rem;
                right: 1rem;
            }
            
            .articulo-modal-title {
                font-size: 1.6rem;
            }
            
            .articulo-modal-content {
                padding: 2rem 1.5rem;
                max-height: calc(95vh - 180px);
            }
            
            .articulo-modal-text {
                font-size: 1rem;
            }
            
            .articulo-modal-text h2 {
                font-size: 1.5rem;
                margin: 2rem 0 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .articulo-modal-container {
                width: 100%;
                max-height: 100vh;
                border-radius: 0;
            }
            
            .articulo-modal-header {
                padding: 1.5rem 1rem 1rem;
            }
            
            .articulo-modal-close {
                width: 36px;
                height: 36px;
                font-size: 18px;
            }
            
            .articulo-modal-title {
                font-size: 1.4rem;
            }
            
            .articulo-modal-content {
                padding: 1.5rem 1rem;
                max-height: calc(100vh - 150px);
            }
            
            .articulo-modal-text {
                font-size: 0.95rem;
                line-height: 1.7;
            }
            
            .articulo-modal-text h2 {
                font-size: 1.3rem;
            }
            
            .articulo-modal-cta {
                padding: 1.5rem;
                margin-top: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="blog-nav">
        <div class="nav-container">
            <a href="index.php" class="nav-logo">
                <span class="logo-text">Palabra Viva</span>
            </a>
            
            <div class="nav-menu">
                <a href="#inicio" class="nav-link">Inicio</a>
                <a href="#articulos" class="nav-link">Artículos</a>
                <a href="#acerca" class="nav-link">Acerca</a>
                <a href="https://instagram.com/myowndoc" target="_blank" class="nav-link nav-social">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1 1 12.324 0 6.162 6.162 0 0 1-12.324 0zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm4.965-10.405a1.44 1.44 0 1 1 2.881.001 1.44 1.44 0 0 1-2.881-.001z"/>
                    </svg>
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="inicio">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Palabra Viva</h1>
                <p class="hero-subtitle">
                    Un espacio de transformación donde la medicina funcional y el flow se encuentran. 
                    Artículos, reflexiones y conversaciones con la Dra. Andrea Katerji.
                </p>
                <div class="hero-actions">
                    <a href="#articulos" class="btn-primary">Explorar Artículos</a>
                    <a href="https://instagram.com/myowndoc" target="_blank" class="btn-secondary">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1 1 12.324 0 6.162 6.162 0 0 1-12.324 0zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm4.965-10.405a1.44 1.44 0 1 1 2.881.001 1.44 1.44 0 0 1-2.881-.001z"/>
                        </svg>
                        Instagram
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-gradient"></div>
            </div>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="blog-section" id="articulos">
        <div class="blog-container">
            <div class="section-header">
                <h2 class="section-title">Artículos Recientes</h2>
                <p class="section-subtitle">
                    Explora contenido profundo sobre salud femenina, medicina funcional y bienestar integral.
                </p>
            </div>
            
            <div class="blog-grid">
                <!-- Article 1 -->
                <article class="blog-card" data-article="periodo">
                    <div class="card-image">
                        <div class="card-gradient" style="background: linear-gradient(135deg, #481F71, #6EC6D2)"></div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-category">Salud Hormonal</div>
                        <h3 class="card-title">Tu periodo no es el problema. Tu cuerpo está mandando una señal de auxilio.</h3>
                        <p class="card-excerpt">
                            Descubre qué te está diciendo tu ciclo menstrual sobre tu salud hormonal y metabólica.
                        </p>
                        <button class="btn-read-article" data-article="periodo">
                            <span>Leer artículo</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 8h10m0 0l-3-3m3 3l-3 3" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="blog-card" data-article="cansancio">
                    <div class="card-image">
                        <div class="card-gradient" style="background: linear-gradient(135deg, #3A6B73, #D1B280)"></div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-category">Fatiga Crónica</div>
                        <h3 class="card-title">Llevás 10 años cansada y te dijeron que es estrés.</h3>
                        <p class="card-excerpt">
                            El agotamiento crónico tiene causas reales que la medicina convencional no está investigando.
                        </p>
                        <button class="btn-read-article" data-article="cansancio">
                            <span>Leer artículo</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 8h10m0 0l-3-3m3 3l-3 3" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="blog-card" data-article="cortisol">
                    <div class="card-image">
                        <div class="card-gradient" style="background: linear-gradient(135deg, #6EC6D2, #A3D1C5)"></div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-category">Manejo del Estrés</div>
                        <h3 class="card-title">El cortisol no es tu enemigo. Es que nunca aprendiste a manejarlo.</h3>
                        <p class="card-excerpt">
                            Aprende a trabajar con tu cortisol, no en su contra, para recuperar tu energía.
                        </p>
                        <button class="btn-read-article" data-article="cortisol">
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
    <footer class="blog-footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3 class="footer-title">Palabra Viva</h3>
                    <p class="footer-text">
                        Blog de medicina funcional donde la ciencia y el alma se encuentran para transformar tu salud.
                    </p>
                    <div class="footer-social">
                        <a href="https://instagram.com/myowndoc" target="_blank" class="footer-social-link">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1 1 12.324 0 6.162 6.162 0 0 1-12.324 0zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm4.965-10.405a1.44 1.44 0 1 1 2.881.001 1.44 1.44 0 0 1-2.881-.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="footer-col">
                    <h3 class="footer-title">Enlaces</h3>
                    <ul class="footer-links">
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#articulos">Artículos</a></li>
                        <li><a href="https://instagram.com/myowndoc" target="_blank">Instagram</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Andrea Katerji. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // ===================================
        // SISTEMA DE MODAL - PALABRA VIVA
        // ===================================
        
        console.log('PALABRA VIVA: Inicializando sistema de artículos...');
        
        // Base de datos de artículos
        const ARTICULOS_DB = {
            'periodo': {
                categoria: 'Salud Hormonal',
                titulo: 'Tu periodo no es el problema. Tu cuerpo está mandando una señal de auxilio.',
                contenido: `
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
                    
                    <div class="articulo-modal-cta">
                        <strong>¿Querés entender qué le está pasando a tu cuerpo?</strong><br>
                        Seguime como <a href="https://instagram.com/myowndoc" target="_blank">@andreakaterji</a> para más contenido sin anestesia.
                    </div>
                `
            },
            'cansancio': {
                categoria: 'Fatiga Crónica',
                titulo: 'Llevás 10 años cansada y te dijeron que es estrés.',
                contenido: `
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
                    
                    <div class="articulo-modal-cta">
                        <strong>Seguime en <a href="https://instagram.com/myowndoc" target="_blank">@andreakaterji</a></strong><br>
                        <span style="color: #6B7280; font-size: 0.9rem;">Medicina Sin Anestesia · Lo que te duele escuchar es lo que necesitás oír.</span>
                    </div>
                `
            },
            'cortisol': {
                categoria: 'Manejo del Estrés',
                titulo: 'El cortisol no es tu enemigo. Es que nunca aprendiste a manejarlo.',
                contenido: `
                    <p>Si hay una hormona que recibe más críticas que el cortisol, no se me ocurre cuál es. "Tengo el cortisol por las nubes", "el cortisol me está matando", "hay que bajar el cortisol". Se habla de él como si fuera un intruso en el cuerpo, algo que hay que eliminar. Ese es el primer error.</p>
                    
                    <p><strong>El cortisol es esencial. Sin cortisol, morirías.</strong> El problema no es que exista. El problema es cuándo, cuánto y en qué ritmo aparece.</p>
                    
                    <h2>El ritmo circadiano del cortisol</h2>
                    
                    <p>El cortisol tiene un ritmo diario preciso y elegante. Cuando el ritmo se invierte <strong>bajo en la mañana, alto en la noche</strong> todo el sistema falla.</p>
                    
                    <blockquote>
                        El problema no es que tengas cortisol. El problema es cuándo lo tenés y en qué cantidad.
                    </blockquote>
                    
                    <h2>Qué se puede hacer</h2>
                    
                    <p>Manejar el cortisol no significa eliminarlo. Significa respetar su ritmo.</p>
                    
                    <div class="articulo-modal-cta">
                        <strong>¿Querés aprender a entender tu cuerpo desde adentro?</strong><br>
                        Seguime en <a href="https://instagram.com/myowndoc" target="_blank">@andreakaterji</a>
                    </div>
                `
            }
        };
        
        // Crear el modal
        function crearModalArticulo() {
            console.log('PALABRA VIVA: Creando modal de artículos...');
            
            const modalHTML = `
                <div class="articulo-modal-overlay" id="modalArticulo">
                    <div class="articulo-modal-container">
                        <div class="articulo-modal-header">
                            <button class="articulo-modal-close" onclick="cerrarModalArticulo()">×</button>
                            <div class="articulo-modal-category" id="modalCategoria"></div>
                            <h1 class="articulo-modal-title" id="modalTitulo"></h1>
                        </div>
                        <div class="articulo-modal-content">
                            <div class="articulo-modal-text" id="modalContenido"></div>
                        </div>
                    </div>
                </div>
            `;
            
            document.body.insertAdjacentHTML('beforeend', modalHTML);
            console.log('PALABRA VIVA: Modal creado exitosamente');
        }
        
        // Abrir modal
        function abrirModalArticulo(articuloId) {
            console.log('PALABRA VIVA: Abriendo artículo:', articuloId);
            
            const articulo = ARTICULOS_DB[articuloId];
            if (!articulo) {
                console.error('PALABRA VIVA: Artículo no encontrado:', articuloId);
                alert('Artículo no encontrado');
                return;
            }
            
            const modal = document.getElementById('modalArticulo');
            if (!modal) {
                console.error('PALABRA VIVA: Modal no encontrado');
                return;
            }
            
            // Llenar contenido
            document.getElementById('modalCategoria').textContent = articulo.categoria;
            document.getElementById('modalTitulo').textContent = articulo.titulo;
            document.getElementById('modalContenido').innerHTML = articulo.contenido;
            
            // Mostrar modal
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
            
            console.log('PALABRA VIVA: Modal abierto exitosamente');
        }
        
        // Cerrar modal
        function cerrarModalArticulo() {
            console.log('PALABRA VIVA: Cerrando modal');
            const modal = document.getElementById('modalArticulo');
            if (modal) {
                modal.classList.remove('active');
                document.body.style.overflow = '';
                console.log('PALABRA VIVA: Modal cerrado');
            }
        }
        
        // Inicializar sistema
        function inicializarSistemaModal() {
            console.log('PALABRA VIVA: Inicializando sistema de modal...');
            
            // Crear modal
            crearModalArticulo();
            
            // Event listener para botones
            document.addEventListener('click', function(evento) {
                const boton = evento.target.closest('.btn-read-article');
                if (boton) {
                    evento.preventDefault();
                    evento.stopPropagation();
                    
                    const articuloId = boton.getAttribute('data-article');
                    console.log('PALABRA VIVA: Click en botón:', articuloId);
                    
                    abrirModalArticulo(articuloId);
                }
            });
            
            // Cerrar modal al hacer click fuera
            const modal = document.getElementById('modalArticulo');
            if (modal) {
                modal.addEventListener('click', function(evento) {
                    if (evento.target === modal) {
                        cerrarModalArticulo();
                    }
                });
            }
            
            // Cerrar con tecla ESC
            document.addEventListener('keydown', function(evento) {
                if (evento.key === 'Escape') {
                    cerrarModalArticulo();
                }
            });
            
            console.log('PALABRA VIVA: Sistema de modal inicializado correctamente');
            console.log('PALABRA VIVA: Artículos disponibles:', Object.keys(ARTICULOS_DB).length);
        }
        
        // Inicializar cuando el DOM esté listo
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', inicializarSistemaModal);
        } else {
            inicializarSistemaModal();
        }
        
        console.log('PALABRA VIVA: Sistema de artículos cargado');
    </script>
</body>
</html>
