document.addEventListener('DOMContentLoaded', function() {
    const numberOfStars = 500;

    function createStars() {
        const starField = document.createElement('div');
        starField.id = 'stars';
        document.body.appendChild(starField);

        for (let i = 0; i < numberOfStars; i++) {
            const star = document.createElement('div');
            star.className = 'star';
            
            const size = Math.random() * 2 + 1;
            star.style.width = `${size}px`;
            star.style.height = `${size}px`;

            star.style.top = `${Math.random() * 100}%`;
            star.style.left = `${Math.random() * 100}%`;
            
            const translateX = (Math.random() - 0.5) * 2000;
            const translateY = (Math.random() - 0.5) * 2000;
            star.style.setProperty('--translate-x', `${translateX}px`);
            star.style.setProperty('--translate-y', `${translateY}px`);
            star.style.animationDuration = `${Math.random() * 30 + 30}s`;

            starField.appendChild(star);
        }
    }

    createStars();

    const baseUrl = '';
    const sections = document.querySelectorAll('section');
    const links = document.querySelectorAll('.nav-link');

    function updateURL() {
        let maxVisibleHeight = 0;
        let currentSectionUrl = '';

        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            const visibleHeight = Math.min(rect.bottom, window.innerHeight) - Math.max(rect.top, 0);

            if (visibleHeight > maxVisibleHeight) {
                maxVisibleHeight = visibleHeight;
                currentSectionUrl = section.getAttribute('data-url');
            }
        });

        if (currentSectionUrl) {
            const newUrl = `/${currentSectionUrl}`;
            if (window.location.pathname !== newUrl) {
                history.replaceState(null, null, newUrl);
            }
        }
    }

    window.addEventListener('load', updateURL);
    window.addEventListener('scroll', updateURL);

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const sectionId = link.getAttribute('data-section');
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        });
    });

    const path = window.location.pathname.replace(baseUrl, '').replace('/', '');
    if (path) {
        const targetSection = document.querySelector(`[data-url="${path}"]`);
        if (targetSection) {
            targetSection.scrollIntoView();
        }
    }

        // Función para lanzar confeti
        function launchConfetti() {
            const duration = 10 * 1000; // Duración del confeti
            const end = Date.now() + duration;
    
            (function frame() {
                confetti({
                    particleCount: 5,
                    angle: 60,
                    spread: 55,
                    startVelocity: 25,
                    decay: 0.9,
                    scalar: 1,
                    ticks: 200,
                    origin: { x: Math.random(), y: Math.random() - 0.2 },
                });
                if (Date.now() < end) {
                    requestAnimationFrame(frame);
                }
            })();
        }
    
        // Función para verificar si se ha llegado a la sección final al 50%
    function checkScroll() {
        const lastSection = document.querySelector('section:last-of-type'); // Selecciona la última sección
        const rect = lastSection.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        // Verifica si el 50% de la última sección está visible
        if (rect.top <= windowHeight * 0.5 && rect.bottom >= windowHeight * 0.5) {
            launchConfetti();
            // Eliminar el listener después de lanzar confeti para no lanzar múltiples veces
            window.removeEventListener('scroll', checkScroll);
        }
    }
    
        // Agregar el evento scroll
        window.addEventListener('scroll', checkScroll);

        // Agregar evento de clic a la imagen
    const confettiImage = document.getElementById('celebrateImage');
    confettiImage.addEventListener('click', launchConfetti);
});