/* 
  Main Interaction Scripts 
*/

document.addEventListener('DOMContentLoaded', () => {
    
    // Smooth scroll for nav links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if(targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if(targetElement){
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px"
    };

    const fadeUpObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0)";
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Apply animation styles dynamically
    const animatedElements = document.querySelectorAll('.project-card, .section-title, .hero-content > *');
    
    animatedElements.forEach((el, index) => {
        el.style.opacity = "0";
        el.style.transform = "translateY(20px)";
        // Use modulo to stagger nicely without accumulating massive delays for bottom elements
        const delay = (index % 5) * 0.1; 
        el.style.transition = `opacity 0.4s ease-out ${delay}s, transform 0.4s ease-out ${delay}s`;
        fadeUpObserver.observe(el);
    });

    // Theme toggle with localStorage + system default
    const root = document.documentElement;
    const toggle = document.getElementById('theme-toggle');
    const getStored = () => { try { return localStorage.getItem('km-theme'); } catch (e) { return null; } };
    const initTheme = getStored() || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    root.setAttribute('data-theme', initTheme);
    const syncToggle = () => { if (toggle) toggle.setAttribute('aria-pressed', root.getAttribute('data-theme') === 'dark' ? 'true' : 'false'); };
    syncToggle();
    if (toggle) {
        toggle.addEventListener('click', () => {
            const next = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
            root.setAttribute('data-theme', next);
            try { localStorage.setItem('km-theme', next); } catch (e) {}
            syncToggle();
        });
    }

    // Mobile nav toggle
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');
    if (navToggle && navLinks) {
        navToggle.addEventListener('click', () => {
            const open = navLinks.classList.toggle('open');
            navToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
        navLinks.addEventListener('click', (e) => {
            if (e.target.closest('a')) navLinks.classList.remove('open');
        });
    }

    // Scrollspy: highlight nav link for section in view
    const spyLinks = Array.from(document.querySelectorAll('.nav-links a[href^="#"]'));
    const spyTargets = spyLinks
        .map(a => document.querySelector(a.getAttribute('href')))
        .filter(Boolean);
    if (spyLinks.length && spyTargets.length && 'IntersectionObserver' in window) {
        const spy = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    spyLinks.forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + entry.target.id));
                }
            });
        }, { rootMargin: '-40% 0px -55% 0px', threshold: 0 });
        spyTargets.forEach(t => spy.observe(t));
    }

    // Optional: Dynamic navbar shadow on scroll
    const header = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.boxShadow = '0 8px 24px rgba(15,23,42,.08)';
        } else {
            header.style.boxShadow = 'none';
        }
    });
});
