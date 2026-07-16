// ===================================
// ANDREA KATERJI PORTAL - INTERACTIVE SCRIPT
// ===================================

// Particle System
class ParticleSystem {
    constructor() {
        this.canvas = document.getElementById('particleCanvas');
        this.ctx = this.canvas.getContext('2d');
        this.particles = [];
        this.wind = { x: 0.1, y: -0.015 };
        this.time = 0;
        this.mouseX = -9999; // neutral by default
        this.mouseY = -9999;
        this.init();
    }

    init() {
        this.resize();
        this.createParticles();
        this.animate();

        window.addEventListener('resize', () => this.resize());
        document.addEventListener('mousemove', (e) => {
            this.mouseX = e.clientX;
            this.mouseY = e.clientY;
        });
        document.addEventListener('mouseleave', () => {
            this.mouseX = -9999;
            this.mouseY = -9999;
        });
    }

    resize() {
        this.canvas.width = window.innerWidth;
        this.canvas.height = window.innerHeight;
        // Regenerate fewer, softer particles on resize
        this.particles = [];
        this.createParticles();
    }

    createParticles() {
        const area = (this.canvas.width * this.canvas.height);
        const particleCount = Math.min(140, Math.max(90, Math.floor(area / 18000)));

        for (let i = 0; i < particleCount; i++) {
            const depth = Math.random(); // 0 near, 1 far
            this.particles.push({
                x: Math.random() * this.canvas.width,
                y: Math.random() * this.canvas.height,
                vx: (Math.random() * 0.2 + 0.05) * (Math.random() < 0.5 ? -1 : 1),
                vy: (Math.random() - 0.5) * 0.05,
                radius: 1.0 + (1 - depth) * 1.6,
                depth,
                hue: this.pickHue(),
                alpha: 0.28 + (1 - depth) * 0.35,
                wobble: Math.random() * Math.PI * 2
            });
        }
    }

    pickHue() {
        // Dawn palette hues (sand, sky, petrol, subtle violet)
        const choices = [
            { r: 230, g: 214, b: 184, a: 0.5 }, // sand
            { r: 110, g: 198, b: 210, a: 0.5 }, // sky
            { r: 58, g: 107, b: 115, a: 0.5 },  // petrol
            { r: 72, g: 31, b: 113, a: 0.35 }   // deep purple
        ];
        return choices[Math.floor(Math.random() * choices.length)];
    }

    draw() {
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        this.ctx.save();
        this.ctx.globalCompositeOperation = 'lighter';
        this.time += 0.003;

        for (let i = 0; i < this.particles.length; i++) {
            const p = this.particles[i];

            // Gentle wind + sine wobble
            const windX = this.wind.x * (0.5 + 0.5 * Math.sin(this.time + p.wobble));
            const windY = this.wind.y * (0.5 + 0.5 * Math.cos(this.time * 0.7 + p.wobble));
            p.x += p.vx * (0.3 + p.depth * 0.7) + windX;
            p.y += p.vy + windY + Math.sin(this.time * 2 + p.wobble) * 0.05;

            // Parallax slow drift upward to feel like distant dust
            p.y -= 0.01 * (1 - p.depth);

            // Subtle mouse influence
            const dx = this.mouseX - p.x;
            const dy = this.mouseY - p.y;
            const dist = Math.hypot(dx, dy);
            if (dist < 120) {
                const force = (120 - dist) / 120 * 0.02;
                p.x -= (dx / (dist || 1)) * force;
                p.y -= (dy / (dist || 1)) * force;
            }

            // Wrap horizontally for endless breeze
            if (p.x < -5) p.x = this.canvas.width + 5;
            if (p.x > this.canvas.width + 5) p.x = -5;
            if (p.y < -5) p.y = this.canvas.height + 5;
            if (p.y > this.canvas.height + 5) p.y = -5;

            // Draw particle
            this.ctx.beginPath();
            this.ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
            this.ctx.fillStyle = `rgba(${p.hue.r}, ${p.hue.g}, ${p.hue.b}, ${p.alpha})`;
            this.ctx.fill();
        }
        this.ctx.restore();
    }

    animate() {
        this.draw();
        requestAnimationFrame(() => this.animate());
    }
}

// Distant birds flocking calmly across the sky
class BirdFlock {
    constructor() {
        this.canvas = document.getElementById('particleCanvas');
        this.ctx = this.canvas.getContext('2d');
        this.birds = [];
        this.spawn();
        this.tick = 0;
    }

    spawn() {
        const rows = 2 + Math.floor(Math.random() * 2); // 2-3 small flocks
        this.birds = [];
        for (let r = 0; r < rows; r++) {
            const count = 6 + Math.floor(Math.random() * 5);
            const yBase = 80 + r * 40 + Math.random() * 20; // a bit lower for visibility
            const speed = 0.2 + r * 0.05;
            for (let i = 0; i < count; i++) {
                this.birds.push({
                    x: -Math.random() * this.canvas.width,
                    y: yBase + Math.sin(i * 0.6) * 2,
                    speed: speed + Math.random() * 0.05,
                    phase: Math.random() * Math.PI * 2,
                    scale: 0.5 + r * 0.15
                });
            }
        }
    }

    step() {
        this.tick += 0.02;
        for (const b of this.birds) {
            b.x += b.speed;
            b.y += Math.sin(this.tick + b.phase) * 0.05;
            if (b.x > this.canvas.width + 40) {
                b.x = -60;
                b.y = 30 + Math.random() * 120;
            }
        }
    }

    draw() {
        const ctx = this.ctx;
        ctx.save();
        ctx.globalAlpha = 0.25; // slightly more visible
        ctx.strokeStyle = 'rgba(43, 51, 64, 0.65)';
        ctx.lineWidth = 1.2;
        for (const b of this.birds) {
            const s = 10 * b.scale;
            // Simple "V" bird silhouette
            ctx.beginPath();
            ctx.moveTo(b.x - s, b.y);
            ctx.quadraticCurveTo(b.x, b.y + s * 0.6, b.x + s, b.y);
            ctx.stroke();
        }
        ctx.restore();
    }
}

// Mobile Menu Toggle
class MobileMenu {
    constructor() {
        this.toggle = document.querySelector('.mobile-menu-toggle');
        this.menu = document.querySelector('.mobile-menu');
        this.menuItems = document.querySelectorAll('.mobile-nav-item');
        
        if (this.toggle && this.menu) {
            this.init();
        }
    }

    init() {
        this.toggle.addEventListener('click', () => this.toggleMenu());
        
        this.menuItems.forEach(item => {
            item.addEventListener('click', () => this.closeMenu());
        });

        // Close menu on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && this.menu.getAttribute('aria-hidden') === 'false') {
                this.closeMenu();
            }
        });
    }

    toggleMenu() {
        const isExpanded = this.toggle.getAttribute('aria-expanded') === 'true';
        
        if (isExpanded) {
            this.closeMenu();
        } else {
            this.openMenu();
        }
    }

    openMenu() {
        this.toggle.setAttribute('aria-expanded', 'true');
        this.menu.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    closeMenu() {
        this.toggle.setAttribute('aria-expanded', 'false');
        this.menu.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }
}

// Smooth Scroll for Navigation
class SmoothScroll {
    constructor() {
        this.init();
    }

    init() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                const href = anchor.getAttribute('href');
                
                if (href === '#' || href === '#home') {
                    e.preventDefault();
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                } else {
                    const target = document.querySelector(href);
                    if (target) {
                        e.preventDefault();
                        const headerOffset = 100;
                        const elementPosition = target.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    }
}

// Ambient Sound Controller (Optional)
class AmbientSound {
    constructor() {
        this.audio = document.getElementById('ambientSound');
        this.isPlaying = false;
        this.hasInteracted = false;
        
        if (this.audio) {
            this.init();
        }
    }

    init() {
        // Set soft volume
        this.audio.volume = 0.18;
        // Create the toggle immediately; playback still requires user click
        this.createSoundToggle();
    }

    createSoundToggle() {
        const toggle = document.createElement('button');
        toggle.className = 'sound-toggle';
        toggle.setAttribute('aria-label', 'Toggle ambient sound');
        toggle.innerHTML = `
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
                <path class="sound-waves" d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>
            </svg>
        `;
        
        toggle.style.cssText = `
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.15);
            color: #2B3340;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 1000;
            backdrop-filter: blur(10px);
        `;
        
        toggle.addEventListener('click', () => this.toggleSound(toggle));
        document.body.appendChild(toggle);
    }

    toggleSound(button) {
        if (this.isPlaying) {
            this.audio.pause();
            this.audio.currentTime = 0;
            button.style.opacity = '0.5';
            button.querySelector('.sound-waves').style.opacity = '0';
        } else {
            this.audio.play().catch(err => console.log('Audio play failed:', err));
            button.style.opacity = '1';
            button.querySelector('.sound-waves').style.opacity = '1';
        }
        this.isPlaying = !this.isPlaying;
    }
}

// Logo Pulse on Scroll
class LogoAnimation {
    constructor() {
        this.logo = document.querySelector('.logo');
        this.logoGlow = document.querySelector('.logo-glow');
        
        if (this.logo) {
            this.init();
        }
    }

    init() {
        let lastScroll = 0;
        
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            const scrollDiff = Math.abs(currentScroll - lastScroll);
            
            if (scrollDiff > 5) {
                this.logo.style.transform = `scale(${1 + scrollDiff * 0.0005})`;
                
                setTimeout(() => {
                    this.logo.style.transform = 'scale(1)';
                }, 200);
            }
            
            lastScroll = currentScroll;
        });
    }
}

// Intersection Observer for Animations
class ScrollAnimations {
    constructor() {
        this.init();
    }

    init() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements that should animate on scroll
        document.querySelectorAll('.cosmic-orb').forEach(orb => {
            orb.style.opacity = '0';
            orb.style.transform = 'translateY(50px)';
            orb.style.transition = 'all 1s cubic-bezier(0.23, 1, 0.32, 1)';
            observer.observe(orb);
        });
    }
}

// CTA Button Magnetic Effect
class MagneticButtons {
    constructor() {
        this.buttons = document.querySelectorAll('.cta-button');
        this.init();
    }

    init() {
        this.buttons.forEach(button => {
            button.addEventListener('mousemove', (e) => {
                const rect = button.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                button.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px) translateY(-2px)`;
            });

            button.addEventListener('mouseleave', () => {
                button.style.transform = '';
            });
        });
    }
}

// Keyboard Navigation Enhancement
class KeyboardNav {
    constructor() {
        this.init();
    }

    init() {
        // Add visible focus indicators
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Tab') {
                document.body.classList.add('keyboard-nav');
            }
        });

        document.addEventListener('mousedown', () => {
            document.body.classList.remove('keyboard-nav');
        });
    }
}

// Universe cards: dynamic images and parallax
class UniverseCards {
    constructor() {
        this.cards = document.querySelectorAll('.universe-card');
        if (this.cards.length) this.init();
    }

    init() {
        this.cards.forEach(card => {
            const media = card.querySelector('.card-media');
            const imgSrc = card.dataset.image;
            const fit = (card.dataset.fit || 'cover').toLowerCase();
            if (imgSrc && media) {
                media.style.backgroundImage = `url('${imgSrc}')`;
                media.style.backgroundRepeat = 'no-repeat';
                media.style.backgroundPosition = 'center';
                media.style.backgroundSize = (fit === 'contain') ? 'contain' : 'cover';
            }

            // Parallax tilt
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const relX = (e.clientX - rect.left) / rect.width - 0.5;
                const relY = (e.clientY - rect.top) / rect.height - 0.5;
                const translateX = relX * 10; // px
                const translateY = relY * 10; // px
                const mediaEl = media || card;
                mediaEl.style.transform = `translate(${translateX}px, ${translateY}px)`;
            });

            card.addEventListener('mouseleave', () => {
                const mediaEl = media || card;
                mediaEl.style.transform = 'translate(0,0)';
            });

            // Keyboard focus shows hover overlay
            card.addEventListener('focusin', () => card.classList.add('focus-visible'));
            card.addEventListener('focusout', () => card.classList.remove('focus-visible'));
        });
    }
}

// Contact Form Handler
class ContactForm {
    constructor() {
        this.form = document.getElementById('contactForm');
        if (!this.form) return;
        
        this.inputs = {
            name: this.form.querySelector('#name'),
            email: this.form.querySelector('#email'),
            phone: this.form.querySelector('#phone'),
            subject: this.form.querySelector('#subject'),
            message: this.form.querySelector('#message')
        };
        
        this.submitButton = this.form.querySelector('.form-submit');
        this.statusElement = this.form.querySelector('.form-status');
        
        this.init();
    }
    
    init() {
        // Real-time validation on blur
        Object.values(this.inputs).forEach(input => {
            if (input) {
                input.addEventListener('blur', () => this.validateField(input));
                input.addEventListener('input', () => {
                    if (input.classList.contains('error')) {
                        this.validateField(input);
                    }
                });
            }
        });
        
        // Form submission
        this.form.addEventListener('submit', (e) => this.handleSubmit(e));
    }
    
    validateField(field) {
        const errorElement = field.parentElement.querySelector('.form-error');
        let isValid = true;
        let errorMessage = '';
        
        // Check if required field is empty
        if (field.hasAttribute('required') && !field.value.trim()) {
            isValid = false;
            errorMessage = 'Este campo es requerido';
        }
        
        // Email validation
        if (field.type === 'email' && field.value.trim()) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(field.value.trim())) {
                isValid = false;
                errorMessage = 'Por favor ingresa un correo válido';
            }
        }
        
        // Phone validation (optional but if filled, should be valid)
        if (field.type === 'tel' && field.value.trim()) {
            const phoneRegex = /^[\d\s\+\-\(\)]+$/;
            if (!phoneRegex.test(field.value.trim()) || field.value.trim().length < 7) {
                isValid = false;
                errorMessage = 'Por favor ingresa un teléfono válido';
            }
        }
        
        // Update UI
        if (isValid) {
            field.classList.remove('error');
            errorElement.classList.remove('visible');
            errorElement.textContent = '';
        } else {
            field.classList.add('error');
            errorElement.textContent = errorMessage;
            errorElement.classList.add('visible');
        }
        
        return isValid;
    }
    
    validateForm() {
        let isValid = true;
        
        // Validate all required fields
        Object.values(this.inputs).forEach(input => {
            if (input && input.hasAttribute('required')) {
                if (!this.validateField(input)) {
                    isValid = false;
                }
            }
        });
        
        return isValid;
    }
    
    async handleSubmit(e) {
        e.preventDefault();
        
        // Validate form
        if (!this.validateForm()) {
            this.showStatus('Por favor completa todos los campos requeridos correctamente', 'error');
            return;
        }
        
        // Disable submit button
        this.submitButton.disabled = true;
        this.submitButton.querySelector('.submit-text').textContent = 'Enviando...';
        
        // Prepare form data
        const formData = {
            name: this.inputs.name.value.trim(),
            email: this.inputs.email.value.trim(),
            phone: this.inputs.phone.value.trim(),
            subject: this.inputs.subject.value,
            message: this.inputs.message.value.trim(),
            to: 'myowndoc@andreakaterji.com'
        };
        
        try {
            // Use FormSubmit.co service (no backend needed)
            const response = await fetch('https://formsubmit.co/ajax/myowndoc@andreakaterji.com', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    name: formData.name,
                    email: formData.email,
                    phone: formData.phone || 'No proporcionado',
                    subject: this.getSubjectText(formData.subject),
                    message: formData.message,
                    _subject: `Nuevo mensaje de ${formData.name} - ${this.getSubjectText(formData.subject)}`,
                    _template: 'table'
                })
            });
            
            if (response.ok) {
                this.showStatus('¡Mensaje enviado con éxito! Te responderé pronto.', 'success');
                this.form.reset();
                
                // Remove any error states
                Object.values(this.inputs).forEach(input => {
                    if (input) {
                        input.classList.remove('error');
                        const errorElement = input.parentElement.querySelector('.form-error');
                        if (errorElement) {
                            errorElement.classList.remove('visible');
                        }
                    }
                });
            } else {
                throw new Error('Error al enviar el mensaje');
            }
        } catch (error) {
            console.error('Error:', error);
            this.showStatus('Hubo un error al enviar el mensaje. Por favor intenta nuevamente o escríbeme directamente a myowndoc@andreakaterji.com', 'error');
        } finally {
            // Re-enable submit button
            this.submitButton.disabled = false;
            this.submitButton.querySelector('.submit-text').textContent = 'Enviar mensaje';
        }
    }
    
    getSubjectText(value) {
        const subjects = {
            'cita': 'Agendar una cita',
            'myowndoc': 'Consulta sobre MyOwnDoc 2.0',
            'flow': 'Consulta sobre The Flow Method',
            'general': 'Consulta general',
            'otro': 'Otro'
        };
        return subjects[value] || value;
    }
    
    showStatus(message, type) {
        this.statusElement.textContent = message;
        this.statusElement.className = `form-status visible ${type}`;
        
        // Auto-hide success messages after 5 seconds
        if (type === 'success') {
            setTimeout(() => {
                this.statusElement.classList.remove('visible');
            }, 5000);
        }
    }
}

// Initialize all components when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    // Trigger header/menu entrance animations
    setTimeout(() => document.body.classList.add('nav-ready'), 100);

    // Initialize tranquil dawn particle system and distant birds
    const particles = new ParticleSystem();
    const birds = new BirdFlock();
    
    // Initialize mobile menu
    new MobileMenu();
    
    // Initialize smooth scroll
    new SmoothScroll();
    
    // Initialize ambient sound (optional)
    new AmbientSound();
    
    // Initialize logo animation
    new LogoAnimation();
    
    // Initialize scroll animations
    new ScrollAnimations();

    // Composite draw loop for birds over particles
    const canvas = document.getElementById('particleCanvas');
    const ctx = canvas.getContext('2d');
    (function render() {
        // ParticleSystem already clears and draws in its own loop; here we just draw birds on top at a slower cadence
        birds.step();
        birds.draw();
        requestAnimationFrame(render);
    })();
    
    // Initialize magnetic buttons
    new MagneticButtons();

    // Initialize universe cards
    new UniverseCards();

    // Initialize keyboard navigation
    new KeyboardNav();
    
    // Initialize contact form
    new ContactForm();
    
    console.log('🌌 Andrea Katerji Portal initialized');
    console.log('✨ Where Science Meets Consciousness');
});

// Performance optimization: Debounce function
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}
