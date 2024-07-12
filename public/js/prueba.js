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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mi portafolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    {{-- <header>
        <h1>Header de la Página</h1>
        <nav>
            <ul>
                <li><a href="/seccion1" class="nav-link" data-section="seccion1">Sección 1</a></li>
                <li><a href="/seccion2" class="nav-link" data-section="seccion2">Sección 2</a></li>
                <li><a href="/seccion3" class="nav-link" data-section="seccion3">Sección 3</a></li>
            </ul>
        </nav>
    </header> --}}
    <main>
        <section id="seccion1" data-url="seccion1">
            <h1>seccion 1</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum 
                distinctio adipisci nisi nostrum aperiam suscipit labore saepe 
                veritatis, minus quod minima vitae, voluptate mollitia, sint tenetur 
                nam. Quia, provident! Nisi!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum 
                distinctio adipisci nisi nostrum aperiam suscipit labore saepe 
                veritatis, minus quod minima vitae, voluptate mollitia, sint tenetur 
                nam. Quia, provident! Nisi!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum 
                distinctio adipisci nisi nostrum aperiam suscipit labore saepe 
                veritatis, minus quod minima vitae, voluptate mollitia, sint tenetur 
                nam. Quia, provident! Nisi!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum 
                distinctio adipisci nisi nostrum aperiam suscipit labore saepe 
                veritatis, minus quod minima vitae, voluptate mollitia, sint tenetur 
                nam. Quia, provident! Nisi!
            </p>

        </section>

        <section id="seccion2" data-url="seccion2">
            <h1>seccion 2</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem 
                inventore perferendis possimus? Quas libero maxime accusantium 
                ratione tempora. Aspernatur porro eveniet accusamus blanditiis 
                quasi repellat sunt quia nobis debitis eum.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem 
                inventore perferendis possimus? Quas libero maxime accusantium 
                ratione tempora. Aspernatur porro eveniet accusamus blanditiis 
                quasi repellat sunt quia nobis debitis eum.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem 
                inventore perferendis possimus? Quas libero maxime accusantium 
                ratione tempora. Aspernatur porro eveniet accusamus blanditiis 
                quasi repellat sunt quia nobis debitis eum.
            </p>
        </section>

        <section id="seccion3" data-url="seccion3">
            <h1>secion 3</h1>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium 
                impedit asperiores dolore eos labore repellat odit minima dolorem 
                aperiam nemo, voluptas libero velit repudiandae inventore molestiae 
                quaerat nobis omnis hic!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium 
                impedit asperiores dolore eos labore repellat odit minima dolorem 
                aperiam nemo, voluptas libero velit repudiandae inventore molestiae 
                quaerat nobis omnis hic!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium 
                impedit asperiores dolore eos labore repellat odit minima dolorem 
                aperiam nemo, voluptas libero velit repudiandae inventore molestiae 
                quaerat nobis omnis hic!
            </p>
        </section>

        <section id="seccion4" data-url="seccion4">
            <h1>seccion 4</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum 
                distinctio adipisci nisi nostrum aperiam suscipit labore saepe 
                veritatis, minus quod minima vitae, voluptate mollitia, sint tenetur 
                nam. Quia, provident! Nisi!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum 
                distinctio adipisci nisi nostrum aperiam suscipit labore saepe 
                veritatis, minus quod minima vitae, voluptate mollitia, sint tenetur 
                nam. Quia, provident! Nisi!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum 
                distinctio adipisci nisi nostrum aperiam suscipit labore saepe 
                veritatis, minus quod minima vitae, voluptate mollitia, sint tenetur 
                nam. Quia, provident! Nisi!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum 
                distinctio adipisci nisi nostrum aperiam suscipit labore saepe 
                veritatis, minus quod minima vitae, voluptate mollitia, sint tenetur 
                nam. Quia, provident! Nisi!
            </p>

        </section>

        <section id="seccion5" data-url="seccion5">
            <h1>seccion 5</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem 
                inventore perferendis possimus? Quas libero maxime accusantium 
                ratione tempora. Aspernatur porro eveniet accusamus blanditiis 
                quasi repellat sunt quia nobis debitis eum.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem 
                inventore perferendis possimus? Quas libero maxime accusantium 
                ratione tempora. Aspernatur porro eveniet accusamus blanditiis 
                quasi repellat sunt quia nobis debitis eum.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem 
                inventore perferendis possimus? Quas libero maxime accusantium 
                ratione tempora. Aspernatur porro eveniet accusamus blanditiis 
                quasi repellat sunt quia nobis debitis eum.
            </p>
        </section>

        <article class="col-lg-12">
            <p>
                Soy un desarrollador web apasionado por crear experiencias en línea 
                atractivas y funcionales. Con una sólida base en HTML, CSS y el Bootstrap, 
                diseño interfaces de usuario que no solo son visualmente atractivas, 
                sino también intuitivas y accesibles. <br><br>
                Mi experiencia en PHP y Laravel me permite construir aplicaciones web 
                robustas y escalables, mientras que el uso de JavaScript añade 
                interactividad y dinamismo a mis proyectos. 
                Además, domino MySQL para gestionar y optimizar bases de datos, asegurando 
                que la información se almacene y se recupere de manera eficiente. <br><br>
                El control de versionamiento es una parte fundamental de mi flujo de trabajo, 
                utilizando Git para gestionar el código y colaborar efectivamente con otros 
                desarrolladores. <br><br>
                Estoy comprometido con el aprendizaje continuo y la adopción 
                de las mejores prácticas en el desarrollo web. <br><br>
                ¿Quieres saber más sobre mis proyectos y cómo puedo ayudarte con tu próximo 
                desafío tecnológico? ¡Explora mi portafolio o contáctame directamente!
            </p>
        </article>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/prueba.js') }}"></script>
</body>
</html>
