
    
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });
        
        // Smooth scrolling for navigation links (FIXED FOR BOOTSTRAP NAVBAR)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        // Close the navbar (if mobile menu is open)
        const navbarCollapse = document.querySelector('.navbar-collapse');
        if (navbarCollapse.classList.contains('show')) {
            const bsCollapse = new bootstrap.Collapse(navbarCollapse);
            bsCollapse.hide();
        }

        // Smooth scroll after a slight delay (for menu to close)
        e.preventDefault();
        setTimeout(() => {
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        }, 100); // 100ms delay
    });
});
        
        // Add scroll effect to navbar (if you have one in header)
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (navbar) {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }
        });
        
        // Lightbox configuration
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'fadeDuration': 300
        });


