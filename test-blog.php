<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Blog - Palabra Viva</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #f5f5f5; }
        .blog-card { background: white; padding: 20px; margin: 20px 0; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .btn-read-article { background: #481F71; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        .btn-read-article:hover { background: #6EC6D2; }
        
        /* Modal styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 9999;
            display: none;
            align-items: center;
            justify-content: center;
        }
        
        .modal-overlay.active {
            display: flex;
        }
        
        .modal-content {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            margin: 20px;
        }
        
        .modal-close {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #f0f0f0;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            font-size: 20px;
        }
        
        .modal-title {
            font-family: Georgia, serif;
            font-size: 2rem;
            color: #481F71;
            margin-bottom: 1rem;
        }
        
        .modal-category {
            background: linear-gradient(135deg, rgba(72,31,113,0.1), rgba(110,198,210,0.1));
            color: #481F71;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1rem;
        }
        
        .modal-text {
            line-height: 1.8;
            font-size: 1.1rem;
            color: #333;
        }
        
        .modal-text h2 {
            color: #481F71;
            font-family: Georgia, serif;
            font-size: 1.5rem;
            margin: 2rem 0 1rem;
        }
        
        .modal-text p {
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <h1>Test Blog - Palabra Viva</h1>
    <p>Esta es una versión simplificada para probar el modal.</p>
    
    <!-- Artículo 1 -->
    <div class="blog-card">
        <h3>Tu periodo no es el problema</h3>
        <p>Descubre qué te está diciendo tu ciclo menstrual sobre tu salud hormonal.</p>
        <button class="btn-read-article" data-article="periodo">Leer artículo</button>
    </div>
    
    <!-- Artículo 2 -->
    <div class="blog-card">
        <h3>Llevás 10 años cansada</h3>
        <p>El cansancio crónico tiene causas reales que la medicina convencional no está investigando.</p>
        <button class="btn-read-article" data-article="cansancio">Leer artículo</button>
    </div>
    
    <!-- Artículo 3 -->
    <div class="blog-card">
        <h3>El cortisol no es tu enemigo</h3>
        <p>Aprende a trabajar con tu cortisol, no en su contra, para recuperar tu energía.</p>
        <button class="btn-read-article" data-article="cortisol">Leer artículo</button>
    </div>

    <script>
        console.log('TEST BLOG: Script iniciado');
        
        // Contenido de los artículos
        const articulos = {
            'periodo': {
                categoria: 'Salud Hormonal',
                titulo: 'Tu periodo no es el problema. Tu cuerpo está mandando una señal de auxilio.',
                contenido: `
                    <p>Cada mes, millones de mujeres se toman un ibuprofeno, aprietan los dientes y esperan que pase. El dolor, los coágulos, el humor que cambia tres días antes, el hinchazón que parece inexplicable.</p>
                    
                    <p><strong>No. No es normal.</strong> Doloroso no significa normal.</p>
                    
                    <h2>¿Qué le está pasando realmente a tu cuerpo?</h2>
                    
                    <p>El ciclo menstrual es, en esencia, una conversación entre tu cerebro, tus ovarios y tu útero.</p>
                    
                    <h2>¿Qué se puede hacer?</h2>
                    
                    <p>La medicina funcional hace otra cosa: mira al sistema completo.</p>
                `
            },
            'cansancio': {
                categoria: 'Fatiga Crónica',
                titulo: 'Llevás 10 años cansada y te dijeron que es estrés.',
                contenido: `
                    <p>Hay un tipo de agotamiento que no se resuelve con vacaciones.</p>
                    
                    <p><strong>No sos así. Pero alguien te convenció de que sí.</strong></p>
                    
                    <h2>Por qué el cansancio crónico femenino es ignorado</h2>
                    
                    <p>En la consulta médica convencional, el agotamiento crónico en mujeres tiene dos destinos posibles.</p>
                `
            },
            'cortisol': {
                categoria: 'Manejo del Estrés',
                titulo: 'El cortisol no es tu enemigo. Es que nunca aprendiste a manejarlo.',
                contenido: `
                    <p>Si hay una hormona que recibe más críticas que el cortisol, no se me ocurre cuál es.</p>
                    
                    <p><strong>El cortisol es esencial. Sin cortisol, morirías.</strong></p>
                    
                    <h2>El ritmo circadiano del cortisol</h2>
                    
                    <p>El cortisol tiene un ritmo diario preciso y elegante.</p>
                `
            }
        };
        
        // Crear el modal
        function crearModal() {
            console.log('TEST BLOG: Creando modal...');
            const modalHTML = `
                <div class="modal-overlay" id="articuloModal">
                    <div class="modal-content">
                        <button class="modal-close" onclick="cerrarModal()">×</button>
                        <div class="modal-category" id="modalCategoria"></div>
                        <h1 class="modal-title" id="modalTitulo"></h1>
                        <div class="modal-text" id="modalContenido"></div>
                    </div>
                </div>
            `;
            document.body.insertAdjacentHTML('beforeend', modalHTML);
            console.log('TEST BLOG: Modal creado');
        }
        
        // Abrir modal
        function abrirModal(id) {
            console.log('TEST BLOG: Abriendo modal para:', id);
            const articulo = articulos[id];
            if (!articulo) {
                alert('Artículo no encontrado');
                return;
            }
            
            const modal = document.getElementById('articuloModal');
            document.getElementById('modalCategoria').textContent = articulo.categoria;
            document.getElementById('modalTitulo').textContent = articulo.titulo;
            document.getElementById('modalContenido').innerHTML = articulo.contenido;
            
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
            console.log('TEST BLOG: Modal abierto');
        }
        
        // Cerrar modal
        function cerrarModal() {
            console.log('TEST BLOG: Cerrando modal');
            const modal = document.getElementById('articuloModal');
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }
        
        // Inicializar
        document.addEventListener('DOMContentLoaded', function() {
            console.log('TEST BLOG: DOM cargado');
            
            // Crear modal
            crearModal();
            
            // Event listener para botones
            document.addEventListener('click', function(e) {
                const boton = e.target.closest('.btn-read-article');
                if (boton) {
                    e.preventDefault();
                    const id = boton.getAttribute('data-article');
                    console.log('TEST BLOG: Click en botón:', id);
                    abrirModal(id);
                }
            });
            
            // Cerrar modal al hacer click fuera
            document.getElementById('articuloModal').addEventListener('click', function(e) {
                if (e.target === this) {
                    cerrarModal();
                }
            });
            
            // Cerrar con ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    cerrarModal();
                }
            });
            
            console.log('TEST BLOG: Todo inicializado correctamente');
        });
    </script>
</body>
</html>
