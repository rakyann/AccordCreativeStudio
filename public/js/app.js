document.addEventListener('DOMContentLoaded', () => {
    // Scroll Reveal Logic
    const revealElements = document.querySelectorAll('.reveal');
    
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target); // Trigger only once
            }
        });
    }, {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    });

    revealElements.forEach(el => {
        revealObserver.observe(el);
    });

    // Realtime Clock Logic
    function updateClocks() {
        const clockElements = document.querySelectorAll('.realtime-clock');
        if (clockElements.length === 0) return;

        const now = new Date();
        const options = { hour: '2-digit', minute: '2-digit', timeZoneName: 'short' };
        
        // Example: hardcoded to specific timezones or localized to device
        const localTime = now.toLocaleTimeString('en-US', options);
        
        clockElements.forEach(el => {
            // Can be extended to read data-timezone attributes
            el.textContent = localTime;
        });
    }

    setInterval(updateClocks, 1000);
    updateClocks(); // Initial call
    // Navbar logic
    const navbar = document.getElementById('navbar');
    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');

    // Sticky navbar effect
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    if (menuToggle) {
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
    }

    // Close mobile menu on link click
    const links = document.querySelectorAll('.nav-link, .nav-cta');
    links.forEach(link => {
        link.addEventListener('click', () => {
            if (navLinks.classList.contains('active')) {
                menuToggle.classList.remove('active');
                navLinks.classList.remove('active');
            }
        });
    });
});
