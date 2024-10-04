document.addEventListener('DOMContentLoaded', function() {
    const numberOfStars = 500;

    // Función para crear estrellas
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

    // Función para actualizar la URL
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

    // Lógica para manejar la descarga de PDFs
    const downloadButtons = document.querySelectorAll('[data-pdf-url]');

    downloadButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            // Permitir la descarga sin interferir con la lógica de URL
            event.stopPropagation(); // Detiene la propagación del evento para que el script de URLs no lo maneje.
            const pdfUrl = button.getAttribute('data-pdf-url');
            window.location.href = pdfUrl; // Redirecciona a la URL para descargar el PDF
        });
    });

    // En caso de que la página ya tenga una URL con una sección específica
    const path = window.location.pathname.replace(baseUrl, '').replace('/', '');
    if (path) {
        const targetSection = document.querySelector(`[data-url="${path}"]`);
        if (targetSection) {
            targetSection.scrollIntoView();
        }
    }
});
