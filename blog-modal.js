/**
 * PALABRA VIVA - SISTEMA DE MODAL PARA ARTÍCULOS
 * Solución limpia y funcional para abrir artículos en modal
 */

(function() {
    'use strict';
    
    console.log('🌟 Inicializando sistema de modal...');
    
    // Base de datos de artículos con contenido completo
    const ARTICULOS = {
        'periodo': {
            categoria: 'Salud Hormonal',
            titulo: 'Tu periodo no es el problema. Tu cuerpo está mandando una señal de auxilio.',
            contenido: `
                <p>Cada mes, millones de mujeres se toman un ibuprofeno, aprietan los dientes y esperan que pase. El dolor, los coágulos, el humor que cambia tres días antes, el hinchazón que parece inexplicable. Y lo que les dicen —si es que les dicen algo— es que eso es normal. Que las mujeres duelen. Que así es el periodo.</p>
                
                <p><strong>No. No es normal.</strong> Doloroso no significa normal. Y esta diferencia importa más de lo que creés.</p>
                
                <h2>¿Qué le está pasando realmente a tu cuerpo?</h2>
                
                <p>El ciclo menstrual es, en esencia, una conversación entre tu cerebro, tus ovarios y tu útero. Cuando esa conversación fluye bien, el periodo llega, hace lo que tiene que hacer, y se va en cuatro o cinco días sin mayor drama. Pero cuando hay interferencia en esa conversación —y hoy hay muchas fuentes de interferencia— el resultado es lo que la mayoría de las mujeres viven como "normal": dolor, irregularidad, síndrome premenstrual severo, coágulos.</p>
                
                <p>El principal culpable en la mayoría de los casos es la <strong>dominancia estrogénica</strong>. Este término suena técnico pero describe algo muy concreto: una situación en la que el estrógeno está elevado o actúa de manera excesiva en relación con la progesterona.</p>
                
                <blockquote style="border-left: 4px solid #481F71; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #481F71;">
                    Tu cuerpo no te está fallando. Tu cuerpo está respondiendo a un ambiente que lo sobrepasa.
                </blockquote>
                
                <h2>¿Qué se puede hacer?</h2>
                
                <p>La medicina funcional hace otra cosa: mira al sistema completo. Evalúa el estroboloma con un estudio de microbioma. Mide el metabolismo del estrógeno con un análisis de orina seco (DUTCH test). Y con esa información, construye un plan que va a la raíz.</p>
                
                <p><strong>No es magia. Es medicina que entiende que el cuerpo es un sistema conectado.</strong></p>
                
                <p style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, rgba(72, 31, 113, 0.05), rgba(110, 198, 210, 0.05)); border-radius: 12px; text-align: center;">
                    <strong>¿Querés entender qué le está pasando a tu cuerpo?</strong><br>
                    Seguime en <a href="https://instagram.com/myowndoc" target="_blank" style="color: #481F71; font-weight: 600;">@andreakaterji</a>
                </p>
            `
        },
        'cansancio': {
            categoria: 'Fatiga Crónica',
            titulo: 'Llevás 10 años cansada y te dijeron que es estrés.',
            contenido: `
                <p>Hay un tipo de agotamiento que no se resuelve con vacaciones. Que no mejora con dormir más el fin de semana. Es un cansancio que vive en el hueso.</p>
                
                <p><strong>No sos así. Pero alguien te convenció de que sí.</strong></p>
                
                <h2>Por qué el cansancio crónico femenino es sistemáticamente ignorado</h2>
                
                <p>En la consulta médica convencional, el agotamiento crónico en mujeres tiene dos destinos posibles. O se diagnostica como depresión y se prescribe un antidepresivo. O se atribuye al estrés.</p>
                
                <blockquote style="border-left: 4px solid #6EC6D2; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #6EC6D2;">
                    El cansancio que sentís no es tu culpa. Es una señal de que algo en tu sistema necesita atención.
                </blockquote>
                
                <h2>La inflamación crónica: el fuego invisible</h2>
                
                <p>La inflamación crónica de bajo grado es silenciosa. No duele. No se ve. Pero consume energía constantemente.</p>
                
                <h2>Qué podés hacer hoy</h2>
                
                <p>La solución es entender qué está pasando realmente en tu cuerpo y abordarlo desde la raíz.</p>
                
                <p style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, rgba(110, 198, 210, 0.05), rgba(58, 107, 115, 0.05)); border-radius: 12px; text-align: center;">
                    <strong>Seguime en <a href="https://instagram.com/myowndoc" target="_blank" style="color: #6EC6D2; font-weight: 600;">@andreakaterji</a></strong><br>
                    <span style="color: #6B7280; font-size: 0.9rem;">Medicina Sin Anestesia</span>
                </p>
            `
        },
        'cortisol': {
            categoria: 'Manejo del Estrés',
            titulo: 'El cortisol no es tu enemigo. Es que nunca aprendiste a manejarlo.',
            contenido: `
                <p>Si hay una hormona que recibe más críticas que el cortisol, no se me ocurre cuál es. Se habla de él como si fuera un intruso en el cuerpo, algo que hay que eliminar. Ese es el primer error.</p>
                
                <p><strong>El cortisol es esencial. Sin cortisol, morirías.</strong> El problema no es que exista. El problema es cuándo, cuánto y en qué ritmo aparece.</p>
                
                <h2>El ritmo circadiano del cortisol</h2>
                
                <p>El cortisol tiene un ritmo diario preciso y elegante. Cuando el ritmo se invierte —bajo en la mañana, alto en la noche— todo el sistema falla.</p>
                
                <blockquote style="border-left: 4px solid #6EC6D2; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #6EC6D2;">
                    El problema no es que tengas cortisol. El problema es cuándo lo tenés y en qué cantidad.
                </blockquote>
                
                <h2>Qué se puede hacer</h2>
                
                <p>Manejar el cortisol no significa eliminarlo. Significa respetar su ritmo.</p>
                
                <p style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, rgba(110, 198, 210, 0.05), rgba(163, 201, 168, 0.05)); border-radius: 12px; text-align: center;">
                    <strong>¿Querés aprender a entender tu cuerpo desde adentro?</strong><br>
                    Seguime en <a href="https://instagram.com/myowndoc" target="_blank" style="color: #6EC6D2; font-weight: 600;">@andreakaterji</a>
                </p>
            `
        },
        'memoria': {
            categoria: 'Salud Cerebral',
            titulo: 'No es que tenés mala memoria. Es que tu cerebro está inflamado.',
            contenido: `<p>Contenido del artículo sobre memoria cerebral...</p>`
        },
        'peso': {
            categoria: 'Metabolismo',
            titulo: 'Por qué engordás aunque comas poco y te mates en el gym.',
            contenido: `<p>Contenido del artículo sobre metabolismo...</p>`
        },
        'intestino': {
            categoria: 'Eje Intestino-Cerebro',
            titulo: 'Tu intestino y tus hormonas hablan entre sí. Y probablemente no se están llevando bien.',
            contenido: `<p>Contenido del artículo sobre intestino...</p>`
        },
        'atleta': {
            categoria: 'Ejercicio & Hormonas',
            titulo: 'El síndrome de la atleta femenina: cuando más ejercicio te cuesta más caro.',
            contenido: `<p>Contenido del artículo sobre atleta femenina...</p>`
        },
        'tiroides': {
            categoria: 'Salud Tiroidea',
            titulo: 'Tiroides \'normal\' no significa tiroides sana.',
            contenido: `<p>Contenido del artículo sobre tiroides...</p>`
        },
        'almidon': {
            categoria: 'Nutrición Funcional',
            titulo: 'Lo que el almidón resistente hace por tus hormonas y nadie te está enseñando a comer.',
            contenido: `<p>Contenido del artículo sobre almidón resistente...</p>`
        },
        'medicina-funcional': {
            categoria: 'Medicina Funcional',
            titulo: 'Medicina Funcional no es medicina alternativa. Es medicina con evidencia que va más profundo.',
            contenido: `<p>Contenido del artículo sobre medicina funcional...</p>`
        }
    };
    
    // Crear el modal en el DOM
    function crearModal() {
        const modalHTML = `
            <div id="blogModal" class="blog-modal">
                <div class="blog-modal-overlay"></div>
                <div class="blog-modal-container">
                    <button class="blog-modal-close" aria-label="Cerrar modal">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 6L6 18M6 6l12 12" stroke-linecap="round"/>
                        </svg>
                    </button>
                    <div class="blog-modal-content">
                        <div class="blog-modal-header">
                            <span class="blog-modal-categoria"></span>
                            <h2 class="blog-modal-titulo"></h2>
                            <div class="blog-modal-meta">
                                <span class="blog-modal-autor">Dra. Andrea Katerji</span>
                                <span class="blog-modal-fecha">Medicina Funcional</span>
                            </div>
                        </div>
                        <div class="blog-modal-body">
                            <div class="blog-modal-articulo"></div>
                        </div>
                    </div>
                </div>
            </div>
        `;
        
        document.body.insertAdjacentHTML('beforeend', modalHTML);
        console.log('✅ Modal creado en el DOM');
    }
    
    // Abrir modal con el artículo
    function abrirModal(articuloId) {
        console.log('📖 Abriendo artículo:', articuloId);
        
        const articulo = ARTICULOS[articuloId];
        
        if (!articulo) {
            console.error('❌ Artículo no encontrado:', articuloId);
            console.log('Artículos disponibles:', Object.keys(ARTICULOS));
            return;
        }
        
        const modal = document.getElementById('blogModal');
        if (!modal) {
            console.error('❌ Modal no encontrado en el DOM');
            return;
        }
        
        // Llenar contenido
        modal.querySelector('.blog-modal-categoria').textContent = articulo.categoria;
        modal.querySelector('.blog-modal-titulo').textContent = articulo.titulo;
        modal.querySelector('.blog-modal-articulo').innerHTML = articulo.contenido;
        
        // Mostrar modal
        modal.classList.add('activo');
        document.body.style.overflow = 'hidden';
        
        console.log('✅ Modal abierto exitosamente');
    }
    
    // Cerrar modal
    function cerrarModal() {
        const modal = document.getElementById('blogModal');
        if (modal) {
            modal.classList.remove('activo');
            document.body.style.overflow = '';
            console.log('✅ Modal cerrado');
        }
    }
    
    // Inicializar cuando el DOM esté listo
    function inicializar() {
        console.log('🚀 Inicializando sistema de modal...');
        
        // Crear el modal
        crearModal();
        
        // Event listener para botones de "Leer artículo"
        document.addEventListener('click', function(evento) {
            const boton = evento.target.closest('.btn-read-article');
            
            if (boton) {
                evento.preventDefault();
                evento.stopPropagation();
                
                const articuloId = boton.getAttribute('data-article');
                console.log('🖱️ Click en botón, ID:', articuloId);
                
                abrirModal(articuloId);
            }
        });
        
        // Event listener para cerrar modal
        document.addEventListener('click', function(evento) {
            if (evento.target.classList.contains('blog-modal-close') || 
                evento.target.closest('.blog-modal-close') ||
                evento.target.classList.contains('blog-modal-overlay')) {
                cerrarModal();
            }
        });
        
        // Cerrar con tecla ESC
        document.addEventListener('keydown', function(evento) {
            if (evento.key === 'Escape') {
                cerrarModal();
            }
        });
        
        console.log('✅ Sistema de modal inicializado correctamente');
        console.log('📚 Artículos disponibles:', Object.keys(ARTICULOS).length);
    }
    
    // Ejecutar cuando el DOM esté listo
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', inicializar);
    } else {
        inicializar();
    }
    
})();
