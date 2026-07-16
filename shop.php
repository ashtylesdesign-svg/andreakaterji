<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shop | En Construcción</title>
  <meta name="description" content="Próximamente: Journals, cursos y suplementos. Estamos preparando algo especial para ti." />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --color-primary: #481F71;
      --color-secondary: #6EC6D2;
      --color-accent: #A3C9A8;
      --color-gold: #D1B280;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 50%, #16213e 100%);
      color: #ffffff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }

    .background-orbs {
      position: fixed;
      inset: 0;
      z-index: 0;
      pointer-events: none;
    }

    .orb {
      position: absolute;
      border-radius: 50%;
      filter: blur(80px);
      opacity: 0.3;
      animation: float 20s ease-in-out infinite;
    }

    .orb-1 {
      width: 400px;
      height: 400px;
      background: var(--color-primary);
      top: -100px;
      left: -100px;
      animation-delay: 0s;
    }

    .orb-2 {
      width: 500px;
      height: 500px;
      background: var(--color-secondary);
      bottom: -150px;
      right: -150px;
      animation-delay: 5s;
    }

    .orb-3 {
      width: 350px;
      height: 350px;
      background: var(--color-accent);
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      animation-delay: 10s;
    }

    @keyframes float {
      0%, 100% { transform: translate(0, 0) scale(1); }
      33% { transform: translate(30px, -30px) scale(1.1); }
      66% { transform: translate(-30px, 30px) scale(0.9); }
    }

    .container {
      position: relative;
      z-index: 1;
      text-align: center;
      padding: 2rem;
      max-width: 800px;
    }

    .logo {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 3rem;
      background: linear-gradient(135deg, var(--color-secondary), var(--color-gold));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .icon {
      font-size: 5rem;
      margin-bottom: 2rem;
      animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.1); opacity: 0.8; }
    }

    h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      line-height: 1.2;
    }

    .gradient-text {
      background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    p {
      font-size: 1.25rem;
      line-height: 1.8;
      color: rgba(255, 255, 255, 0.8);
      margin-bottom: 3rem;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    .cta-buttons {
      display: flex;
      gap: 1.5rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .btn {
      padding: 1rem 2rem;
      border-radius: 50px;
      font-size: 1rem;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));
      color: white;
      border: none;
      box-shadow: 0 10px 30px rgba(72, 31, 113, 0.3);
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 15px 40px rgba(72, 31, 113, 0.4);
    }

    .btn-secondary {
      background: rgba(255, 255, 255, 0.1);
      color: white;
      border: 2px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
    }

    .btn-secondary:hover {
      background: rgba(255, 255, 255, 0.2);
      border-color: rgba(255, 255, 255, 0.3);
      transform: translateY(-2px);
    }

    .footer {
      position: fixed;
      bottom: 2rem;
      text-align: center;
      font-size: 0.9rem;
      color: rgba(255, 255, 255, 0.5);
      z-index: 1;
    }

    @media (max-width: 768px) {
      h1 {
        font-size: 2.5rem;
      }

      p {
        font-size: 1.1rem;
      }

      .icon {
        font-size: 4rem;
      }

      .cta-buttons {
        flex-direction: column;
        align-items: center;
      }

      .btn {
        width: 100%;
        max-width: 300px;
        justify-content: center;
      }
    }
  </style>
</head>
<body>
  <div class="background-orbs">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
  </div>

  <div class="container">
    <div class="logo">Andrea Katerji</div>
    
    <div class="icon">🚧</div>
    
    <h1>
      Estamos en <span class="gradient-text">Construcción</span>
    </h1>
    
    <p>
      Estamos preparando algo especial para ti. Pronto podrás explorar journals, cursos y suplementos 
      que te acompañarán en tu camino hacia el bienestar integral.
    </p>
    
    <div class="cta-buttons">
      <a href="index.php" class="btn btn-primary">
        ← Volver al Inicio
      </a>
      <a href="myowndoc.php" class="btn btn-secondary">
        Conocer MyOwnDoc
      </a>
    </div>
  </div>

  <div class="footer">
    © <?php echo date('Y'); ?> Andrea Katerji · Todos los derechos reservados.
  </div>
</body>
</html>
