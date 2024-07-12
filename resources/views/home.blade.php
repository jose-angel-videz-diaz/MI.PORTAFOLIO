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
    <main class="pt-5">
        <div class="container text-black">
            <section class="row acerca-de-mi mb-5 px-5 py-5 text-white" id="seccion1" data-url="acerca-de-mi">
                <article class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h1 class="t-m">¡Hola bienvenid@s a mi portafolio! <br> Me llamo José Ángel Videz Díaz</h1><br>
                </article>

                <article class="col-lg-4 col-md-4 col-sm-12 text-sm-center mb-3">
                    <img class="img-fluid img" src="{{ asset('images/mi_foto.jpg') }}" alt="mi foto de presentacion">
                </article>

                <article class="col-lg-8 col-md-8 col-sm-12 mt-8 d-flex align-items-center">
                    <p>
                        Soy desarrollador de software con un enfoque constante
                        en la innovación y la eficiencia. <br><br>
                        Mi experiencia incluye el desarrollo de aplicaciones web. Manejo lenguajes y
                        tecnologías como PHP, CSS, HTML, GIT, GITHUB, y tengo experiencia en frameworks 
                        como Laravel y Bootstrap. <br> <br>
                        Combino habilidades con un enfoque centrado en el usuario, mi objetivo es entregar 
                        software que no solo funcione, sino que también marque una diferencia significativa 
                        en la eficiencia y satisfacción del usuario final.
                    </p>
                </article>

                <article class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <h3 class="text-center t-m"><u>Habilidades</u></h3>
                    <ul class="star-list mt-3">
                        <li><i class="bi bi-star-fill"></i>Comunicación Efectiva</li>
                        <li><i class="bi bi-star-fill"></i>Trabajo en Equipo</li>
                        <li><i class="bi bi-star-fill"></i>Pensamiento Crítico</li>
                        <li><i class="bi bi-star-fill"></i>Resolución de Problemas</li>
                        <li><i class="bi bi-star-fill"></i>Responsabilidad</li>
                        <li><i class="bi bi-star-fill"></i>Gestión del Tiempo</li>
                        <li><i class="bi bi-star-fill"></i>Adaptabilidad y Flexibilidad</li>
                        <li><i class="bi bi-star-fill"></i>Paciencia y Perseverancia</li>
                    </ul>
                </article>
                
                <article class="col-lg-6 col-md-6 col-sm-12">
                    <h3 class="text-center mt-3 t-m"><u>Datos básicos</u></h3>
                    <ul class="star-list mt-3">
                        <li><i class="bi bi-star-fill"></i><b>Nombre:</b> José Ángel Videz Díaz</li>
                        <li><i class="bi bi-star-fill"></i><b>Fecha de nacimiento:</b> 02/07/2004</li>
                        <li><i class="bi bi-star-fill"></i><b>Identificación:</b> CC. 1043169104 de Bogotá D.C</li>
                        <li><i class="bi bi-star-fill"></i><b>Ciudad de residencia:</b> Bogotá D.C</li>
                        <li><i class="bi bi-star-fill"></i><b>Idiomas:</b> Español</li>
                        <li><i class="bi bi-star-fill"></i><b>Correo:</b> joseangelvidezdiaz@gmail.com</li>
                        <li><i class="bi bi-star-fill"></i><b>Teléfono:</b> 3126506222</li>
                    </ul>
                </article>
            </section>

            <section class="row seccion-2 mb-5 px-5 py-5 text-white" id="seccion2" data-url="mis-proyectos">
                <article class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="card bord-card">
                        <div class="card-header text-center">
                          Proyecto 1
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </article>

                <article class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="card bord-card">
                        <div class="card-header text-center">
                          Proyecto 2
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </article>

                <article class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="card bord-card">
                        <div class="card-header text-center">
                          Proyecto 3
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </article>

                <article class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card bord-card">
                        <div class="card-header text-center">
                          Proyecto 4
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </article>
            </section>
    
            <section class="row seccion-3 mb-5" id="seccion3" data-url="mi-formacion-y-experiencia">
                <article class="col-lg-12">
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
                </article>
            </section>
    
            <section class="row seccion-4 mb-5" id="seccion4" data-url="mi-contacto">
                <article class="col-lg-12">
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
                </article>
            </section>
    
            <section class="row seccion-5 mb-5" id="seccion5" data-url="seccion5">
                <article class="col-lg-12">
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
                </article>
            </section>
    
            <section class="row seccion-6 mb-5" id="seccion6" data-url="seccion6">
                <article class="col-lg-12">
                    <h1>secion 6</h1>
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
                </article>
            </section>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('js/script.js') }}"></script> --}}
    <script src="{{ asset('js/background.js') }}"></script>
</body>
</html>