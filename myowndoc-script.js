// ===================================
// MYOWNDOC 2.0 - ENHANCED INTERACTIVE SCRIPT
// Ultra-modern animations and interactions
// ===================================

// Particle System for Canvas
class ParticleSystem {
    constructor() {
        this.canvas = document.getElementById('particleCanvas');
        if (!this.canvas) return;
        
        this.ctx = this.canvas.getContext('2d');
        this.particles = [];
        this.mouseX = 0;
        this.mouseY = 0;
        
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

// About section interactions: flip cards on tap and animate counters
function initAboutInteractions() {
    // Enable flip on click for touch devices
    document.querySelectorAll('.about-card').forEach(card => {
        card.addEventListener('click', () => {
            card.classList.toggle('flip');
        });
        // keyboard accessibility
        card.setAttribute('tabindex', '0');
        card.addEventListener('keyup', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                card.classList.toggle('flip');
            }
        });
    });

    // Animate about counters when visible
    const aboutStats = document.querySelectorAll('.about-stat');
    if (aboutStats.length) {
        const ob = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    ob.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        aboutStats.forEach(stat => ob.observe(stat));
    }
}
    }
    
    resize() {
        this.canvas.width = window.innerWidth;
        this.canvas.height = window.innerHeight;
    }
    
    createParticles() {
        const particleCount = Math.min(80, Math.floor((this.canvas.width * this.canvas.height) / 15000));
        
        for (let i = 0; i < particleCount; i++) {
            this.particles.push({
                x: Math.random() * this.canvas.width,
                y: Math.random() * this.canvas.height,
                vx: (Math.random() - 0.5) * 0.5,
                vy: (Math.random() - 0.5) * 0.5,
                radius: Math.random() * 2 + 1,
                color: this.getRandomColor()
            });
        }
    }
    
    getRandomColor() {
        const colors = [
            'rgba(72, 31, 113, 0.3)',
            'rgba(110, 198, 210, 0.3)',
            'rgba(163, 201, 168, 0.3)'
        ];
        return colors[Math.floor(Math.random() * colors.length)];
    }
    
    animate() {
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        
        this.particles.forEach(particle => {
            // Update position
            particle.x += particle.vx;
            particle.y += particle.vy;
            
            // Bounce off edges
            if (particle.x < 0 || particle.x > this.canvas.width) particle.vx *= -1;
            if (particle.y < 0 || particle.y > this.canvas.height) particle.vy *= -1;
            
            // Mouse interaction
            const dx = this.mouseX - particle.x;
            const dy = this.mouseY - particle.y;
            const distance = Math.sqrt(dx * dx + dy * dy);
            
            if (distance < 150) {
                const force = (150 - distance) / 150;
                particle.x -= dx * force * 0.02;
                particle.y -= dy * force * 0.02;
            }
            
            // Draw particle
            this.ctx.beginPath();
            this.ctx.arc(particle.x, particle.y, particle.radius, 0, Math.PI * 2);
            this.ctx.fillStyle = particle.color;
            this.ctx.fill();
            
            // Connect nearby particles
            this.particles.forEach(otherParticle => {
                const dx2 = particle.x - otherParticle.x;
                const dy2 = particle.y - otherParticle.y;
                const distance2 = Math.sqrt(dx2 * dx2 + dy2 * dy2);
                
                if (distance2 < 120) {
                    this.ctx.beginPath();
                    this.ctx.strokeStyle = `rgba(72, 31, 113, ${0.1 * (1 - distance2 / 120)})`;
                    this.ctx.lineWidth = 0.5;
                    this.ctx.moveTo(particle.x, particle.y);
                    this.ctx.lineTo(otherParticle.x, otherParticle.y);
                    this.ctx.stroke();
                }
            });
        });
        
        requestAnimationFrame(() => this.animate());
    }
}

// ================================
// APPOINTMENT MODAL + SERVICE CARDS
// ================================
function initAppointmentModal() {
    const modal = document.getElementById('appointmentModal');
    if (!modal) return;

    const openButtons = document.querySelectorAll('[data-open-appointment]');
    const closeButtons = modal.querySelectorAll('[data-close-appointment]');
    const dialog = modal.querySelector('.modal-dialog');
    const overlay = modal; // modal overlay is the container

    let lastFocused = null;

    const open = (e) => {
        if (e) e.preventDefault();
        lastFocused = document.activeElement;
        overlay.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        // focus first input
        const firstInput = modal.querySelector('input, textarea, select, button');
        firstInput && firstInput.focus();
    };

    const close = (e) => {
        if (e) e.preventDefault();
        overlay.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
        lastFocused && lastFocused.focus();
    };

    openButtons.forEach(btn => btn.addEventListener('click', open));
    closeButtons.forEach(btn => btn.addEventListener('click', close));
    overlay.addEventListener('click', (e) => { if (e.target === overlay) close(e); });
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && overlay.getAttribute('aria-hidden') === 'false') close(e); });

    // Make entire service-card open the modal
    document.querySelectorAll('.service-card').forEach(card => {
        card.style.cursor = 'pointer';
        card.addEventListener('click', (e) => {
            // Avoid double open if clicking on an internal link already marked
            const isLink = e.target.closest('a');
            if (isLink) return; // the [data-open-appointment] link will handle it
            open(e);
        });
    });
}

// Animated Counter - Improved to prevent layout shifts
function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-counter'));
    const numberElement = element.querySelector('.stat-number');
    const originalText = numberElement.textContent;
    const suffix = originalText.includes('%') ? '%' : '+';
    const duration = 2000;
    const startTime = performance.now();
    
    // Use easeOutCubic for smoother animation
    const easeOutCubic = (t) => 1 - Math.pow(1 - t, 3);
    
    const updateCounter = (currentTime) => {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const easedProgress = easeOutCubic(progress);
        const current = Math.floor(easedProgress * target);
        
        // Format with fixed width to prevent layout shift
        numberElement.textContent = current + suffix;
        
        if (progress < 1) {
            requestAnimationFrame(updateCounter);
        } else {
            numberElement.textContent = target + suffix;
        }
    };
    
    requestAnimationFrame(updateCounter);
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

// Mobile Menu Toggle
const mobileToggle = document.querySelector('.mobile-toggle');
const navLinks = document.querySelector('.nav-links');

if (mobileToggle) {
    mobileToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        mobileToggle.classList.toggle('active');
    });
}

// Testimonials: mobile auto-scroll carousel with pause on hover/touch
function initTestimonialsCarousel() {
    const grid = document.querySelector('.testimonials-grid');
    if (!grid) return;

    let autoScrollTimer = null;

    const startAutoScroll = () => {
        // Only auto-scroll on small screens where grid becomes horizontal scroller
        if (window.innerWidth > 820) return;
        stopAutoScroll();
        autoScrollTimer = setInterval(() => {
            const card = grid.querySelector('.testimonial-card');
            const step = card ? Math.min(card.offsetWidth + 16, window.innerWidth * 0.9) : 300;
            const maxScroll = grid.scrollWidth - grid.clientWidth;
            const next = Math.min(grid.scrollLeft + step, maxScroll);
            grid.scrollTo({ left: next, behavior: 'smooth' });
            // loop back
            if (grid.scrollLeft >= maxScroll - 5) {
                setTimeout(() => grid.scrollTo({ left: 0, behavior: 'smooth' }), 600);
            }
        }, 3500);
    };

    const stopAutoScroll = () => {
        if (autoScrollTimer) {
            clearInterval(autoScrollTimer);
            autoScrollTimer = null;
        }
    };

    // Pause on interaction
    ['mouseenter', 'touchstart', 'mousedown', 'focusin'].forEach(evt => {
        grid.addEventListener(evt, stopAutoScroll);
    });
    ['mouseleave', 'touchend', 'mouseup', 'focusout'].forEach(evt => {
        grid.addEventListener(evt, startAutoScroll, { passive: true });
    });

    // Re-init on resize
    window.addEventListener('resize', () => {
        stopAutoScroll();
        startAutoScroll();
    });

    // Kick off
    startAutoScroll();
}

// Navbar scroll effect
const nav = document.querySelector('.myowndoc-nav');
let lastScroll = 0;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 100) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
    
    lastScroll = currentScroll;
});

// Intersection Observer for animations
const observerOptions = {
    threshold: 0.15,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
            
            // Animate counters when stats section is visible
            if (entry.target.classList.contains('stat-item')) {
                animateCounter(entry.target);
            }
        }
    });
}, observerOptions);

// Observe all animated elements
document.querySelectorAll('.service-card, .testimonial-card, .condition-card, .timeline-item, .stat-item').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
    observer.observe(el);
});

// Active nav link on scroll
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= (sectionTop - 200)) {
            current = section.getAttribute('id');
        }
    });

    document.querySelectorAll('.nav-link').forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});

// Magnetic button effect
document.querySelectorAll('.btn-magnetic').forEach(button => {
    button.addEventListener('mousemove', (e) => {
        const rect = button.getBoundingClientRect();
        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;
        
        button.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px)`;
    });
    
    button.addEventListener('mouseleave', () => {
        button.style.transform = 'translate(0, 0)';
    });
});

// Tilt effect for hero logo
const tiltElements = document.querySelectorAll('[data-tilt]');

tiltElements.forEach(element => {
    element.addEventListener('mousemove', (e) => {
        const rect = element.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const rotateX = (y - centerY) / 10;
        const rotateY = (centerX - x) / 10;
        
        element.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
    });
    
    element.addEventListener('mouseleave', () => {
        element.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
    });
});

// Parallax effect on scroll
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    
    // Parallax for hero elements
    const heroVisual = document.querySelector('.hero-visual');
    if (heroVisual) {
        heroVisual.style.transform = `translateY(${scrolled * 0.3}px)`;
    }
    
    // Parallax for floating icons
    document.querySelectorAll('.icon-bubble').forEach((icon, index) => {
        const speed = 0.1 + (index * 0.05);
        icon.style.transform = `translateY(${scrolled * speed}px)`;
    });
});

// Service card hover effect
document.querySelectorAll('.service-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.zIndex = '10';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.zIndex = '1';
    });
    
    card.addEventListener('mousemove', function(e) {
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const rotateX = (y - centerY) / 20;
        const rotateY = (centerX - x) / 20;
        
        this.style.transform = `translateY(-10px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) rotateX(0) rotateY(0) scale(1)';
    });
});

// Methodology Progress Animation
function animateMethodologyProgress() {
    const progressFill = document.getElementById('methodProgress');
    const methodPhases = document.querySelectorAll('.method-phase');
    
    if (!progressFill || methodPhases.length === 0) return;
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const phase = entry.target;
                const phaseNumber = parseInt(phase.getAttribute('data-phase'));
                const progressPercent = (phaseNumber / methodPhases.length) * 100;
                
                progressFill.style.height = progressPercent + '%';
                
                // Add active class to phase
                phase.classList.add('active');
                
                // Animate phase card entrance
                const phaseCard = phase.querySelector('.phase-card');
                if (phaseCard) {
                    phaseCard.style.opacity = '1';
                    phaseCard.style.transform = 'translateY(0) scale(1)';
                }
            }
        });
    }, {
        threshold: 0.5
    });
    
    methodPhases.forEach(phase => {
        const phaseCard = phase.querySelector('.phase-card');
        if (phaseCard) {
            phaseCard.style.opacity = '0';
            phaseCard.style.transform = 'translateY(50px) scale(0.9)';
            phaseCard.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
        }
        observer.observe(phase);
    });
}

// Phase Card 3D Tilt Effect
function initPhaseCardTilt() {
    const phaseCards = document.querySelectorAll('.phase-card');
    
    phaseCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 15;
            const rotateY = (centerX - x) / 15;
            
            card.style.transform = `translateY(-10px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0) rotateX(0) rotateY(0) scale(1)';
        });
    });
}

// Feature Items Stagger Animation
function animateFeatureItems() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const features = entry.target.querySelectorAll('.feature-item');
                features.forEach((feature, index) => {
                    setTimeout(() => {
                        feature.style.opacity = '1';
                        feature.style.transform = 'translateX(0)';
                    }, index * 100);
                });
            }
        });
    }, {
        threshold: 0.3
    });
    
    document.querySelectorAll('.phase-features').forEach(featuresContainer => {
        const features = featuresContainer.querySelectorAll('.feature-item');
        features.forEach(feature => {
            feature.style.opacity = '0';
            feature.style.transform = 'translateX(-20px)';
            feature.style.transition = 'all 0.5s ease';
        });
        observer.observe(featuresContainer);
    });
}

// Phase Icon Rotation on Hover
function initPhaseIconEffects() {
    const phaseCards = document.querySelectorAll('.phase-card');
    
    phaseCards.forEach(card => {
        const icon = card.closest('.method-phase').querySelector('.phase-icon');
        
        card.addEventListener('mouseenter', () => {
            if (icon) {
                icon.style.animation = 'rotateIcon 2s linear infinite';
            }
        });
        
        card.addEventListener('mouseleave', () => {
            if (icon) {
                icon.style.animation = 'rotateIcon 10s linear infinite';
            }
        });
    });
}

// Andrea Welcome Audio Interaction
function initAndreaWelcomeAudio() {
    const andreaGif = document.getElementById('andreaGif');
    const andreaWrap = andreaGif ? andreaGif.closest('.andrea-welcome') : null;
    const welcomeAudio = document.getElementById('welcomeAudio');
    const audioIndicator = document.getElementById('audioIndicator');
    
    if (!andreaGif || !welcomeAudio || !audioIndicator) return;
    
    let hasPlayed = false;
    let isPlaying = false;
    let audioRef = welcomeAudio; // may swap to programmatic Audio as fallback

    // Ensure the file is ready
    try {
        welcomeAudio.preload = 'auto';
        welcomeAudio.volume = 1.0;
        welcomeAudio.crossOrigin = 'anonymous';
        if (typeof welcomeAudio.load === 'function') welcomeAudio.load();
        // Always hide native controls for a clean UI
        welcomeAudio.controls = false;
        welcomeAudio.style.removeProperty('position');
        welcomeAudio.style.removeProperty('left');
        welcomeAudio.style.removeProperty('transform');
        welcomeAudio.style.removeProperty('bottom');
    } catch (e) {
        console.warn('Audio init warning:', e);
    }

    // Diagnostics: log events to help debug when it doesn't play
    const diag = (evt) => console.log(`[Audio] ${evt.type}`, {
        readyState: (audioRef || welcomeAudio).readyState,
        networkState: (audioRef || welcomeAudio).networkState,
        currentTime: (audioRef || welcomeAudio).currentTime,
        src: (audioRef || welcomeAudio).currentSrc || (audioRef || welcomeAudio).src
    });
    ['loadedmetadata','canplay','canplaythrough','play','playing','pause','ended','stalled','suspend','error'].forEach(ev => {
        welcomeAudio.addEventListener(ev, diag);
    });
    
    // Function to play audio
    const playWelcomeAudio = async () => {
        if (isPlaying) return;
        // Reset audio if it was already playing
        if (!audioRef.paused) {
            audioRef.pause();
            audioRef.currentTime = 0;
        }
        try {
            // Force set the src on demand and load again (handles some server caching or readiness issues)
            const originalSrc = welcomeAudio.querySelector('source')?.getAttribute('src') || welcomeAudio.src;
            if (originalSrc && !welcomeAudio.src) {
                welcomeAudio.src = originalSrc;
            }
            if (typeof welcomeAudio.load === 'function') welcomeAudio.load();
            // Wait a microtask to allow readyState to update
            await new Promise(r => setTimeout(r, 0));
            console.log('[Audio] readyState:', (audioRef || welcomeAudio).readyState);
            await (audioRef || welcomeAudio).play();
            audioIndicator.classList.add('playing');
            isPlaying = true;
            hasPlayed = true;
            console.log('[Audio] playing bienvenida.m4a');
        } catch (error) {
            console.warn('[Audio] playback failed:', error?.message || error);
            // Gently hint the user to tap if autoplay restrictions apply
            audioIndicator.classList.remove('hidden');
            audioIndicator.classList.remove('playing');
            // Try programmatic Audio() as a second attempt (keeps UI clean)
            try {
                audioRef = new Audio(originalSrc || 'assets/bienvenida.m4a');
                audioRef.crossOrigin = 'anonymous';
                audioRef.preload = 'auto';
                await audioRef.play();
                audioIndicator.classList.add('playing');
                isPlaying = true;
                hasPlayed = true;
                console.log('[Audio] fallback Audio() playing');
            } catch (e2) {
                console.warn('[Audio] fallback Audio() failed:', e2?.message || e2);
                // Keep UI professional: do not show native controls
            }
        }
    };
    
    // Handle audio end
    welcomeAudio.addEventListener('ended', () => {
        audioIndicator.classList.remove('playing');
        isPlaying = false;
        // Hide indicator after first play
        if (hasPlayed) {
            setTimeout(() => {
                audioIndicator.classList.add('hidden');
            }, 1000);
        }
    });
    
    // Click/Touch event for desktop and mobile (required by browsers)
    andreaGif.addEventListener('click', playWelcomeAudio);
    if (andreaWrap) {
        andreaWrap.addEventListener('click', (e) => {
            // allow clicking on the container as well
            if (e.target !== andreaGif) playWelcomeAudio();
        });
    }
    
    // Touch event for mobile
    andreaGif.addEventListener('touchstart', (e) => {
        e.preventDefault();
        playWelcomeAudio();
    }, { passive: false });

    // As a safety net: unlock audio on the first user interaction anywhere
    const unlock = async () => {
        try {
            await welcomeAudio.play();
            welcomeAudio.pause();
            welcomeAudio.currentTime = 0;
            console.log('[Audio] unlocked by first interaction');
        } catch {}
        window.removeEventListener('pointerdown', unlock);
        window.removeEventListener('keydown', unlock);
        window.removeEventListener('touchstart', unlock);
    };
    window.addEventListener('pointerdown', unlock, { once: true });
    window.addEventListener('keydown', unlock, { once: true });
    window.addEventListener('touchstart', unlock, { once: true });
}

// Initialize on load
document.addEventListener('DOMContentLoaded', () => {
    // Initialize particle system
    new ParticleSystem();
    
    // Initialize methodology animations
    animateMethodologyProgress();
    initPhaseCardTilt();
    animateFeatureItems();
    initPhaseIconEffects();
    initTestimonialsCarousel();
    // Guard: only call if available globally
    if (typeof initAboutInteractions === 'function') {
        initAboutInteractions();
    }
    
    // Initialize Andrea welcome audio
    initAndreaWelcomeAudio();
    // Initialize Appointment modal and service cards behavior
    initAppointmentModal();
    
    // Add entrance animations
    setTimeout(() => {
        document.body.classList.add('loaded');
    }, 100);
    
    console.log('🧬 MyOwnDoc 2.0 Enhanced - Initialized');
    console.log('💜 Ultra-modern, Interactive, Impactful');
    console.log('🚀 Methodology Section: Ultra-Interactive Mode Activated');
    console.log('🎵 Andrea Welcome Audio - Ready');
});

// Fallback: provide a global initAboutInteractions if none exists (prevents runtime error)
if (typeof window.initAboutInteractions !== 'function') {
    window.initAboutInteractions = function initAboutInteractions() {
        // Flip card on tap/click for touch devices (if cards exist)
        document.querySelectorAll('.about-card').forEach(card => {
            if (!card.hasAttribute('tabindex')) card.setAttribute('tabindex', '0');
            card.addEventListener('click', () => card.classList.toggle('flip'));
            card.addEventListener('keyup', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    card.classList.toggle('flip');
                }
            });
        });
        // Animate counters if present
        const aboutStats = document.querySelectorAll('.about-stat');
        if (aboutStats.length && typeof animateCounter === 'function') {
            const ob = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        ob.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            aboutStats.forEach(stat => ob.observe(stat));
        }
    };
}

// Cursor trail effect (optional - can be enabled)
const createCursorTrail = () => {
    const trail = document.createElement('div');
    trail.className = 'cursor-trail';
    document.body.appendChild(trail);
    
    document.addEventListener('mousemove', (e) => {
        const dot = document.createElement('div');
        dot.className = 'trail-dot';
        dot.style.left = e.clientX + 'px';
        dot.style.top = e.clientY + 'px';
        trail.appendChild(dot);
        
        setTimeout(() => {
            dot.remove();
        }, 1000);
    });
};

// Uncomment to enable cursor trail
// createCursorTrail();

// ===================================
// FLOATING MENU BUTTON FUNCTIONALITY
// ===================================
function initFloatingMenu() {
    const floatingBtn = document.getElementById('floatingMenuBtn');
    const navLinks = document.querySelector('.nav-links');
    const nav = document.querySelector('.myowndoc-nav');
    
    if (!floatingBtn || !navLinks) return;
    
    let isMenuOpen = false;
    
    floatingBtn.addEventListener('click', () => {
        isMenuOpen = !isMenuOpen;
        
        // Toggle classes
        floatingBtn.classList.toggle('menu-active', isMenuOpen);
        navLinks.classList.toggle('nav-visible', isMenuOpen);
        
        // Update aria attributes
        floatingBtn.setAttribute('aria-expanded', isMenuOpen);
        floatingBtn.setAttribute('aria-label', isMenuOpen ? 'Cerrar menú' : 'Abrir menú');
        
        // Prevent body scroll when menu is open
        document.body.style.overflow = isMenuOpen ? 'hidden' : '';
    });
    
    // Close menu when clicking on a nav link
    const navLinksItems = navLinks.querySelectorAll('.nav-link, .nav-link-cta');
    navLinksItems.forEach(link => {
        link.addEventListener('click', () => {
            if (isMenuOpen) {
                isMenuOpen = false;
                floatingBtn.classList.remove('menu-active');
                navLinks.classList.remove('nav-visible');
                floatingBtn.setAttribute('aria-expanded', 'false');
                floatingBtn.setAttribute('aria-label', 'Abrir menú');
                document.body.style.overflow = '';
            }
        });
    });
    
    // Close menu on ESC key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && isMenuOpen) {
            isMenuOpen = false;
            floatingBtn.classList.remove('menu-active');
            navLinks.classList.remove('nav-visible');
            floatingBtn.setAttribute('aria-expanded', 'false');
            floatingBtn.setAttribute('aria-label', 'Abrir menú');
            document.body.style.overflow = '';
        }
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (isMenuOpen && 
            !floatingBtn.contains(e.target) && 
            !navLinks.contains(e.target)) {
            isMenuOpen = false;
            floatingBtn.classList.remove('menu-active');
            navLinks.classList.remove('nav-visible');
            floatingBtn.setAttribute('aria-expanded', 'false');
            floatingBtn.setAttribute('aria-label', 'Abrir menú');
            document.body.style.overflow = '';
        }
    });
}

// Initialize floating menu
initFloatingMenu();
