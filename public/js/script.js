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

    const sectionColors = {
        seccion1: '#ffca28', // Color para la sección 1 amarillo
        seccion2: '#e7201f', // Color para la sección 2 rojo
        seccion3: '#891cba', // Color para la sección 3 morado
        seccion4: '#33ff57', // Color para la sección 4 verde
        seccion5: '#0f0f0f', // Color para la sección 5 negro
        seccion6: '#020429'  // Color para la sección 6 azul
    };

    function updateScrollbarColor(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const currentSection = entry.target.getAttribute('data-url');
                if (currentSection && sectionColors[currentSection]) {
                    document.documentElement.style.setProperty('--scrollbar-thumb-color', sectionColors[currentSection]);
                }
            }
        });
    }

    const observer = new IntersectionObserver(updateScrollbarColor, {
        threshold: 0.5 // Detectar cuando al menos el 50% de la sección está en vista
    });

    sections.forEach(section => {
        observer.observe(section);
    });
});
