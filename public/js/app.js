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
});
