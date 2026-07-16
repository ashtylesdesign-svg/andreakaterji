// The Flow Circle - Interactive Script

document.addEventListener('DOMContentLoaded', function() {
    
    // Animate benefit cards on scroll
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const benefitObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '0';
                entry.target.style.transform = 'translateY(30px)';
                
                setTimeout(() => {
                    entry.target.style.transition = 'all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, 100);
                
                benefitObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe all benefit cards
    const benefitCards = document.querySelectorAll('.benefit-card');
    benefitCards.forEach((card, index) => {
        card.style.transitionDelay = `${index * 0.1}s`;
        benefitObserver.observe(card);
    });
    
    // Animate membership features on scroll
    const featureObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '0';
                entry.target.style.transform = 'translateY(30px)';
                
                setTimeout(() => {
                    entry.target.style.transition = 'all 0.6s ease-out';
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, 100);
                
                featureObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    const membershipFeatures = document.querySelectorAll('.membership-feature');
    membershipFeatures.forEach((feature, index) => {
        feature.style.transitionDelay = `${index * 0.15}s`;
        featureObserver.observe(feature);
    });
    
    // Add hover effect to benefit cards
    benefitCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            const icon = this.querySelector('.benefit-icon');
            if (icon) {
                icon.style.transform = 'scale(1.1) rotate(5deg)';
                icon.style.transition = 'transform 0.3s ease';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            const icon = this.querySelector('.benefit-icon');
            if (icon) {
                icon.style.transform = 'scale(1) rotate(0deg)';
            }
        });
    });
    
    // Parallax effect for background glows
    let ticking = false;
    
    function updateParallax() {
        const scrolled = window.pageYOffset;
        
        const glows = document.querySelectorAll('.circle-bg-glow, .cta-glow');
        glows.forEach((glow, index) => {
            const speed = 0.3 + (index * 0.1);
            const yPos = -(scrolled * speed);
            glow.style.transform = `translateY(${yPos}px)`;
        });
        
        ticking = false;
    }
    
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(updateParallax);
            ticking = true;
        }
    });
    
    // Animate video frame on scroll
    const videoFrame = document.querySelector('.video-frame');
    if (videoFrame) {
        const videoObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    videoFrame.style.opacity = '0';
                    videoFrame.style.transform = 'scale(0.9)';
                    
                    setTimeout(() => {
                        videoFrame.style.transition = 'all 1s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
                        videoFrame.style.opacity = '1';
                        videoFrame.style.transform = 'scale(1)';
                    }, 200);
                    
                    videoObserver.unobserve(videoFrame);
                }
            });
        }, { threshold: 0.3 });
        
        videoObserver.observe(videoFrame);
    }
    
    // Add pulse effect to CTA button
    const ctaButton = document.querySelector('.cta-button');
    if (ctaButton) {
        setInterval(() => {
            ctaButton.style.transform = 'scale(1.02)';
            setTimeout(() => {
                ctaButton.style.transform = 'scale(1)';
            }, 200);
        }, 3000);
    }
    
    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href.length > 1) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
    
    // Add active state to current page in navigation
    const currentPage = window.location.pathname.split('/').pop();
    const navLinks = document.querySelectorAll('.orbit-item');
    navLinks.forEach(link => {
        const linkPage = link.getAttribute('href').split('/').pop();
        if (linkPage === currentPage) {
            link.classList.add('active');
        }
    });
    
    // Rotate benefit cards slightly on hover for depth effect
    benefitCards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 20;
            const rotateY = (centerX - x) / 20;
            
            const cardInner = card.querySelector('.benefit-card-inner');
            if (cardInner) {
                cardInner.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            }
        });
        
        card.addEventListener('mouseleave', function() {
            const cardInner = card.querySelector('.benefit-card-inner');
            if (cardInner) {
                cardInner.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
            }
        });
    });
    
    // Animate ornaments
    const ornaments = document.querySelectorAll('.circle-ornament-top, .circle-ornament-bottom, .cta-ornament-top, .cta-ornament-bottom');
    ornaments.forEach(ornament => {
        const svg = ornament.querySelector('svg');
        if (svg) {
            svg.style.opacity = '0';
            svg.style.transform = 'scale(0.8)';
            
            setTimeout(() => {
                svg.style.transition = 'all 0.8s ease-out';
                svg.style.opacity = '1';
                svg.style.transform = 'scale(1)';
            }, 300);
        }
    });
    
    // Add stagger animation to particles
    const particles = document.querySelectorAll('.circle-particle');
    particles.forEach((particle, index) => {
        particle.style.animationDelay = `${index * 0.5}s`;
    });
    
    console.log('The Flow Circle - Interactive features loaded ✨');
});
