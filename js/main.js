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
        el.style.transition = `opacity 0.6s ease-out ${index * 0.1}s, transform 0.6s ease-out ${index * 0.1}s`;
        fadeUpObserver.observe(el);
    });

    // Optional: Dynamic header background on scroll
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.background = 'rgba(15, 23, 42, 0.95)';
            header.style.boxShadow = '0 1px 0 rgba(148,163,184,0.1)';
        } else {
            header.style.background = 'rgba(15, 23, 42, 0.85)';
            header.style.boxShadow = 'none';
        }
    });
});
