// Custom Cursor
const cursor = document.createElement('div');
cursor.classList.add('custom-cursor');
document.body.appendChild(cursor);

const cursorDot = document.createElement('div');
cursorDot.classList.add('custom-cursor-dot');
document.body.appendChild(cursorDot);

let mouseX = 0, mouseY = 0;
let cursorX = 0, cursorY = 0;
let dotX = 0, dotY = 0;

document.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
});

function animateCursor() {
    // Smooth follow for main cursor
    cursorX += (mouseX - cursorX) * 0.15;
    cursorY += (mouseY - cursorY) * 0.15;
    cursor.style.left = cursorX + 'px';
    cursor.style.top = cursorY + 'px';
    
    // Faster follow for dot
    dotX += (mouseX - dotX) * 0.25;
    dotY += (mouseY - dotY) * 0.25;
    cursorDot.style.left = dotX + 'px';
    cursorDot.style.top = dotY + 'px';
    
    requestAnimationFrame(animateCursor);
}

if (window.innerWidth > 768) {
    animateCursor();
}

// Hover effects for interactive elements
document.querySelectorAll('a, button, .btn').forEach(el => {
    el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
    el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
});

// Orbital Menu Toggle
const orbitalNav = document.querySelector('.orbital-nav');
const orbitToggle = document.querySelector('.orbit-toggle');
const navHub = document.querySelector('.nav-hub');

if (orbitToggle && orbitalNav) {
    // Toggle orbital menu
    orbitToggle.addEventListener('click', (e) => {
        e.stopPropagation();
        orbitalNav.classList.toggle('active');
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!orbitalNav.contains(e.target) && orbitalNav.classList.contains('active')) {
            orbitalNav.classList.remove('active');
        }
    });
    
    // Close menu when clicking a link
    document.querySelectorAll('.orbit-item').forEach(item => {
        item.addEventListener('click', () => {
            orbitalNav.classList.remove('active');
        });
    });
    
    // Prevent menu close when clicking inside orbit container
    document.querySelector('.orbit-container')?.addEventListener('click', (e) => {
        e.stopPropagation();
    });
}

// Orbital nav scroll effect
window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (orbitalNav && currentScroll > 100 && !orbitalNav.classList.contains('scrolled')) {
        orbitalNav.classList.add('scrolled');
    } else if (orbitalNav && currentScroll <= 100) {
        orbitalNav.classList.remove('scrolled');
    }
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const offsetTop = target.offsetTop - 100;
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

// Active nav link on scroll
const sections = document.querySelectorAll('section[id]');
const navLinksAll = document.querySelectorAll('.orbit-item');

function updateActiveLink() {
    const scrollY = window.pageYOffset;
    
    sections.forEach(section => {
        const sectionHeight = section.offsetHeight;
        const sectionTop = section.offsetTop - 100;
        const sectionId = section.getAttribute('id');
        
        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            navLinksAll.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${sectionId}`) {
                    link.classList.add('active');
                }
            });
        }
    });
}

window.addEventListener('scroll', updateActiveLink);

// Intersection Observer for fade-in animations
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

// Observe elements for animation
document.querySelectorAll('.philosophy-card, .pillar, .transformation-text, .transformation-quote').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
});

// Create floating particles in hero
function createParticles() {
    const hero = document.querySelector('.hero');
    if (!hero) return;
    
    const particlesContainer = document.createElement('div');
    particlesContainer.classList.add('hero-particles');
    hero.appendChild(particlesContainer);
    
    for (let i = 0; i < 30; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');
        particle.style.left = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 15 + 's';
        particle.style.animationDuration = (15 + Math.random() * 10) + 's';
        particlesContainer.appendChild(particle);
    }
}

createParticles();

// Enhanced parallax effect
let ticking = false;
window.addEventListener('scroll', () => {
    if (!ticking) {
        window.requestAnimationFrame(() => {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero');
            
            if (hero && scrolled < window.innerHeight) {
                hero.style.transform = `translateY(${scrolled * 0.4}px)`;
                
                // Parallax for hero content
                const heroContent = document.querySelector('.hero-content');
                if (heroContent) {
                    heroContent.style.transform = `translateY(${scrolled * 0.2}px)`;
                    heroContent.style.opacity = 1 - (scrolled / window.innerHeight) * 1.5;
                }
            }
            
            // Parallax for philosophy cards
            document.querySelectorAll('.philosophy-card').forEach((card, index) => {
                const rect = card.getBoundingClientRect();
                const scrollPercent = (window.innerHeight - rect.top) / window.innerHeight;
                if (scrollPercent > 0 && scrollPercent < 1) {
                    card.style.transform = `translateY(${(1 - scrollPercent) * 30}px)`;
                }
            });
            
            ticking = false;
        });
        ticking = true;
    }
});

// Add smooth reveal to section headers
document.querySelectorAll('.section-header').forEach(header => {
    header.style.opacity = '0';
    header.style.transform = 'translateY(20px)';
    header.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
    observer.observe(header);
});

// 3D tilt effect on cards
document.querySelectorAll('.philosophy-card, .pillar').forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const rotateX = (y - centerY) / 10;
        const rotateY = (centerX - x) / 10;
        
        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-15px) scale(1.03)`;
    });
    
    card.addEventListener('mouseleave', () => {
        card.style.transform = '';
    });
});

// Magnetic effect on buttons
document.querySelectorAll('.btn').forEach(btn => {
    btn.addEventListener('mousemove', (e) => {
        const rect = btn.getBoundingClientRect();
        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;
        
        btn.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px) scale(1.05)`;
    });
    
    btn.addEventListener('mouseleave', () => {
        btn.style.transform = '';
    });
});

// Appointment Form Handler
const appointmentForm = document.getElementById('appointmentForm');
const formMessage = document.getElementById('formMessage');

if (appointmentForm) {
    // Set minimum date to today
    const fechaInput = document.getElementById('fecha');
    if (fechaInput) {
        const today = new Date().toISOString().split('T')[0];
        fechaInput.setAttribute('min', today);
    }
    
    appointmentForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        // Disable submit button
        const submitBtn = appointmentForm.querySelector('.btn-submit');
        const originalText = submitBtn.querySelector('.btn-text').textContent;
        submitBtn.querySelector('.btn-text').textContent = 'Enviando...';
        submitBtn.disabled = true;
        
        // Hide previous messages
        formMessage.className = 'form-message';
        formMessage.textContent = '';
        
        try {
            const formData = new FormData(appointmentForm);
            
            // Combinar fecha y hora en un solo campo
            const fecha = formData.get('fecha');
            const hora = formData.get('hora');
            const fechaHora = `${fecha} ${hora}`;
            
            // Crear nuevo FormData con los campos correctos
            const submitData = new FormData();
            submitData.append('name', formData.get('name'));
            submitData.append('email', formData.get('email'));
            submitData.append('phone', formData.get('phone'));
            submitData.append('date', fechaHora);
            submitData.append('message', formData.get('message') || '');
            submitData.append('source', 'theflowmethod');
            
            const response = await fetch('api/appointments.php', {
                method: 'POST',
                body: submitData
            });
            
            const data = await response.json();
            
            if (data.ok) {
                formMessage.className = 'form-message success';
                formMessage.textContent = data.message;
                appointmentForm.reset();
                
                // Scroll to message
                formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            } else {
                formMessage.className = 'form-message error';
                formMessage.textContent = data.error || data.message || 'Error al procesar la solicitud';
                console.error('Error details:', data);
            }
        } catch (error) {
            formMessage.className = 'form-message error';
            formMessage.textContent = 'Error al enviar el formulario. Por favor intenta de nuevo.';
            console.error('Error:', error);
        } finally {
            // Re-enable submit button
            submitBtn.querySelector('.btn-text').textContent = originalText;
            submitBtn.disabled = false;
        }
    });
}
