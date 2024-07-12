document.addEventListener('DOMContentLoaded', function() {
    const baseUrl = ''; // Dejar baseUrl vacío para usar la URL actual del navegador
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

    // Actualizar URL al cargar la página y al hacer scroll
    window.addEventListener('load', updateURL);
    window.addEventListener('scroll', updateURL);

    // Manejar clics en los enlaces de navegación
    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const sectionId = link.getAttribute('data-section');
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        });
    });

    // Desplazar a la sección correcta al cargar la página
    const path = window.location.pathname.replace(baseUrl, '').replace('/', '');
    if (path) {
        const targetSection = document.querySelector(`[data-url="${path}"]`);
        if (targetSection) {
            targetSection.scrollIntoView();
        }
    }
});
