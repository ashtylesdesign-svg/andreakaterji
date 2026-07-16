<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Flow Method | Próximamente</title>
    <meta name="description" content="Algo extraordinario está por llegar. The Flow Method - En construcción.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <link rel="icon" type="image/png" href="theflowmethod/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="theflowmethod/favicon.svg" />
    <link rel="shortcut icon" href="theflowmethod/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="theflowmethod/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="TheFlowMethod" />
    <link rel="manifest" href="theflowmethod/site.webmanifest" />
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0f3460 0%, #16213e 50%, #0f3460 100%);
            min-height: 100vh;
            overflow: hidden;
            position: relative;
        }
        
        /* Animated gradient background */
        .gradient-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background: radial-gradient(circle at 20% 50%, rgba(209, 178, 128, 0.15) 0%, transparent 50%),
                        radial-gradient(circle at 80% 80%, rgba(58, 107, 115, 0.15) 0%, transparent 50%),
                        radial-gradient(circle at 40% 20%, rgba(230, 214, 184, 0.1) 0%, transparent 50%);
            animation: gradientShift 15s ease infinite;
        }
        
        @keyframes gradientShift {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.8; transform: scale(1.1); }
        }
        
        /* Floating particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }
        
        .particle {
            position: absolute;
            width: 3px;
            height: 3px;
            background: rgba(209, 178, 128, 0.6);
            border-radius: 50%;
            animation: float 20s infinite;
        }
        
        .particle:nth-child(1) { left: 10%; top: 20%; animation-delay: 0s; animation-duration: 15s; }
        .particle:nth-child(2) { left: 20%; top: 80%; animation-delay: 2s; animation-duration: 18s; }
        .particle:nth-child(3) { left: 30%; top: 40%; animation-delay: 4s; animation-duration: 22s; }
        .particle:nth-child(4) { left: 40%; top: 60%; animation-delay: 1s; animation-duration: 20s; }
        .particle:nth-child(5) { left: 50%; top: 30%; animation-delay: 3s; animation-duration: 17s; }
        .particle:nth-child(6) { left: 60%; top: 70%; animation-delay: 5s; animation-duration: 19s; }
        .particle:nth-child(7) { left: 70%; top: 50%; animation-delay: 2.5s; animation-duration: 21s; }
        .particle:nth-child(8) { left: 80%; top: 25%; animation-delay: 4.5s; animation-duration: 16s; }
        .particle:nth-child(9) { left: 90%; top: 65%; animation-delay: 1.5s; animation-duration: 23s; }
        .particle:nth-child(10) { left: 15%; top: 45%; animation-delay: 3.5s; animation-duration: 18s; }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0) translateX(0) scale(1);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            50% {
                transform: translateY(-100px) translateX(50px) scale(1.5);
                opacity: 0.8;
            }
        }
        
        /* Flow lines */
        .flow-lines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }
        
        .flow-line {
            position: absolute;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(209, 178, 128, 0.3), transparent);
            animation: flowMove 8s linear infinite;
        }
        
        .flow-line:nth-child(1) { top: 20%; width: 300px; left: -300px; animation-delay: 0s; }
        .flow-line:nth-child(2) { top: 50%; width: 400px; left: -400px; animation-delay: 3s; }
        .flow-line:nth-child(3) { top: 80%; width: 250px; left: -250px; animation-delay: 6s; }
        
        @keyframes flowMove {
            0% { left: -400px; }
            100% { left: 100%; }
        }
        
        /* Main container */
        .container {
            position: relative;
            z-index: 10;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            text-align: center;
        }
        
        /* Logo container with advanced animation */
        .logo-container {
            position: relative;
            margin-bottom: 3rem;
            animation: logoEntrance 2s ease-out;
        }
        
        @keyframes logoEntrance {
            0% {
                opacity: 0;
                transform: scale(0.5) rotate(-10deg);
            }
            60% {
                transform: scale(1.1) rotate(2deg);
            }
            100% {
                opacity: 1;
                transform: scale(1) rotate(0deg);
            }
        }
        
        /* Rotating rings around logo */
        .logo-rings {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 280px;
            height: 280px;
        }
        
        .ring {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 1px solid rgba(209, 178, 128, 0.3);
            border-radius: 50%;
            animation: rotate 20s linear infinite;
        }
        
        .ring:nth-child(1) {
            width: 280px;
            height: 280px;
            animation-duration: 20s;
        }
        
        .ring:nth-child(2) {
            width: 240px;
            height: 240px;
            animation-duration: 15s;
            animation-direction: reverse;
        }
        
        .ring:nth-child(3) {
            width: 200px;
            height: 200px;
            animation-duration: 25s;
        }
        
        @keyframes rotate {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }
        
        /* Logo glow effect */
        .logo-glow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(209, 178, 128, 0.3) 0%, transparent 70%);
            animation: pulse 4s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.5;
            }
            50% {
                transform: translate(-50%, -50%) scale(1.2);
                opacity: 0.8;
            }
        }
        
        .logo-img {
            position: relative;
            width: 180px;
            height: auto;
            filter: drop-shadow(0 0 30px rgba(209, 178, 128, 0.5));
            animation: logoFloat 6s ease-in-out infinite;
        }
        
        @keyframes logoFloat {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        
        /* Title */
        .title {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(2.5rem, 8vw, 5rem);
            font-weight: 600;
            color: #E6D6B8;
            margin-bottom: 1.5rem;
            letter-spacing: 2px;
            animation: titleFade 2s ease-out 0.5s both;
            text-shadow: 0 0 40px rgba(209, 178, 128, 0.4);
        }
        
        @keyframes titleFade {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Subtitle */
        .subtitle {
            font-size: clamp(1rem, 3vw, 1.5rem);
            color: rgba(230, 214, 184, 0.8);
            margin-bottom: 3rem;
            font-weight: 300;
            letter-spacing: 1px;
            animation: subtitleFade 2s ease-out 1s both;
        }
        
        @keyframes subtitleFade {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Decorative line */
        .decorative-line {
            width: 200px;
            height: 2px;
            background: linear-gradient(90deg, transparent, #D1B280, transparent);
            margin: 2rem auto;
            animation: lineExpand 2s ease-out 1.5s both;
        }
        
        @keyframes lineExpand {
            0% {
                width: 0;
                opacity: 0;
            }
            100% {
                width: 200px;
                opacity: 1;
            }
        }
        
        /* Message */
        .message {
            font-size: clamp(1rem, 2.5vw, 1.25rem);
            color: rgba(230, 214, 184, 0.7);
            max-width: 600px;
            line-height: 1.8;
            margin-bottom: 3rem;
            animation: messageFade 2s ease-out 2s both;
        }
        
        @keyframes messageFade {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Back button */
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 2.5rem;
            background: linear-gradient(135deg, rgba(209, 178, 128, 0.2), rgba(58, 107, 115, 0.2));
            border: 1px solid rgba(209, 178, 128, 0.4);
            color: #E6D6B8;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 50px;
            transition: all 0.4s ease;
            animation: btnFade 2s ease-out 2.5s both;
            position: relative;
            overflow: hidden;
        }
        
        .back-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(209, 178, 128, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }
        
        .back-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .back-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(209, 178, 128, 0.3);
            border-color: rgba(209, 178, 128, 0.8);
        }
        
        .back-btn span {
            position: relative;
            z-index: 1;
        }
        
        @keyframes btnFade {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Floating words */
        .floating-words {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 3;
            pointer-events: none;
        }
        
        .float-word {
            position: absolute;
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(1.5rem, 3vw, 2.5rem);
            color: rgba(209, 178, 128, 0.15);
            font-weight: 300;
            animation: wordFloat 20s ease-in-out infinite;
        }
        
        .float-word:nth-child(1) {
            top: 15%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .float-word:nth-child(2) {
            top: 25%;
            right: 15%;
            animation-delay: 4s;
        }
        
        .float-word:nth-child(3) {
            bottom: 20%;
            left: 15%;
            animation-delay: 8s;
        }
        
        .float-word:nth-child(4) {
            bottom: 30%;
            right: 10%;
            animation-delay: 12s;
        }
        
        @keyframes wordFloat {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
                opacity: 0;
            }
            10%, 90% {
                opacity: 0.15;
            }
            50% {
                transform: translateY(-30px) rotate(5deg);
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .logo-rings {
                width: 220px;
                height: 220px;
            }
            
            .ring:nth-child(1) { width: 220px; height: 220px; }
            .ring:nth-child(2) { width: 180px; height: 180px; }
            .ring:nth-child(3) { width: 140px; height: 140px; }
            
            .logo-img {
                width: 140px;
            }
            
            .float-word {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Animated background -->
    <div class="gradient-bg"></div>
    
    <!-- Particles -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    
    <!-- Flow lines -->
    <div class="flow-lines">
        <div class="flow-line"></div>
        <div class="flow-line"></div>
        <div class="flow-line"></div>
    </div>
    
    <!-- Floating words -->
    <div class="floating-words">
        <div class="float-word">Flow</div>
        <div class="float-word">Transformación</div>
        <div class="float-word">Conciencia</div>
        <div class="float-word">Movimiento</div>
    </div>
    
    <!-- Main content -->
    <div class="container">
        <div class="logo-container">
            <div class="logo-glow"></div>
            <div class="logo-rings">
                <div class="ring"></div>
                <div class="ring"></div>
                <div class="ring"></div>
            </div>
            <img src="assets/logo_TFM.png" alt="The Flow Method" class="logo-img">
        </div>
        
        <h1 class="title">Próximamente</h1>
        
        <div class="decorative-line"></div>
        
        <p class="subtitle">Algo extraordinario está por llegar</p>
        
        <p class="message">
            Estamos creando una experiencia única de transformación.<br>
            Un espacio donde el cuerpo, la mente y el alma se encuentran en perfecta armonía.
        </p>
        
        <a href="index.php" class="back-btn">
            <span>←</span>
            <span>Volver al Portal</span>
        </a>
    </div>
</body>
</html>
