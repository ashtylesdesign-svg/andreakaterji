// ===================================
// PALABRA VIVA - INTERACTIVE BLOG
// ===================================

// Mobile Navigation Toggle
const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelector('.nav-links');

if (navToggle) {
    navToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        navToggle.classList.toggle('active');
    });
}

// Filter Functionality
const filterTabs = document.querySelectorAll('.filter-tab');
const blogCards = document.querySelectorAll('.blog-card');

filterTabs.forEach(tab => {
    tab.addEventListener('click', () => {
        // Remove active class from all tabs
        filterTabs.forEach(t => t.classList.remove('active'));
        // Add active class to clicked tab
        tab.classList.add('active');
        
        const filter = tab.getAttribute('data-filter');
        
        // Filter cards
        blogCards.forEach(card => {
            if (filter === 'all') {
                card.style.display = 'block';
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 10);
            } else {
                const category = card.getAttribute('data-category');
                if (category === filter) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 10);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            }
        });
    });
});

// Subscribe Form
const subscribeForm = document.getElementById('subscribeForm');

if (subscribeForm) {
    subscribeForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const formData = new FormData(subscribeForm);
        const name = formData.get('name') || subscribeForm.querySelector('input[type="text"]').value;
        const email = formData.get('email') || subscribeForm.querySelector('input[type="email"]').value;
        
        // Simple validation
        if (!name || !email) {
            alert('Por favor completa todos los campos');
            return;
        }
        
        // Show success message (in production, this would send to a backend)
        const button = subscribeForm.querySelector('.btn-subscribe');
        const originalText = button.innerHTML;
        
        button.innerHTML = '<span>✓ ¡Suscrito!</span>';
        button.style.background = 'linear-gradient(135deg, #10B981, #059669)';
        
        setTimeout(() => {
            button.innerHTML = originalText;
            button.style.background = '';
            subscribeForm.reset();
        }, 3000);
        
        console.log('Subscription:', { name, email });
    });
}

// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Navbar scroll effect
let lastScroll = 0;
const nav = document.querySelector('.blog-nav');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 100) {
        nav.style.boxShadow = '0 4px 20px rgba(72, 31, 113, 0.1)';
    } else {
        nav.style.boxShadow = 'none';
    }
    
    lastScroll = currentScroll;
});

// Intersection Observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe blog cards
blogCards.forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(30px)';
    card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(card);
});

// Load More functionality
const loadMoreBtn = document.querySelector('.btn-load-more');

if (loadMoreBtn) {
    loadMoreBtn.addEventListener('click', () => {
        // In production, this would load more posts from backend
        loadMoreBtn.innerHTML = '<span>Cargando...</span>';
        
        setTimeout(() => {
            loadMoreBtn.innerHTML = '<span>No hay más artículos</span>';
            loadMoreBtn.disabled = true;
            loadMoreBtn.style.opacity = '0.5';
            loadMoreBtn.style.cursor = 'not-allowed';
        }, 1000);
    });
}

// Book Download Functionality
const downloadButtons = document.querySelectorAll('.btn-download');

downloadButtons.forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        const book = button.getAttribute('data-book');
        const format = button.getAttribute('data-format');
        
        // Show download message
        const originalHTML = button.innerHTML;
        button.innerHTML = '<span>Descargando...</span>';
        button.disabled = true;
        
        // Simulate download (in production, this would trigger actual file download)
        setTimeout(() => {
            // Create download link
            const fileName = `${book}.${format}`;
            const filePath = `assets/books/${fileName}`;
            
            // Trigger download
            const link = document.createElement('a');
            link.href = filePath;
            link.download = fileName;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            
            // Reset button
            button.innerHTML = '<span>✓ Descargado</span>';
            setTimeout(() => {
                button.innerHTML = originalHTML;
                button.disabled = false;
            }, 2000);
        }, 500);
    });
});

// Article Modal Functionality
function initArticleModal() {
    const articleModal = document.getElementById('articleModal');
    const readArticleButtons = document.querySelectorAll('.btn-read-article');
    const modalClose = document.querySelector('.modal-close');
    const modalOverlay = document.querySelector('.modal-overlay');

    console.log('Modal elements:', {
        modal: articleModal,
        buttons: readArticleButtons.length,
        close: modalClose,
        overlay: modalOverlay
    });

// Article content database (placeholder - you'll replace with actual content)
const articleContent = {
    'periodo': {
        category: 'Salud Hormonal',
        title: 'Tu periodo no es el problema. Tu cuerpo está mandando una señal de auxilio.',
        content: `
            <p>Cada mes, millones de mujeres se toman un ibuprofeno, aprietan los dientes y esperan que pase. El dolor, los coágulos, el humor que cambia tres días antes, el hinchazón que parece inexplicable. Y lo que les dicen —si es que les dicen algo— es que eso es normal. Que las mujeres duelen. Que así es el periodo.</p>
            
            <p><strong>No. No es normal.</strong> Doloroso no significa normal. Y esta diferencia importa más de lo que creés.</p>
            
            <h2>¿Qué le está pasando realmente a tu cuerpo?</h2>
            
            <p>El ciclo menstrual es, en esencia, una conversación entre tu cerebro, tus ovarios y tu útero. Cuando esa conversación fluye bien, el periodo llega, hace lo que tiene que hacer, y se va en cuatro o cinco días sin mayor drama. Pero cuando hay interferencia en esa conversación —y hoy hay muchas fuentes de interferencia— el resultado es lo que la mayoría de las mujeres viven como "normal": dolor, irregularidad, síndrome premenstrual severo, coágulos.</p>
            
            <p>El principal culpable en la mayoría de los casos es la <strong>dominancia estrogénica</strong>. Este término suena técnico pero describe algo muy concreto: una situación en la que el estrógeno está elevado o actúa de manera excesiva en relación con la progesterona. El estrógeno, cuando está en balance, es una hormona poderosa y necesaria. Es la que construye el endometrio, la que nos da energía en la primera mitad del ciclo, la que contribuye a la salud cardiovascular y ósea. Pero cuando domina sin oposición, se convierte en el motor de inflamación, dolor y proliferación celular que muchas mujeres experimentan mes a mes.</p>
            
            <blockquote style="border-left: 4px solid #481F71; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #481F71;">
                Doloroso no significa normal. Y esta diferencia importa más de lo que creés.
            </blockquote>
            
            <h2>El estroboloma: cuando tu intestino controla tus hormonas</h2>
            
            <p>Hay algo que la mayoría de los ginecólogos no te van a mencionar en una consulta de 15 minutos: tus hormonas no solo dependen de tus ovarios. Dependen también de tu intestino. Específicamente, de un conjunto de bacterias intestinales llamado <strong>estroboloma</strong>, cuya función es metabolizar el estrógeno circulante y decidir si este se recicla o se elimina.</p>
            
            <p>Cuando el estroboloma está en mal estado —por el uso frecuente de antibióticos, una dieta pobre en fibra, el estrés crónico o el alcohol— produce una enzima llamada <strong>beta-glucuronidasa</strong> en exceso. Esta enzima "desconjuga" el estrógeno que estaba listo para ser eliminado, lo manda de vuelta a la circulación, y tenés más estrógeno del que necesitás. El resultado: dominancia estrogénica, aunque tus ovarios estén funcionando perfectamente.</p>
            
            <p>No se trata de un problema ginecológico. Se trata de un problema del ecosistema intestinal. Y se aborda de forma muy diferente.</p>
            
            <h2>El hígado: el filtro que nadie cuida</h2>
            
            <p>Tu hígado tiene cientos de funciones. Una de las más importantes —y una de las más ignoradas— es la desintoxicación del estrógeno. Para que el estrógeno pueda salir de tu cuerpo, tiene que pasar por dos fases de metabolismo hepático. Si tu hígado está congestionado —por el alcohol, el exceso de fructosa, el sedentarismo, los disruptores endocrinos del ambiente— ese proceso se enlentece. El estrógeno se acumula.</p>
            
            <p>¿Y qué sobrecarga al hígado en las mujeres modernas? Básicamente todo: el vino de los viernes, los plásticos en los que guardás la comida, los pesticidas en las verduras no orgánicas, la píldora anticonceptiva que tomaste por diez años, el paracetamol que te tomás cuando te duele la cabeza. No digo que nada de eso esté mal en sí mismo. Digo que sumado, tiene un costo silencioso.</p>
            
            <h2>El cortisol: el ladrón de progesterona</h2>
            
            <p>El tercer actor en este drama hormonal es el cortisol. La progesterona —la hormona que balancea al estrógeno, la que ayuda a mantener el embarazo, la que produce el efecto calmante en la segunda mitad del ciclo— se fabrica a partir del mismo precursor que el cortisol: la pregnenolona.</p>
            
            <p>Cuando estás bajo estrés crónico, tu cuerpo tiene una prioridad clara: sobrevivir. Y para sobrevivir, necesita cortisol. Entonces roba la pregnenolona que iba a convertirse en progesterona y la convierte en cortisol. El resultado: menos progesterona. Y con menos progesterona, el estrógeno domina. Esto se llama, literalmente, <strong>"robo de progesterona"</strong> o <em>pregnenolone steal</em>. No es metáfora. Es bioquímica.</p>
            
            <blockquote style="border-left: 4px solid #6EC6D2; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #3A6B73;">
                Tu cuerpo no te está fallando. Tu cuerpo está respondiendo a un ambiente que lo sobrepasa.
            </blockquote>
            
            <h2>¿Qué se puede hacer?</h2>
            
            <p>La respuesta convencional a un periodo doloroso suele ser la misma: anticonceptivos orales para "regular" el ciclo, antiinflamatorios para el dolor, y si hay endometriosis, eventualmente cirugía. Nada de esto está mal en el contexto correcto. Pero ninguno de estos abordajes le pregunta al cuerpo qué está pasando.</p>
            
            <p>La medicina funcional hace otra cosa: mira al sistema completo. Evalúa el estroboloma con un estudio de microbioma. Mide el metabolismo del estrógeno con un análisis de orina seco (DUTCH test). Evalúa la carga hepática con marcadores específicos. Mide el cortisol salival a lo largo del día para ver el ritmo del eje HPA. Y con esa información, construye un plan que va a la raíz.</p>
            
            <p>Ese plan puede incluir cambios en la alimentación —más fibra, menos alcohol, reducción de disruptores endocrinos—, suplementación específica —DIM, magnesio, zinc, vitamina B6, adaptógenos—, trabajo con el sistema nervioso para bajar el tono de alarma crónico, y en algunos casos, soporte hormonal bioidentical.</p>
            
            <p><strong>No es magia. Es medicina que entiende que el cuerpo es un sistema conectado, y que no podés arreglar una parte sin entender el todo.</strong></p>
            
            <p style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, rgba(72, 31, 113, 0.05), rgba(110, 198, 210, 0.05)); border-radius: 12px;">
                <strong>¿Querés entender qué le está pasando a tu cuerpo?</strong><br>
                Seguime como <a href="https://instagram.com/myowndoc" target="_blank" style="color: #481F71; font-weight: 600;">@andreakaterji</a> para más contenido sin anestesia.
            </p>
        `
    },
    'cansancio': {
        category: 'Fatiga Crónica',
        title: 'Llevás 10 años cansada y te dijeron que es estrés.',
        content: `
            <p>Hay un tipo de agotamiento que no se resuelve con vacaciones. Que no mejora con dormir más el fin de semana. Que no responde al café, al ejercicio ni a la sugerencia bien intencionada de "tomártelo con calma". Es un cansancio que vive en el hueso. Que te hace abrir los ojos por la mañana sintiéndote igual que cuando te acostaste. Que te convence, con el tiempo, de que simplemente sos así.</p>
            
            <p><strong>No sos así. Pero alguien te convenció de que sí.</strong></p>
            
            <h2>Por qué el cansancio crónico femenino es sistemáticamente ignorado</h2>
            
            <p>En la consulta médica convencional, el agotamiento crónico en mujeres tiene dos destinos posibles. O se diagnostica como depresión y se prescribe un antidepresivo. O se atribuye al estrés, al ritmo de vida, a "hacer demasiado", y la mujer se va con una palmada en el hombro y la sugerencia de meditar.</p>
            
            <p>En ambos casos, nadie midió nada. Nadie buscó la causa. Nadie le preguntó al cuerpo qué está tratando de decir.</p>
            
            <p>El cansancio crónico femenino tiene causas identificables, medibles y tratables. Tres de las más frecuentes son la disfunción del eje HPA, la tiroidea subclínica y la deficiencia nutricional silenciosa. Las tres se detectan con laboratorio. Las tres responden al tratamiento. Las tres se ignoran sistemáticamente.</p>
            
            <blockquote style="border-left: 4px solid #3A6B73; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #3A6B73;">
                El cansancio crónico no es un defecto de carácter. Es una señal bioquímica que merece ser investigada.
            </blockquote>
            
            <h2>El eje HPA: la central de mando que se agota</h2>
            
            <p>El eje HPA <strong>hipotálamo, hipófisis, glándula suprarrenal</strong> es el sistema de gestión del estrés del cuerpo. Cuando percibís una amenaza, real o percibida, este eje se activa: el hipotálamo manda una señal a la hipófisis, la hipófisis le ordena a las suprarrenales que liberen cortisol, y el cortisol moviliza recursos para enfrentar el peligro.</p>
            
            <p>Eso es exactamente lo que debe pasar. El problema ocurre cuando el peligro nunca desaparece. Cuando la amenaza es el trabajo, la deuda, la pareja, los hijos, las noticias, el ruido constante de una vida moderna sin pausa. El eje HPA no distingue entre un depredador y un email sin responder a las 11 de la noche. Para él, todo es urgente. Y cuando todo es urgente durante años, el sistema empieza a fallar.</p>
            
            <p>Primero el cortisol sube demasiado. Después se aplana. Finalmente, puede invertirse: bajo en la mañana <strong>cuando más necesitás</strong> y alto en la noche <strong>cuando necesitás dormir</strong>. El resultado es ese cuadro que tanta mujeres conocen: incapaz de levantarse, incapaz de dormir, incapaz de funcionar de manera sostenida. Eso no es estrés. Eso es disfunción del eje HPA, y se puede medir con cortisol salival en cuatro momentos del día.</p>
            
            <h2>La tiroides subclínica: el diagnóstico que te perdiste</h2>
            
            <p>La tiroides es la glándula que regula el metabolismo, la temperatura corporal, el estado de ánimo, la velocidad del tránsito intestinal, la caída del cabello y, sí, los niveles de energía. Cuando funciona mal, casi todo lo hace mal.</p>
            
            <p>El problema es cómo se diagnostica la disfunción tiroidea en la medicina convencional. El estándar es medir la TSH <strong>la hormona que le dice a la tiroides cuánto trabajar</strong> y si está dentro del "rango normal", se cierra el caso. Pero el rango normal de TSH en la mayoría de los laboratorios va hasta 4.5 o incluso 5.0 mIU/L. Numerosos estudios de medicina funcional y endocrinología integrativa sugieren que muchas personas empiezan a tener síntomas con TSH por encima de 2.5.</p>
            
            <p>Además, la TSH sola no cuenta la historia completa. Lo que importa es cuánta T3 libre <strong>la hormona activa</strong> está llegando a tus células. Una persona puede tener TSH normal, T4 normal, y aun así tener T3 baja porque la enzima deiodinasa que convierte T4 en T3 está bloqueada por inflamación, deficiencia de selenio o estrés crónico. Sin medir T3 libre, T4 libre y anticuerpos TPO, no sabés lo que tenés.</p>
            
            <h2>Nutrición: lo que falta que no se ve</h2>
            
            <p>El hierro, el magnesio, la vitamina D, la vitamina B12 y el zinc son los cinco grandes déficits nutricionales asociados al agotamiento crónico femenino. Todos son fácilmente medibles. Todos son tratables. Y todos son subestimados.</p>
            
            <p>La ferritina baja <strong>el reservorio de hierro</strong> puede causar fatiga severa incluso cuando la hemoglobina está normal. El "rango normal" de ferritina en muchos laboratorios baja hasta 12 o incluso 10 ng/mL. Desde medicina funcional, una ferritina óptima para una mujer debería estar por encima de 70-100 ng/mL. La diferencia entre esos números es la diferencia entre sentirte persona o arrastrarte.</p>
            
            <blockquote style="border-left: 4px solid #D1B280; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #D1B280;">
                No se trata de aceptar el cansancio. Se trata de entender por qué está ahí y hacer algo al respecto.
            </blockquote>
            
            <h2>El camino hacia adelante</h2>
            
            <p>Si llevás años cansada y te dijeron que es estrés, merecés una segunda opinión. Merecés que alguien mida tu cortisol salival en cuatro puntos del día, tu panel tiroideo completo, tu ferritina, tu vitamina D, tu B12, tu zinc, tu magnesio eritrocitario. Merecés que alguien se siente a leer esos resultados contigo y te explique qué está pasando realmente.</p>
            
            <p>Eso es exactamente lo que hace la medicina funcional. No adivina. No descarta. Mide, interpreta, y construye un plan personalizado que va a la raíz del problema.</p>
            
            <p style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, rgba(58, 107, 115, 0.05), rgba(209, 178, 128, 0.05)); border-radius: 12px; text-align: center;">
                <strong>Seguime en <a href="https://instagram.com/myowndoc" target="_blank" style="color: #3A6B73; font-weight: 600;">@andreakaterji</a></strong><br>
                <span style="color: #6B7280; font-size: 0.9rem;">Medicina Sin Anestesia · Lo que te duele escuchar es lo que necesitás oír.</span>
            </p>
        `
    },
    'cortisol': {
        category: 'Manejo del Estrés',
        title: 'El cortisol no es tu enemigo. Es que nunca aprendiste a manejarlo.',
        content: `
            <p>Si hay una hormona que recibe más críticas que el cortisol, no se me ocurre cuál es. "Tengo el cortisol por las nubes", "el cortisol me está matando", "hay que bajar el cortisol". Se habla de él como si fuera un intruso en el cuerpo, algo que hay que eliminar. Ese es el primer error.</p>
            
            <p><strong>El cortisol es esencial. Sin cortisol, morirías.</strong> El problema no es que exista. El problema es cuándo, cuánto y en qué ritmo aparece.</p>
            
            <h2>Qué es el cortisol y para qué sirve realmente</h2>
            
            <p>El cortisol es una hormona glucocorticoide producida por la corteza de las glándulas suprarrenales. Su función principal es mobilizar energía ante una demanda: sube la glucosa en sangre, agudiza la atención, suprime temporalmente procesos no urgentes como la digestión o la reproducción, y prepara al cuerpo para responder. Es, en esencia, la hormona de la supervivencia.</p>
            
            <p>Pero el cortisol también tiene funciones que rara vez se mencionan: regula la inflamación, modula el sistema inmune, influye en el estado de ánimo, facilita la consolidación de memorias bajo estrés y contribuye al mantenimiento de la presión arterial. <strong>Un cortisol bien regulado no es el enemigo. Es un aliado poderoso.</strong></p>
            
            <h2>El ritmo circadiano del cortisol: lo que todo el mundo ignora</h2>
            
            <p>El cortisol tiene un ritmo diario preciso y elegante. Debería estar en su pico máximo aproximadamente 30-45 minutos después de despertar <strong>lo que se llama el Cortisol Awakening Response (CAR)</strong> y luego descender de manera gradual a lo largo del día, llegando a su nivel más bajo en la noche. Este ritmo no es opcional. Es esencial para que decenas de procesos biológicos funcionen correctamente.</p>
            
            <p>Cuando el ritmo se invierte <strong>bajo en la mañana, alto en la noche</strong> todo el sistema falla. La persona no puede despertar, arrastra el día con niebla mental, y cuando finalmente llega la noche y debería dormir, está activada, rumiando, incapaz de apagar. Eso no es "ser noctámbula". Es un eje HPA disfuncional.</p>
            
            <blockquote style="border-left: 4px solid #6EC6D2; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #6EC6D2;">
                El problema no es que tengas cortisol. El problema es cuándo lo tenés y en qué cantidad.
            </blockquote>
            
            <h2>Qué invierte el ritmo del cortisol</h2>
            
            <p>Tres son los grandes disruptores del ritmo circadiano del cortisol en mujeres: el estrés crónico sin recuperación, el entrenamiento de alta intensidad en exceso, y la privación de sueño acumulada.</p>
            
            <p>El estrés crónico mantiene el eje HPA en modo activación constante. Al principio, el cortisol sube demasiado. Con el tiempo, las glándulas suprarrenales no pueden sostener ese nivel de producción, y el cortisol empieza a aplanarse o a invertir su ritmo. La persona pasa de estar ansiosa e hiperactiva a estar aplastada y agotada. Ambas etapas son el mismo problema en distintas fases.</p>
            
            <p>El entrenamiento de alta intensidad es un estresor fisiológico legítimo. Bien dosificado, mejora la sensibilidad a la insulina, la composición corporal y el estado de ánimo. Mal dosificado <strong>sin recuperación adecuada, sin suficientes calorías, sin sueño reparador</strong> es otro factor que mantiene el cortisol elevado de manera crónica. Es una de las razones por las que hay mujeres que se matan entrenando y aun así no mejoran su cuerpo ni su energía.</p>
            
            <p>La privación de sueño, incluso parcial y acumulada, eleva el cortisol. Un estudio clásico mostró que dormir 6 horas en lugar de 8 durante dos semanas produce niveles de cortisol y deterioro cognitivo equivalentes a 24 horas sin dormir. Tu cuerpo lleva la cuenta aunque vos no lo hagas.</p>
            
            <h2>Cómo se mide el cortisol realmente</h2>
            
            <p>El error más común en la medicina convencional es medir el cortisol en un solo punto <strong>generalmente en la mañana, en sangre</strong> y declarar que "está normal". Pero un único punto de medición no te dice nada sobre el ritmo. Es como intentar entender el océano mirando una sola ola.</p>
            
            <p>La herramienta gold standard para evaluar el eje HPA es el cortisol salival en cuatro puntos: al despertar, 30 minutos después, al mediodía y en la noche. Esta curva te da la forma real del ritmo circadiano del cortisol. Y te permite intervenir con precisión: si el problema es el pico matutino, el abordaje es diferente que si el problema es el cortisol nocturno elevado.</p>
            
            <h2>Qué se puede hacer</h2>
            
            <p>Manejar el cortisol no significa eliminarlo. Significa respetar su ritmo. Algunas de las intervenciones más respaldadas por evidencia incluyen: exposición a luz solar en los primeros 30 minutos después de despertar para anclar el ritmo circadiano, entrenamiento físico dosificado con períodos de recuperación genuinos, adaptógenos como la ashwagandha o la rhodiola con evidencia de modulación del eje HPA, magnesio en la noche para facilitar el descenso del cortisol y mejorar el sueño, y reducción de estresores digitales en las horas nocturnas.</p>
            
            <p>Pero sobre todo: aprender a reconocer que el descanso no es un lujo. Es una necesidad fisiológica sin la cual el eje HPA no puede regularse. En nuestra cultura, eso sigue siendo radical.</p>
            
            <p style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, rgba(110, 198, 210, 0.05), rgba(163, 201, 168, 0.05)); border-radius: 12px; text-align: center;">
                <strong>¿Querés aprender a entender tu cuerpo desde adentro?</strong><br>
                Seguime en <a href="https://instagram.com/myowndoc" target="_blank" style="color: #6EC6D2; font-weight: 600;">@andreakaterji</a>
            </p>
        `
    },
    'memoria': {
        category: 'Salud Cerebral',
        title: 'No es que tenés mala memoria. Es que tu cerebro está inflamado.',
        content: `
            <p>Se llama brain fog, niebla mental, o simplemente "no soy la misma de antes". La incapacidad de terminar un pensamiento, de encontrar la palabra justa, de concentrarse más de veinte minutos, de recordar qué ibas a buscar a la cocina. Y lo que te dicen <strong>cuando te lo dicen</strong> es que es la edad, el estrés, la menopausia, la maternidad. Como si perder claridad mental fuera simplemente parte del paquete de ser mujer adulta.</p>
            
            <p><strong>No lo es.</strong> Y hay tres causas raíz que la medicina convencional raramente une bajo el mismo diagnóstico: inflamación sistémica de bajo grado, intestino permeable, y resistencia a la insulina silenciosa. Las tres se retroalimentan. Las tres se pueden medir. Las tres responden al tratamiento.</p>
            
            <h2>Inflamación crónica: el fuego que nadie ve</h2>
            
            <p>La inflamación aguda es visible y tiene sentido: te cortás un dedo, se hincha, duele, se cura. La inflamación crónica de bajo grado es lo opuesto: es silenciosa, persistente, y no produce síntomas llamativos. Lo que produce es un deterioro gradual de múltiples sistemas, incluyendo el cerebro.</p>
            
            <p>El cerebro tiene su propio sistema inmune, compuesto por células llamadas <strong>microglía</strong>. Cuando hay señales inflamatorias circulando de manera constante <strong>citoquinas proinflamatorias como IL-6, IL-1ß, TNF-á</strong>, la microglía se activa. Y una microglía crónicamente activada interfiere con la transmisión neuronal, reduce la neuroplasticidad, altera la producción de neurotransmisores y produce exactamente lo que se siente como niebla mental.</p>
            
            <p>Las fuentes más comunes de inflamación crónica de bajo grado en mujeres son: alimentación ultraprocessada, exceso de azúcar y grasas trans, sobrepeso visceral, estrés psicológico sostenido, disrupción del sueño, toxinas ambientales, y el intestino permeable <strong>del que hablamos a continuación</strong>.</p>
            
            <blockquote style="border-left: 4px solid #A3C9A8; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #A3C9A8;">
                La niebla mental no es un signo de envejecimiento. Es una respuesta inflamatoria que tiene origen y tiene solución.
            </blockquote>
            
            <h2>Intestino permeable: la puerta que no debería estar abierta</h2>
            
            <p>El intestino tiene una barrera epitelial cuya función es selectiva: dejar pasar nutrientes y bloquear el paso de bacterias, toxinas y partículas no digeridas. Cuando esa barrera se daña <strong>por antibióticos, alcohol, estrés, gluten en personas susceptibles, o simplemente una dieta baja en fibra y alta en ultraprocesados</strong>, se produce lo que se llama hiperpermeabilidad intestinal o "leaky gut".</p>
            
            <p>Cuando la barrera es permeable, las lipopolisacáridos <strong>fragmentos de la pared de bacterias gram-negativas</strong> pasan al torrente sanguíneo. El sistema inmune los reconoce como amenaza y monta una respuesta inflamatoria. Esa inflamación cruza la barrera hematoencefálica <strong>que también es permeable cuando hay inflamación sistémica</strong> y llega al cerebro.</p>
            
            <p>El resultado es neuroinflammation. Y la neuroinflammation produce exactamente los síntomas que la mayoría de las mujeres atribuyen a "la edad": dificultad de concentración, fatiga mental, cambios de humor, pérdida de memoria de corto plazo.</p>
            
            <h2>Resistencia a la insulina silenciosa: el cerebro también necesita glucosa</h2>
            
            <p>El cerebro consume aproximadamente el 20% de la glucosa total del cuerpo, a pesar de representar solo el 2% del peso corporal. Para que la glucosa entre en las neuronas, necesita señalización de insulina. Cuando hay resistencia a la insulina <strong>incluso leve, incluso prediabética, incluso "normal" en los análisis convencionales</strong>, las neuronas empiezan a estar sub-alimentadas.</p>
            
            <p>La resistencia a la insulina cerebral ha sido llamada por algunos investigadores como <strong>"diabetes tipo 3"</strong>, y su relación con el deterioro cognitivo es uno de los campos de investigación más activos en neurología. Pero no necesitás tener diabetes para que tu cerebro esté recibiendo menos glucosa de la que necesita. El proceso empieza años antes del diagnóstico.</p>
            
            <p>Los marcadores que hay que medir no son solo la glucosa en ayunas: son la insulina en ayunas, la hemoglobina glicosilada (HbA1c), el índice HOMA-IR. Esos son los indicadores reales de qué tan bien está manejando tu cuerpo el azúcar.</p>
            
            <h2>Qué podés hacer hoy</h2>
            
            <p>Reducir la inflamación sistémica, reparar la barrera intestinal y mejorar la sensibilidad a la insulina son objetivos concretos y alcanzables. No requieren medicamentos de por vida ni procedimientos invasivos. Requieren información y consistencia.</p>
            
            <p>Algunos puntos de partida respaldados por evidencia: reducir el azúcar añadida y los ultraprocesados, incorporar alimentos ricos en polifenoles <strong>frutas oscuras, cúrcuma, aceite de oliva extra virgen</strong>, consumir suficiente fibra para alimentar el microbioma, incorporar omega-3 de fuentes de calidad, mejorar el sueño de manera prioritaria, y considerar suplementación de L-glutamina para la barrera intestinal, en el contexto de una evaluación individualizada.</p>
            
            <p style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, rgba(163, 201, 168, 0.05), rgba(110, 198, 210, 0.05)); border-radius: 12px; text-align: center;">
                <strong>Medicina funcional para mujeres que quieren entender su cuerpo.</strong><br>
                Seguime en <a href="https://instagram.com/myowndoc" target="_blank" style="color: #A3C9A8; font-weight: 600;">@andreakaterji</a>
            </p>
        `
    },
    'peso': {
        category: 'Metabolismo',
        title: 'Por qué engordás aunque comas poco y te mates en el gym.',
        content: `
            <p>Si alguna vez te pesaste después de una semana de comer "perfecto" y entrenar todos los días y viste que la balanza no se movió <strong>o peor, que subió</strong>, sabés exactamente de qué estoy hablando. Esa sensación de traición. De que tu cuerpo juega para el otro equipo.</p>
            
            <p>No es tu imaginación. No es falta de voluntad. Y definitivamente no se resuelve comiendo menos y moverte más. Lo que está pasando tiene nombre, tiene causa y tiene solución. Pero ninguna de esas cosas vas a encontrarla en una app de calorías ni en el plan de entrenamiento de tu influencer de turno.</p>
            
            <h2>El modelo de calorías in-calorías out: por qué falla en mujeres</h2>
            
            <p>El modelo de balance calórico <strong>si gastas más de lo que comes, bajás de peso</strong> es una simplificación que ignora casi todo lo que sabemos sobre bioquímica humana. Sí, las calorías importan. No, no son lo único que importa.</p>
            
            <p>Lo que el modelo calórico no puede explicar es por qué dos personas que comen lo mismo y se mueven igual pierden cantidades diferentes de peso. Por qué hay mujeres que comen 1200 calorías y no bajan. Por qué algunas personas suben de peso en períodos de estrés aunque no cambien lo que comen. La respuesta está en las hormonas, el microbioma, el sistema nervioso y la biología única del cuerpo femenino.</p>
            
            <blockquote style="border-left: 4px solid #D1B280; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #D1B280;">
                El problema no es tu voluntad. El problema es que nadie te enseñó cómo funciona tu cuerpo realmente.
            </blockquote>
            
            <h2>GLUT-4 y resistencia a la insulina: el metabolismo que nadie te explicó</h2>
            
            <p>La insulina es la hormona que le dice a tus células que abran la puerta y dejen entrar la glucosa. El GLUT-4 es el transportador <strong>la "puerta"</strong> que hace posible ese ingreso, principalmente en músculo y tejido adiposo. Cuando la señalización de insulina funciona bien, la glucosa entra a las células, se usa como energía o se almacena en los músculos como glucógeno.</p>
            
            <p>Cuando hay resistencia a la insulina, la puerta no se abre bien. El cuerpo compensa produciendo más insulina. Y la insulina elevada cronicamente tiene un efecto claro: promueve el almacenamiento de grasa, especialmente visceral, e inhibe su liberación. Podés estar comiendo lo mismo que antes, pero si tu insulina basal está alta, tu cuerpo está en modo de almacenamiento, no de liberación.</p>
            
            <p>La buena noticia: el ejercicio de fuerza <strong>específicamente la contracción muscular</strong> activa el GLUT-4 de manera independiente a la insulina. Esto significa que el músculo puede tomar glucosa del torrente sanguíneo sin necesitar la señal insulínica. Por eso el entrenamiento de fuerza es una de las herramientas más poderosas para mejorar el metabolismo, mucho más que el cardio en zona de quema de grasa.</p>
            
            <h2>Cortisol alto: cuando el estrés te hace almacenar</h2>
            
            <p>El cortisol eleva la glucosa en sangre. Si esa glucosa no se usa <strong>porque el estrés es mental, no físico</strong>, el páncreas libera insulina para manejarla. La insulina promueve el almacenamiento de grasa visceral. Este ciclo, repetido miles de veces a lo largo de meses y años de estrés crónico, produce exactamente lo que muchas mujeres describen: peso acumulado en el abdomen que no responde al ejercicio ni a la dieta.</p>
            
            <p>Además, el cortisol eleva cronicamente interfiere con la función del tejido adiposo pardo <strong>el que quema calorías para generar calor</strong> y altera la leptina, la hormona de la saciedad. El resultado: menos quema basal, más hambre, más almacenamiento. Tu cuerpo está perfectamente adaptado para sobrevivir a una hambruna que nunca llega.</p>
            
            <h2>El ciclo hormonal y el metabolismo: lo que la industria fitness ignora</h2>
            
            <p>El cuerpo femenino no funciona igual durante todo el mes. En la fase folicular <strong>la primera mitad del ciclo</strong>, el estrógeno predomina, la sensibilidad a la insulina mejora, el metabolismo basal se mantiene estable y la resistencia al esfuerzo es mayor. En la fase lútea <strong>después de la ovulación</strong>, la progesterona sube, el metabolismo basal aumenta ligeramente (entre 100 y 300 calorías más por día en algunas estudios), pero también aumenta el apetito y la preferencia por carbohidratos.</p>
            
            <p>Ignorar estas diferencias <strong>como hace cualquier plan de alimentación y entrenamiento que no tiene en cuenta el ciclo</strong> es planificar sin información. Adaptar la nutrición y el entrenamiento al ciclo no es una tendencia de bienestar femenino. Es fisiología básica.</p>
            
            <h2>Qué cambia cuando abordás el problema correctamente</h2>
            
            <p>Cuando una mujer empieza a trabajar su metabolismo desde la raíz <strong>mejorando la sensibilidad a la insulina con entrenamiento de fuerza y reducción de ultraprocesados, regulando el cortisol, sincronizando la alimentación con su ciclo hormonal, reparando el microbioma</strong> los cambios que no se producían con años de dieta y cardio empiezan a aparecer. No de manera milagrosa. De manera fisiológica.</p>
            
            <blockquote style="border-left: 4px solid #481F71; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #481F71;">
                Tu cuerpo no es tu enemigo. Es un sistema que responde a la información que le das. El problema es que durante años te dieron información equivocada.
            </blockquote>
            
            <p style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, rgba(209, 178, 128, 0.05), rgba(72, 31, 113, 0.05)); border-radius: 12px; text-align: center;">
                <strong>¿Querés entender tu metabolismo de verdad?</strong><br>
                Seguime en <a href="https://instagram.com/myowndoc" target="_blank" style="color: #D1B280; font-weight: 600;">@andreakaterji</a> y empezá a escuchar a tu cuerpo.
            </p>
        `
    },
    'intestino': {
        category: 'Eje Intestino-Cerebro',
        title: 'Tu intestino y tus hormonas hablan entre sí. Y probablemente no se están llevando bien.',
        content: `
            <p>Hay una conversación que ocurre a cada momento en tu cuerpo, entre dos sistemas que la medicina tradicional trata como si fueran completamente independientes: el microbioma intestinal y el sistema endocrino. Esta conversación determina, en gran medida, si tus hormonas están en equilibrio o en caos.</p>
            
            <p>Cuando se rompe, las consecuencias van mucho más allá de la digestión. Afectan tu ciclo menstrual, tu fertilidad, tu peso, tu estado de ánimo y tu riesgo de ciertas patologías hormonodependientes. Y la mayoría de las mujeres que viven esas consecuencias nunca reciben este diagnóstico, porque nadie les preguntó por el intestino cuando fueron a la consulta ginecológica.</p>
            
            <h2>El estroboloma: el microbioma que gestiona tus estrógenos</h2>
            
            <p>El estroboloma es el conjunto de bacterias intestinales que tiene la capacidad de metabolizar estrógenos. No es el microbioma completo: es esa porción específica encargada de una función muy concreta y crítica.</p>
            
            <p>El proceso funciona así: el hígado metaboliza el estrógeno circulante, lo conjuga <strong>lo "etiqueta"</strong> para que sea eliminado por la bilis hacia el intestino. En condiciones normales, ese estrógeno conjugado llega al colon y se excreta. Pero cuando el estroboloma está en mal estado, produce una enzima llamada <strong>beta-glucuronidasa</strong> que rompe esa conjugación. El estrógeno se desconjuga, se vuelve a absorber en la circulación, y el hígado tiene que volver a procesarlo. El resultado: niveles de estrógeno más altos de lo que deberían ser. Dominancia estrogénica que no tiene que ver directamente con los ovarios.</p>
            
            <blockquote style="border-left: 4px solid #6EC6D2; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #6EC6D2;">
                El desequilibrio hormonal puede estar en el intestino mucho antes de que aparezca en los ovarios.
            </blockquote>
            
            <h2>Tres atacantes silenciosos del estroboloma</h2>
            
            <p>El primero son los antibióticos. Cada curso de antibióticos <strong>especialmente los de amplio espectro</strong> elimina no solo bacterias patógenas sino también los productores de bacterias beneficiosas del estroboloma. Una sola ronda puede alterar la composición del microbioma por semanas o meses. Múltiples rondas a lo largo de la vida tienen efectos acumulativos. Esto no significa que los antibióticos sean malos <strong>cuando son necesarios, son vitales</strong>. Significa que su uso tiene consecuencias que merecen atención activa.</p>
            
            <p>El segundo es la dieta baja en fibra. Las bacterias del estroboloma se alimentan de fibra fermentable <strong>prebióticos</strong>. Sin ella, mueren o disminuyen en número. La dieta occidental promedio <strong>alta en ultraprocesados, baja en vegetales y legumbres</strong> produce exactamente esa pérdida de diversidad microbiana. Y con menos bacterias beneficiosas, la beta-glucuronidasa producida por bacterias menos deseables domina.</p>
            
            <p>El tercero es el estrés. El eje intestino-cerebro es bidireccional. El estrés psicológico altera la permeabilidad intestinal, cambia el entorno del microbioma y modifica la composición bacteriana. Es una vía directa entre lo que sentís emocionalmente y lo que pasa en tu intestino <strong>y por ende en tus hormonas</strong>.</p>
            
            <h2>Estreñimiento: el síntoma que más se ignora</h2>
            
            <p>El estreñimiento merece mención especial porque es simultáneamente uno de los síntomas más comunes en mujeres y uno de los más minimizados. "Ir al baño cada dos o tres días" se normaliza como variación individual. Desde la medicina funcional, es una señal de alarma.</p>
            
            <p>Cuando el tránsito intestinal es lento, el estrógeno que debería eliminarse pasa más tiempo en contacto con la mucosa intestinal, dando más oportunidad a la beta-glucuronidasa de actuar. El estreñimiento crónico es, literalmente, un factor que eleva los estrógenos. Mejorar el tránsito intestinal <strong>con fibra, hidratación, movimiento y magnesio en las dosis adecuadas</strong> no es solo una cuestión de comodidad digestiva. Es parte del manejo hormonal.</p>
            
            <h2>Cómo evaluar y mejorar el estroboloma</h2>
            
            <p>La evaluación más completa del microbioma hoy disponible es el análisis de microbioma intestinal por secuenciación genómica. Algunas versiones miden específicamente la beta-glucuronidasa y la diversidad del estroboloma. El DUTCH test también permite ver el metabolismo del estrógeno a nivel celular, evaluando las vías de detoxificación hepática y la relación entre los distintos metabolitos estrogénicos.</p>
            
            <p>En cuanto a intervención, las estrategias más sólidas incluyen: aumentar dramáticamente el consumo de fibra diversa, incorporar alimentos fermentados como el chucrut, el kéfir y el kimchi, considerar suplementación con calcio d-glucarato para inhibir la beta-glucuronidasa en casos de dominancia estrogénica documentada, y atender el estreñimiento de manera activa si está presente.</p>
            
            <p style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, rgba(110, 198, 210, 0.05), rgba(58, 107, 115, 0.05)); border-radius: 12px; text-align: center;">
                <strong>La salud hormonal empieza en el intestino.</strong><br>
                Más información en <a href="https://instagram.com/myowndoc" target="_blank" style="color: #6EC6D2; font-weight: 600;">@andreakaterji</a>
            </p>
        `
    },
    'atleta': {
        category: 'Ejercicio & Hormonas',
        title: 'El síndrome de la atleta femenina: cuando más ejercicio te cuesta más caro.',
        content: `
            <p>Hay una imagen cultural muy instalada: la mujer que entrena duro, come limpio, tiene disciplina de hierro y un cuerpo que "lo demuestra". Esa imagen no solo es incompleta. En muchos casos, es la imagen de alguien que está enfermándose.</p>
            
            <p>El síndrome de la atleta femenina <strong>en inglés, Female Athlete Triad, hoy expandido al concepto de RED-S, Relative Energy Deficiency in Sport</strong> es una de las condiciones más subdiagnosticadas en mujeres activas. Y ocurre no solo en atletas de élite. Ocurre en la mujer de 35 años que hace CrossFit seis días por semana y come "saludable". Ocurre en la corredora amateur que se levanta a las 5am para sumar kilómetros. Ocurre en la nutricionista que pesa cada alimento.</p>
            
            <h2>Qué es exactamente el síndrome</h2>
            
            <p>El síndrome de la atleta femenina se define por la coexistencia de tres elementos: baja disponibilidad energética, disfunción menstrual y baja densidad ósea. Pero en su versión expandida RED-S, el impacto es mucho mayor e incluye disfunción inmune, problemas cardiovasculares, deterioro cognitivo, alteraciones endocrinas y psicológicas, y caída del rendimiento deportivo <strong>la paradoja de que más entrenamiento produce peores resultados</strong>.</p>
            
            <p>El mecanismo central es la baja disponibilidad energética: el cuerpo percibe que el gasto calórico supera la ingesta de manera sostenida. Eso no tiene que significar anorexia ni desorden alimentario obvio. Puede ser simplemente que una mujer entrena 10 horas por semana y come lo que "le parece suficiente" sin calcular el déficit real.</p>
            
            <blockquote style="border-left: 4px solid #3A6B73; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #3A6B73;">
                Más ejercicio no siempre es mejor. Tu cuerpo tiene un umbral más allá del cual el ejercicio se convierte en un estresor sin retorno.
            </blockquote>
            
            <h2>La kisspeptina: la señal que apaga todo</h2>
            
            <p>Cuando el cuerpo detecta baja disponibilidad energética, activa un sistema de ahorro que tiene lógica evolutiva perfecta: apagar los procesos no esenciales para la supervivencia inmediata. La reproducción es el primero en la lista.</p>
            
            <p>La kisspeptina es un neuropéptido producido en el hipotálamo que actúa como el director del eje reproductivo. Cuando la energía disponible cae, la kisspeptina disminuye. Con menos kisspeptina, el hipotálamo libera menos GnRH, la hipófisis libera menos LH y FSH, y los ovarios dejan de producir estrógeno y de ovular. El resultado más visible es la amenorrea <strong>pérdida del periodo</strong>. Pero antes de que el periodo desaparezca, hay una fase de irregularidad, de ciclos anovulatorios, de SPM atípico que rara vez se conecta con el entrenamiento.</p>
            
            <h2>Los huesos: la consecuencia que nadie ve venir</h2>
            
            <p>El estrógeno es fundamental para la densidad ósea. Cuando los ovarios dejan de producirlo por baja disponibilidad energética, los huesos empiezan a perder densidad. En mujeres jóvenes que deberían estar construyendo masa ósea <strong>el pico de densidad ósea ocurre alrededor de los 30 años</strong>, el síndrome de la atleta puede producir una densidad ósea comparable a la de mujeres en menopausia.</p>
            
            <p>Las fracturas por estrés son la consecuencia más inmediata. Pero el impacto a largo plazo en el riesgo de osteoporosis en la mediana edad y más allá es igualmente serio. Y raramente se diagnostica, porque la mujer atlética no encaja en el perfil que los médicos tienen de alguien con riesgo óseo.</p>
            
            <h2>Por qué el sistema médico lo ignora</h2>
            
            <p>Parte del problema es cultural. Una mujer que entrena y come "saludable" recibe validación constante. Los médicos, los familiares, los amigos refuerzan la conducta. Los síntomas <strong>fatiga, irregularidad menstrual, irritabilidad, caída del rendimiento</strong> se atribuyen a "el estrés", "la fase de la vida" o simplemente a entrenar "mucho". La posibilidad de que el cuerpo esté en un estado de déficit energético que requiere ajuste raramente aparece en el radar.</p>
            
            <p>Desde la medicina funcional, la evaluación incluye: historia menstrual detallada, densitometría ósea si hay amenorrea, panel hormonal completo incluyendo LH, FSH, estradiol y progesterona en la fase lútea, y evaluación de la disponibilidad energética real <strong>no solo calorías consumidas, sino calorías disponibles después del ejercicio</strong>.</p>
            
            <h2>El camino de regreso</h2>
            
            <p>La solución no es dejar de entrenar. Es reequilibrar la energía disponible, generalmente a través de un aumento calórico estratégico y una reducción temporal del volumen de entrenamiento. En muchos casos, el periodo vuelve en semanas o meses una vez que el cuerpo percibe que hay suficiente energía. Los huesos toman más tiempo en recuperarse, razón por la cual la detección temprana es crítica.</p>
            
            <blockquote style="border-left: 4px solid #D1B280; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #D1B280;">
                Si sos una mujer activa que ha perdido el periodo, tiene el periodo irregular, se lesiona con frecuencia o nota que rinde menos a pesar de entrenar más, este es el artículo que debiste leer antes.
            </blockquote>
            
            <p style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, rgba(58, 107, 115, 0.05), rgba(209, 178, 128, 0.05)); border-radius: 12px; text-align: center;">
                <strong>Tu salud vale más que tu récord personal.</strong><br>
                Seguime en <a href="https://instagram.com/myowndoc" target="_blank" style="color: #3A6B73; font-weight: 600;">@andreakaterji</a>
            </p>
        `
    },
    'tiroides': {
        category: 'Salud Tiroidea',
        title: 'Tiroides \'normal\' no significa tiroides sana.',
        content: `
            <p>Hay una frase que escucho con una frecuencia que me preocupa: "Fui al médico por el cansancio, la caída de pelo y el frío permanente. Me hicieron el análisis de tiroides y me dijeron que estaba normal". Y la mujer se va sin diagnóstico, sin respuesta y convencida de que algo está mal con ella, no con su tiroides.</p>
            
            <p>Lo que nadie le explicó es que el análisis que le hicieron probablemente midió solo la TSH. Y que "normal en TSH" y "tiroides funcionando bien" son dos cosas completamente distintas.</p>
            
            <h2>Cómo funciona la tiroides realmente</h2>
            
            <p>La tiroides es una glándula en forma de mariposa ubicada en la base del cuello. Produce dos hormonas principales: T4 (tiroxina) y T3 (triyodotironina). La T4 es la forma de almacenamiento <strong>no tiene actividad biológica significativa por sí misma</strong>. La T3 es la forma activa <strong>la que entra a las células y regula el metabolismo, la temperatura, el estado de ánimo, la velocidad del tránsito intestinal, la caída del cabello, la frecuencia cardíaca</strong>.</p>
            
            <p>El 80-90% de lo que produce la tiroides es T4. Para que sea útil, tiene que convertirse en T3 activa. Esa conversión ocurre principalmente en el hígado, los riñones y el tejido periférico, a través de una enzima llamada deiodinasa. Cuando la deiodinasa está bloqueada <strong>por inflamación, deficiencia de selenio, estrés crónico o exceso de cortisol</strong>, la T4 no se convierte eficientemente en T3. La tiroides puede estar produciendo hormonas perfectamente. El problema está en la conversión.</p>
            
            <blockquote style="border-left: 4px solid #481F71; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #481F71;">
                Podés tener TSH normal, T4 normal y aún así estar hipotiroidea funcionalmente porque la T3 activa no está llegando a tus células.
            </blockquote>
            
            <h2>El problema del rango de referencia</h2>
            
            <p>El rango normal de TSH en la mayoría de los laboratorios va aproximadamente de 0.5 a 4.5 o incluso 5.0 mIU/L. Ese rango fue establecido incluyendo en la muestra a personas con disfunción tiroidea subclínica no diagnosticada, lo que amplió artificialmente el rango "normal".</p>
            
            <p>Desde la medicina funcional y la endocrinología integrativa, el rango óptimo de TSH se sitúa entre 1.0 y 2.5 mIU/L. Por encima de 2.5, muchas personas empiezan a tener síntomas. Por encima de 3.0, la probabilidad de disfunción funcional aumenta significativamente. Sin embargo, una TSH de 3.8 sería reportada como "normal" en prácticamente cualquier laboratorio convencional, y la mujer se iría sin tratamiento.</p>
            
            <h2>El panel completo que realmente importa</h2>
            
            <p>Para evaluar correctamente la función tiroidea, es necesario medir: TSH (punto de partida), T4 libre (la T4 disponible, no la total), T3 libre (la hormona activa disponible), T3 inversa (una forma inactiva que compite con la T3 activa por los receptores celulares y que se eleva en situaciones de estrés crónico), anticuerpos anti-TPO y anti-tiroglobulina (para detectar tiroiditis de Hashimoto, la causa más común de hipotiroidismo en mujeres, que puede estar presente durante años antes de alterar la TSH).</p>
            
            <p>Con solo la TSH, estás viendo el 20% de la imagen. Con el panel completo, empezás a entender qué está pasando realmente.</p>
            
            <h2>Hashimoto: la enfermedad autoinmune que nadie menciona</h2>
            
            <p>La tiroiditis de Hashimoto es la causa más común de hipotiroidismo en países con suficiente yodo. Es una enfermedad autoinmune: el sistema inmune ataca la glándula tiroides, dañando progresivamente su capacidad de producir hormonas. Puede haber fluctuaciones <strong>períodos de hipotiroidismo seguidos de períodos de hipertiroidismo</strong> antes de que la glándula se agote definitivamente.</p>
            
            <p>Los anticuerpos anti-TPO positivos confirman el diagnóstico. Pero un porcentaje importante de personas con Hashimoto tiene TSH normal durante años, mientras el proceso autoinmune avanza silenciosamente. Sin medir los anticuerpos, Hashimoto no se detecta.</p>
            
            <p>Y lo que importa cuando hay Hashimoto no es solo reponer la hormona tiroidea. Es entender por qué el sistema inmune está atacando su propio tejido: qué está triggering la respuesta autoinmune <strong>generalmente una combinación de permeabilidad intestinal, infecciones virales, disruptores endocrinos, y carga genética</strong>. El abordaje funcional trabaja sobre esas causas raíz, no solo sobre el reemplazo hormonal.</p>
            
            <h2>Selenium, zinc y otras piezas del puzzle</h2>
            
            <p>La deiodinasa que convierte T4 en T3 depende del selenio. El selenio también actúa como antioxidante en la glándula tiroides, protegiendo contra el daño que genera el peróxido de hidrógeno durante la síntesis de hormonas. Un estudio publicado en el Journal of Clinical Endocrinology & Metabolism mostró reducción significativa de anticuerpos anti-TPO con suplementación de selenio en pacientes con Hashimoto.</p>
            
            <p>El zinc, el hierro y la vitamina D también son co-factores tiroideos. Una mujer con tiroides "normal" en los análisis pero con deficiencia de selenio, zinc bajo y vitamina D insuficiente puede estar teniendo síntomas tiroideos que responderían a la corrección de esas deficiencias antes de necesitar medicación.</p>
            
            <p style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, rgba(72, 31, 113, 0.05), rgba(163, 201, 168, 0.05)); border-radius: 12px; text-align: center;">
                <strong>Si creés que tu tiroides no está bien aunque te digan que sí, tu intuición merece ser investigada.</strong><br>
                <a href="https://instagram.com/myowndoc" target="_blank" style="color: #481F71; font-weight: 600;">@andreakaterji</a>
            </p>
        `
    },
    'almidon': {
        category: 'Nutrición Funcional',
        title: 'Lo que el almidón resistente hace por tus hormonas y nadie te está enseñando a comer.',
        content: `
            <p>Hay un componente de la alimentación que se habla poco, se investiga mucho y se subestima casi todo el tiempo: el almidón resistente. No es un suplemento. No es un superalimento de moda. Es una propiedad de ciertos alimentos que podés activar <strong>o desactivar</strong> simplemente según cómo los cocinás.</p>
            
            <p>Y su impacto sobre el microbioma intestinal, la sensibilidad a la insulina, la inflamación y el equilibrio hormonal es uno de los más sólidos que existe en la literatura de nutrición funcional.</p>
            
            <h2>Qué es el almidón resistente</h2>
            
            <p>El almidón resistente es, como su nombre indica, un tipo de almidón que resiste la digestión en el intestino delgado. A diferencia del almidón regular que se digiere rápidamente y eleva la glucosa en sangre, el almidón resistente llega al colon sin haber sido digerido. Ahí, sirve como alimento para las bacterias beneficiosas del microbioma <strong>es un prebiótico por definición</strong>.</p>
            
            <p>Existen cuatro tipos de almidón resistente, pero el más relevante para la práctica cotidiana es el tipo 3: el almidón retrogradado. Este se forma cuando ciertos alimentos ricos en almidón <strong>arroz, papas, pasta, legumbres</strong> se cocinan y luego se enfrían. El enfriamiento cambia la estructura molecular del almidón, creando una forma que las enzimas digestivas humanas no pueden romper.</p>
            
            <blockquote style="border-left: 4px solid #A3C9A8; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #A3C9A8;">
                Enfriar el arroz o la papa después de cocinarlos no es un truco de dieta. Es una transformación bioquímica real con consecuencias medibles.
            </blockquote>
            
            <h2>La cadena que conecta el almidón con tus hormonas</h2>
            
            <p>Cuando el almidón resistente llega al colon, las bacterias <strong>específicamente bifidobacterias y lactobacilos</strong> lo fermentan y producen ácidos grasos de cadena corta, el más importante de los cuales es el butirato.</p>
            
            <p>El butirato es el combustible principal de las células del colon <strong>los colonocitos</strong>. Pero sus efectos van mucho más allá de la salud del colon. El butirato reduce la inflamación intestinal activando receptores que inhiben el factor nuclear kappa-B, una de las vías inflamatorias más centrales del sistema inmune. Reduce la permeabilidad intestinal fortaleciendo las uniones estrechas entre células <strong>exactamente lo que se necesita cuando hay "leaky gut"</strong>. Mejora la señalización de GLP-1, una hormona intestinal que mejora la sensibilidad a la insulina y regula el apetito.</p>
            
            <p>Esa cadena <strong>almidón resistente fermentación bacteriana butirato menos inflamación mejor permeabilidad intestinal mejor sensibilidad a la insulina equilibrio estrogénico</strong> es real, está documentada en múltiples estudios y empieza con lo que ponés en el plato.</p>
            
            <h2>El impacto directo en el estrógeno</h2>
            
            <p>Recordemos el estroboloma <strong>el microbioma que metaboliza estrógenos</strong>. Un microbioma más diverso y abundante en bacterias beneficiosas produce menos beta-glucuronidasa, la enzima que reabsorbe el estrógeno que debería eliminarse. El almidón resistente, al alimentar bacterias productoras de butirato y favorecer la diversidad microbiana, mejora directamente la composición del estroboloma. Menos beta-glucuronidasa significa menos reabsorción de estrógeno, lo que contribuye a reducir la dominancia estrogénica.</p>
            
            <p>No es el único factor. Pero es uno que podés modificar hoy, con lo que cocinás, sin gastar un peso en suplementos.</p>
            
            <h2>Cómo incorporarlo en la práctica</h2>
            
            <p>El arroz blanco cocinado y enfriado durante al menos 12 horas en la heladera tiene significativamente más almidón resistente que el arroz recién cocido. Lo mismo aplica para las papas <strong>el caso de las papas frías o la ensalada de papa es uno de los más estudiados</strong> y las legumbres cocinadas y refrigeradas.</p>
            
            <p>Lo que muchos no saben es que recalentar estos alimentos no destruye todo el almidón resistente tipo 3 <strong>a diferencia del tipo 2, que sí puede degradarse al cocinar</strong>. Podés cocinar el arroz o las papas, enfriarlos y recalentarlos sin perder completamente el beneficio.</p>
            
            <p>Otras fuentes ricas en almidón resistente que no requieren enfriamiento: el plátano macho o banana verde (no madura), los copos de avena sin cocinar <strong>los soaked overnight oats</strong>, las legumbres en general, y la harina de banana verde. La variedad importa porque alimenta distintos tipos de bacterias y produce mayor diversidad microbiana.</p>
            
            <h2>Cuánto es suficiente</h2>
            
            <p>Los estudios más relevantes han utilizado entre 15 y 30 gramos de almidón resistente por día para observar beneficios metabólicos. Ese volumen es perfectamente alcanzable con alimentación real: media taza de legumbres, una papa mediana enfriada y una banana verde al día ya te acercan a ese rango.</p>
            
            <p>La transición debe ser gradual. Un aumento brusco de almidón resistente puede causar distensión y gases, especialmente si el microbioma está empobrecido. La incomodidad inicial no es una señal de que algo va mal <strong>es señal de que el microbioma está empezando a trabajar</strong>. Con el tiempo, esa incomodidad disminuye a medida que las poblaciones bacterianas se adaptan.</p>
            
            <p style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, rgba(163, 201, 168, 0.05), rgba(110, 198, 210, 0.05)); border-radius: 12px; text-align: center;">
                <strong>Comer bien no es comer menos. Es entender qué le das a tu cuerpo y por qué.</strong><br>
                <a href="https://instagram.com/myowndoc" target="_blank" style="color: #A3C9A8; font-weight: 600;">@andreakaterji</a>
            </p>
        `
    },
    'medicina-funcional': {
        category: 'Medicina Funcional',
        title: 'Medicina Funcional no es medicina alternativa. Es medicina con evidencia que va más profundo.',
        content: `
            <p>Cuando digo que practico medicina funcional, hay dos reacciones típicas. La primera: "Ah, eso es como lo natural, las hierbas, ¿no?". La segunda: "¿Eso tiene evidencia o es más bien holístico?". Las dos preguntas vienen del mismo malentendido. Y ese malentendido le está costando a muchos pacientes años de diagnósticos incompletos y tratamientos que no llegan a la raíz.</p>
            
            <p>Voy a ser directa: la medicina funcional no es homeopatía. No es energía. No es cristales. No es medicina alternativa. Es medicina con formación convencional <strong>bioquímica, fisiología, farmacología, diagnóstico</strong> que además se pregunta algo que la medicina convencional rara vez se pregunta: ¿por qué?</p>
            
            <h2>De qué se trata realmente</h2>
            
            <p>La medicina convencional es extraordinariamente buena en situaciones agudas: trauma, infección, cirugía de emergencia, crisis. Si tenés un infarto, querés estar en un hospital convencional. Si tenés apendicitis, querés un cirujano convencional. En eso, la medicina moderna no tiene par.</p>
            
            <p>Pero cuando el problema es crónico <strong>fatiga que dura años, síntomas hormonales sin diagnóstico claro, enfermedad autoinmune, síndrome metabólico incipiente, intestino irritable, depresión que no responde a antidepresivos</strong>, la medicina convencional empieza a tener un límite estructural. Ese límite se llama especialización por órgano y ausencia de visión de sistemas.</p>
            
            <p>La gastroenterología trata el intestino. La endocrinología trata las hormonas. La psiquiatría trata la mente. La reumatología trata las articulaciones. Pero el cuerpo humano no funciona en compartimentos. La inflamación intestinal afecta el cerebro. El estrés crónico altera las hormonas. Las hormonas afectan el sistema inmune. Un abordaje que trata cada pieza de forma aislada, por más sofisticado que sea en cada especialidad, falla en capturar la complejidad del sistema completo.</p>
            
            <blockquote style="border-left: 4px solid #481F71; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #481F71;">
                La medicina funcional no niega a la medicina convencional. La complementa con una pregunta que falta: ¿por qué este sistema está fallando?
            </blockquote>
            
            <h2>Causas raíz vs. manejo de síntomas</h2>
            
            <p>La diferencia central entre la medicina funcional y la convencional no es el rechazo a los fármacos <strong>que tienen su lugar perfectamente legítimo</strong> sino el orden de las preguntas. La medicina convencional pregunta: ¿qué síntoma tenés? ¿Qué fármaco reduce ese síntoma? La medicina funcional pregunta: ¿por qué este síntoma está presente? ¿Qué proceso biológico subyacente lo está generando?</p>
            
            <p>Un ejemplo concreto: una mujer con hipotiroidismo recibe levotiroxina. Su TSH se normaliza. Pero sigue cansada, sigue con caída de pelo, sigue con dificultad para perder peso. La medicina convencional revisa los análisis, ve que "están bien" y no sabe qué más ofrecer. La medicina funcional pregunta: ¿está convirtiendo bien la T4 en T3? ¿Tiene Hashimoto? ¿Tiene déficit de selenio que bloquea la deiodinasa? ¿Hay inflamación intestinal que está triggering la autoinmunidad? Las respuestas a esas preguntas cambian completamente el plan de tratamiento.</p>
            
            <h2>La evidencia que existe y la que falta</h2>
            
            <p>Una crítica legítima a la medicina funcional es la heterogeneidad de la evidencia. Algunas intervenciones <strong>como la reducción del azúcar, el ejercicio de fuerza, el sueño de calidad, la suplementación de vitamina D en deficientes</strong> tienen décadas de evidencia robusta. Otras <strong>como ciertos protocolos de detox, algunas combinaciones de suplementos específicos o la eliminación de grupos alimentarios completos</strong> tienen evidencia más escasa o preliminar.</p>
            
            <p>El médico funcional honesto hace esa distinción. Sabe cuándo está trabajando con evidencia sólida y cuándo con hipótesis plausibles pero no confirmadas. No vende certezas donde no las hay. Y no descarta la evidencia convencional: la integra con la evidencia emergente de la investigación en microbioma, epigenética, medicina de sistemas y nutrición de precisión.</p>
            
            <h2>Lo que distingue una consulta funcional</h2>
            
            <p>En una consulta de medicina funcional, la historia clínica tarda más. Se pregunta por el modo de nacimiento <strong>parto vaginal o cesárea</strong>, la alimentación en la infancia, los antibióticos recibidos, el historial de estrés vital, los patrones de sueño, la calidad de las relaciones, las toxinas ambientales de exposición. Todo eso es información biológicamente relevante.</p>
            
            <p>Los análisis son más extensos: no solo hemograma y química básica, sino panel tiroideo completo, cortisol salival, DUTCH test para hormonas y sus metabolitos, microbioma intestinal, perfil inflamatorio, marcadores de resistencia a la insulina, niveles de vitaminas y minerales, metales pesados si hay indicación. No porque se haga todo a todo el mundo, sino porque la batería diagnóstica se construye sobre la hipótesis clínica.</p>
            
            <p>Y el plan de tratamiento es individualizado. No hay un protocolo estándar para "mujeres de 40 años con fatiga". Hay un plan construido sobre la bioquímica específica de esa mujer, en ese momento de su vida, con ese microbioma, esas hormonas, ese historial.</p>
            
            <h2>Por qué esto importa ahora</h2>
            
            <p>Vivimos en un momento en que las enfermedades crónicas son la primera causa de mortalidad y morbilidad en el mundo occidental, y la medicina convencional <strong>brillante en lo que hace</strong> no tiene las herramientas para revertir esa tendencia, porque esas enfermedades son en gran parte consecuencias de estilos de vida, toxinas ambientales, disbiosis intestinal y desequilibrios hormonales que no se abordan con un fármaco.</p>
            
            <p>La medicina funcional no es la solución a todo. Pero es una herramienta necesaria, respaldada por una base científica creciente, que merece un lugar en el sistema de salud actual. No como alternativa. Como complemento que hace las preguntas que faltan.</p>
            
            <p style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, rgba(72, 31, 113, 0.05), rgba(110, 198, 210, 0.05)); border-radius: 12px; text-align: center;">
                <strong>Esto es Medicina Sin Anestesia.</strong><br>
                <span style="color: #6B7280; font-size: 0.95rem;">Lo que te duele escuchar es exactamente lo que necesitás oír.</span><br>
                <a href="https://instagram.com/myowndoc" target="_blank" style="color: #481F71; font-weight: 600;">@andreakaterji</a>
            </p>
        `
    }
};

if (!articleModal) {
    console.error('Modal root #articleModal no encontrado');
    return;
}

function openArticleModal(articleId) {
    const article = articleContent[articleId];

    if (!article) {
        console.error('Artículo no encontrado para ID:', articleId);
        return;
    }

    const categoryEl = articleModal.querySelector('.modal-category');
    const titleEl = articleModal.querySelector('.modal-title');
    const contentEl = articleModal.querySelector('.modal-article-content');

    if (categoryEl) categoryEl.textContent = article.category;
    if (titleEl) titleEl.textContent = article.title;
    if (contentEl) contentEl.innerHTML = article.content;

    articleModal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

document.addEventListener('click', (e) => {
    const button = e.target.closest('.btn-read-article');
    if (!button) return;

    e.preventDefault();
    const articleId = button.getAttribute('data-article');
    openArticleModal(articleId);
});

    // Close modal
    function closeModal() {
        if (articleModal) {
            articleModal.classList.remove('active');
            document.body.style.overflow = '';
        }
    }

    if (modalClose) {
        modalClose.addEventListener('click', closeModal);
    }

    if (modalOverlay) {
        modalOverlay.addEventListener('click', closeModal);
    }

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && articleModal && articleModal.classList.contains('active')) {
            closeModal();
        }
    });

    console.log('🌟 Palabra Viva Blog - Modal Initialized');
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initArticleModal);
} else {
    initArticleModal();
}

console.log('🌟 Palabra Viva Blog - Script Loaded');
