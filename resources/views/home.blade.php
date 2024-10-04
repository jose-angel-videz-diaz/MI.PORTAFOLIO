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
    <!-- {{-- <header>
        <h1>Header de la Página</h1>
        <nav>
            <ul>
                <li><a href="/seccion1" class="nav-link" data-section="seccion1">Sección 1</a></li>
                <li><a href="/seccion2" class="nav-link" data-section="seccion2">Sección 2</a></li>
                <li><a href="/seccion3" class="nav-link" data-section="seccion3">Sección 3</a></li>
            </ul>
        </nav>
    </header> --}} -->
    <main class="pt-5 ms-4 me-4" id="top">
        <div class="container text-black">
            <section class="row acerca-de-mi mb-5 px-5 py-5 text-white selector-1" id="seccion1" data-url="acerca-de-mi">
                <article class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h1 class="t-m">¡Hola bienvenid@s a mi portafolio! <br> Me llamo José Ángel Videz Díaz</h1><br>
                </article>

                <article class="col-lg-4 col-md-12 col-sm-12 mb-3">
                    <img class="img-fluid img rounded-circle" src="{{ asset('images/mi_foto.jpg') }}" alt="mi foto de presentacion">
                </article>

                <article class="col-lg-8 col-md-12 col-sm-12 mt-8 d-flex align-items-center">
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
                        <li><i class="bi bi-star-fill"></i><b class="me-2">Nombre:</b>José Ángel Videz Díaz</li>
                        <li><i class="bi bi-star-fill"></i><b class="me-2">Fecha de nacimiento:</b>02/07/2004</li>
                        <li><i class="bi bi-star-fill"></i><b class="me-2">Identificación:</b>CC. 1043169104 de Bogotá D.C</li>
                        <li><i class="bi bi-star-fill"></i><b class="me-2">Ciudad de residencia:</b>Bogotá D.C</li>
                        <li><i class="bi bi-star-fill"></i><b class="me-2">Idiomas:</b>Español</li>
                        <li><i class="bi bi-star-fill"></i><b class="me-2">Correo:</b>joseangelvidezdiaz@gmail.com</li>
                        <li><i class="bi bi-star-fill"></i><b class="me-2">Celular:</b>3126506222</li>
                        <li><i class="bi bi-star-fill"></i><b class="me-2">WhatsApp:</b>3126506222</li>
                    </ul>
                </article>
            </section>

            <section class="row seccion-2 mb-5 px-5 py-5 text-white selector-2" id="seccion2" data-url="mis-proyectos">
                <article>
                    <h1 class="text-center t-a">Mis Proyectos</h1>
                </article>

                <article class="mb-3">
                    <p>
                        A continuación, encontrarás una selección de proyectos en los que he trabajado, 
                        demostrando mis habilidades en desarrollo web y mi pasión por crear soluciones 
                        innovadoras. Cada proyecto refleja mi compromiso con la calidad y la mejora contínua.
                    </p>
                </article>

                <article class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="card bord-card mb-3">
                        <img src="{{ asset('images/imagen_card_1.gif') }}" class="card-img-top img-card" alt="...">
                        <div class="card-header text-center">
                            <h5>Proyecto 1</h5>
                        </div>
                        <div class="card-body">
                        <h4 class="card-title text-center">UNIVERSARIUM</h4>
                            <p class="card-text text-center">
                                Desarrollo de una pagina para un planetario
                            </p>
                            <h5>Tecnologias</h5>
                            <ul>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-filetype-css me-2"></i> 
                                    <span>CSS</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info text-white progress-bar-striped progress-bar-animated" style="width: 12%">12%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-filetype-html me-2"></i> 
                                    <span>HTML</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-danger text-white progress-bar-striped progress-bar-animated" style="width: 51%">51%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-bootstrap me-2"></i> 
                                    <span>Bootstrap</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-purple text-white progress-bar-striped progress-bar-animated" style="width: 35%">35%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-git me-2"></i> 
                                    <span>GIT</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success text-white progress-bar-striped progress-bar-animated" style="width: 1%">1%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-github me-2"></i> 
                                    <span>GITHUB</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning text-white progress-bar-striped progress-bar-animated" style="width: 1%">1%</div>
                                    </div>
                                </li>
                            </ul>

                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-universarium" class="btn btn-primary btn-card d-flex justify-content-center rounded-pill">Ver mas sobre este proyecto</a>
                        </div>
                    </div>
                </article>

                <div class="modal" tabindex="-1" id="modal-universarium">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content bord-card">
                            <div class="modal-header justify-content-center">
                                <h5 class="modal-title text-center w-100">UNIVERSARIUM</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    Desarrollé esta pagina para una planetario hipotetico, con un diseño 
                                    amigable y moderno. La página incluye secciones de información sobre la 
                                    empresa, servicios ofrecidos, presentación de clientes, seccion de precios 
                                    y un formulario de contacto interactivo.
                                </p>
                                <hr>
                                <h5 class="text-center mb-3">Caracteristicas Claves</h5>
                                <ul class="star-list-modals">
                                    <li><i class="bi bi-star-fill"></i> Página de inicio con información destacada del planetario.</li>
                                    <li><i class="bi bi-star-fill"></i> Sección de servicios que detalla las experiencias ofrecidas, como observaciones astronómicas y cines.</li>
                                    <li><i class="bi bi-star-fill"></i> Listado de clientes asociados que apoyan y colaboran con el planetario.</li>
                                    <li><i class="bi bi-star-fill"></i> Tabla de precios de los distintos servicios y paquetes disponibles.</li>
                                    <li><i class="bi bi-star-fill"></i> Sección de contacto con un formulario interactivo para contacto con el planetario</li>
                                </ul>
                                <hr>
                                <h5 class="text-center">Inspirado en</h5>
                                <p>
                                    Esta pagina fue creada en inspiración al curso fron-end de Jommircha, para el desarrollo de interfaces con bootstrap 5
                                    <a class="link-modal" href="https://youtu.be/ng8ur8KNrpU?si=5a-bnQzWReYrG3eP" target="_blank">¡haz clic aqui para ver mas!</a>
                                </p>
                                <hr>
                                <div class="text-center">
                                    <i class="fs-icon bi bi-rocket-takeoff"></i>
                                </div>
                                <div class="text-center">
                                    <small class="text-white">
                                        &copy;2023 @Jose Angel Videz Diaz
                                    </small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="https://jose-angel-videz-diaz.github.io/UNIVERSARIUM/index.html" class="btn btn-primary btn-card rounded-pill" target="_blank">Ir al proyecto</a>
                                <a href="https://github.com/jose-angel-videz-diaz/UNIVERSARIUM" class="btn btn-primary btn-card rounded-pill" target="_blank">Repositorio GitHub</a>
                                <button type="button" class="btn btn-primary btn-card rounded-pill" data-bs-dismiss="modal">Cerrar </button>
                            </div>
                        </div>
                    </div>
                </div>

                <article class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="card bord-card mb-3">
                        <img src="{{ asset('images/imagen_proximamente_cards.gif') }}" class="card-img-top img-card" alt="...">
                        <div class="card-header text-center">
                            <h5>Proximamente... Proyecto 2</h5>
                        </div>
                        <div class="card-body">
                        <h4 class="card-title text-center">Proximamente...</h4>
                            <p class="card-text text-center">
                                Proximamente...
                            </p>
                            <h5>Proximamente...</h5>
                            <ul>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-code-slash me-2"></i>
                                    <span>Proximamente...</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info text-white progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-code-slash me-2"></i>
                                    <span>Proximamente...</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-danger text-white progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-code-slash me-2"></i>
                                    <span>Proximamente...</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-purple text-white progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-code-slash me-2"></i>
                                    <span>Proximamente...</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-purple text-white progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-code-slash me-2"></i>
                                    <span>Proximamente...</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-purple text-white progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
                                    </div>
                                </li>
                            </ul>

                            <a class="btn btn-primary btn-card d-flex justify-content-center rounded-pill">Proximamente...</a>
                        </div>
                    </div>
                </article>

                <article class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="card bord-card mb-3">
                        <img src="{{ asset('images/imagen_proximamente_cards.gif') }}" class="card-img-top img-card" alt="...">
                        <div class="card-header text-center">
                            <h5>Proximamente... Proyecto 2</h5>
                        </div>
                        <div class="card-body">
                        <h4 class="card-title text-center">Proximamente...</h4>
                            <p class="card-text text-center">
                                Proximamente...
                            </p>
                            <h5>Proximamente...</h5>
                            <ul>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-code-slash me-2"></i>
                                    <span>Proximamente...</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info text-white progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-code-slash me-2"></i>
                                    <span>Proximamente...</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-danger text-white progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-code-slash me-2"></i>
                                    <span>Proximamente...</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-purple text-white progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-code-slash me-2"></i>
                                    <span>Proximamente...</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-purple text-white progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-code-slash me-2"></i>
                                    <span>Proximamente...</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-purple text-white progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
                                    </div>
                                </li>
                            </ul>

                            <a class="btn btn-primary btn-card d-flex justify-content-center rounded-pill">Proximamente...</a>
                        </div>
                    </div>
                </article>

                <article class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="card bord-card mb-3">
                        <img src="{{ asset('images/imagen_proximamente_cards.gif') }}" class="card-img-top img-card" alt="...">
                        <div class="card-header text-center">
                            <h5>Proximamente... Proyecto 2</h5>
                        </div>
                        <div class="card-body">
                        <h4 class="card-title text-center">Proximamente...</h4>
                            <p class="card-text text-center">
                                Proximamente...
                            </p>
                            <h5>Proximamente...</h5>
                            <ul>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-code-slash me-2"></i>
                                    <span>Proximamente...</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info text-white progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-code-slash me-2"></i>
                                    <span>Proximamente...</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-danger text-white progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-code-slash me-2"></i>
                                    <span>Proximamente...</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-purple text-white progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-code-slash me-2"></i>
                                    <span>Proximamente...</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-purple text-white progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="bi bi-code-slash me-2"></i>
                                    <span>Proximamente...</span>
                                    <div class="progress ms-3 flex-grow-1" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-purple text-white progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
                                    </div>
                                </li>
                            </ul>

                            <a class="btn btn-primary btn-card d-flex justify-content-center rounded-pill">Proximamente...</a>
                        </div>
                    </div>
                </article>

                <article class="col-lg-12 col-md-12 col-sm-12 mb-3 d-flex">
                    <a class="btn btn-primary btn-top-s2 ms-auto rounded-pill" href="#top">Volver arriba<i class="bi bi-chevron-double-up ms-2"></i></a>
                </article>
            </section>
    
            <section class="row seccion-3 mb-5 px-5 py-5 text-white selector-3" id="seccion3" data-url="mi-formacion-y-experiencia">
                <article class="col-lg-12">
                    <h1 class="text-center t-v">Mi Formacion y Experiencia</h1>
                </article>

                <article class="mb-3">
                    <p>
                        A continuación, encontraras informacón sobre mis estudios y experiencia, cada etapa de mi formación y 
                        experiencia han sido un escalón hacia la excelencia.
                        Te invito a conocer el recorrido que me ha llevado a ser quien soy hoy.
                    </p>
                </article>

                <article class="mb-3 col-lg-12">
                    <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active link fs-4" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Formación</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link link fs-4" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Experiencia</a>
                        </li>
                    </ul>

                    <div class="tab-content px-4 py-4" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item bg-1">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button text-dark bg-2 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Bachiller Académico
                                    </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body text-dark">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-6">
                                                    <p>Aquí se visualizara la información sobre este nivel académico</p>
                                                    <ul>
                                                        <li class="d-flex"><i class="bi bi-file-text me-2"></i><b class="me-1">Titulo obtenido:</b>Bachiller Académico</li>
                                                        <li class="d-flex"><i class="bi bi-calendar-week me-2"></i><b class="me-2">Año de finalización:</b>2022</li>
                                                        <li class="d-flex"><i class="bi bi-buildings me-2"></i><b class="me-2">Institución de formación:</b>Colegio El Cortijo Vianey I.E.D</li>
                                                        <li class="d-flex"><i class="bi bi-geo-alt me-2"></i><b class="me-2">Ciudad de formación:</b>Bogotá D.C</li>
                                                        <li class="d-flex"><i class="bi bi-geo me-2"></i><b class="me-2">Expedido por:</b>Secretaria de Educación del Distrito</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-12 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p>Aquí podras descargar el acta de estudio y el diploma que certifica este nivel académico</p>
                                                        </div>

                                                        <div class="col-md-6 text-center">
                                                            <a href="{{ route('download.diploma.bachiller') }}" class="btn border-download btn-download w-100 mb-2">
                                                                <p>Descargar Diploma</p>
                                                                <i class="bi bi-file-earmark-arrow-down fs-icon-s3"></i>
                                                            </a>
                                                        </div>

                                                        <div class="col-md-6 text-center">
                                                            <a href="{{ route('download.acta.bachiller') }}" class="btn border-download btn-download w-100">
                                                                <p>Descargar Acta de Grado</p>
                                                                <i class="bi bi-file-earmark-arrow-down-fill fs-icon-s3"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-1">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed text-dark bg-2 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        Técnico En Programación De Software
                                    </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                                        <div class="accordion-body text-dark">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-6">
                                                    <p>Aquí se visualizara la información sobre este nivel académico</p>
                                                    <ul>
                                                        <li class="d-flex"><i class="bi bi-file-text me-2"></i><b class="me-1">Titulo obtenido:</b>Técnico En Programación De Software</li>
                                                        <li class="d-flex"><i class="bi bi-calendar-week me-2"></i><b class="me-2">Año de finalización:</b>2024</li>
                                                        <li class="d-flex"><i class="bi bi-buildings me-2"></i><b class="me-2">Institución de formación:</b>SENA</li>
                                                        <li class="d-flex"><i class="bi bi-geo-alt me-2"></i><b class="me-2">Ciudad de formación:</b>Bogotá D.C</li>
                                                        <li class="d-flex"><i class="bi bi-geo me-2"></i><b class="me-2">Expedido por:</b>Ministerio de Educación Nacional</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-12 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p>Aquí podras descargar el acta de estudio y el diploma que certifica este nivel académico</p>
                                                        </div>

                                                        <div class="col-md-6 text-center">
                                                            <a href="{{ route('download.diploma.tecnico') }}" class="btn border-download btn-download w-100 mb-2">
                                                                <p>Descargar Diploma</p>
                                                                <i class="bi bi-file-earmark-arrow-down fs-icon-s3"></i>
                                                            </a>
                                                        </div>

                                                        <div class="col-md-6 text-center">
                                                            <a href="{{ route('download.acta.tecnico') }}" class="btn border-download btn-download w-100">
                                                                <p>Descargar Acta de Grado</p>
                                                                <i class="bi bi-file-earmark-arrow-down-fill fs-icon-s3"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade text-dark" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item bg-1">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button text-dark bg-2 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Aprendiz Como Desarrollador Junior
                                    </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body text-dark">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-6">
                                                    <p>Aquí se visualizara la información sobre este cargo y experiencia</p>
                                                    <ul>
                                                        <li class="d-flex"><i class="bi bi-calendar-check me-2"></i><b class="me-1">Periodo de trabajo:</b>23/10/2023 hasta 24/04/2024</li>
                                                        <li class="d-flex"><i class="bi bi-person-check me-2"></i><b class="me-1">Experiencia:</b>6 meses</li>
                                                        <li class="d-flex"><i class="bi bi-calendar-week me-2"></i><b class="me-2">Año de finalización:</b>2024</li>
                                                        <li class="d-flex"><i class="bi bi-buildings me-2"></i><b class="me-2">Lugar de trabajo:</b>Finleco BPO</li>
                                                        <li class="d-flex"><i class="bi bi-geo-alt me-2"></i><b class="me-2">Ciudad de trabajo:</b>Bogotá D.C</li>
                                                        <li class="d-flex"><i class="bi bi-geo me-2"></i><b class="me-2">Expedido por:</b>Finleco BPO</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-12 col-lg-6">
                                                    <p>
                                                        Me desempeñé como programador junior, donde manejé bases de datos y códigos de aplicaciones
                                                        que gestionaban información de diversas compañías e integraban datos proporcionados por
                                                        los usuarios. Realicé migraciones de información, administré servidores y participé en la
                                                        documentación de software, asegurando la calidad y
                                                        la continuidad de los proyectos.
                                                    </p>
                                                </div>
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="row">
                                                        <div class="col-md-12 text-center fw-bold">
                                                            <p>Aquí podras descargar el certificado que consta mi experiencia de trabajo en este lugar</p>
                                                        </div>

                                                        <div class="col-md-12 text-center">
                                                            <a href="{{ route('download.certificado.aprendiz') }}" class="btn border-download btn-download w-100 mb-2">
                                                                <p>Descargar Certificado</p>
                                                                <i class="bi bi-file-earmark-arrow-down fs-icon-s3"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-lg-12 col-md-12 col-sm-12 mb-3 d-flex">
                    <a class="btn btn-primary btn-top-s3 ms-auto rounded-pill" href="#top">Volver arriba<i class="bi bi-chevron-double-up ms-2"></i></a>
                </article>
            </section>
    
            <section class="row seccion-4 mb-5 px-5 py-5 selector-4" id="seccion4" data-url="mi-contacto">
                <article class="col-lg-12">
                    <h1 class="text-center t-n">Mi Contacto</h1>
                </article>

                <article class="mb-3 text-white">
                    <p>
                        A continuación, encontraras mi informacón de contacto, Si estás buscando a alguien que pueda llevar 
                        tus proyectos al siguiente nivel, estás en el lugar correcto. Contáctame y hagamos que tus ideas se 
                        conviertan en éxitos reales para tu empresa.
                    </p>
                </article>

                <article class="col-lg-12 mb-3">
                    <div class="row border-s4-card px-4 py-4 mt-4 g-3">
                        <div class="col-lg-12 col-sm-12 text-center">
                            <h2 class="t-n">Contactame por medio de</h2>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center">
                            <a class="text-decoration-none" href="https://api.whatsapp.com/send?phone=573126506222" target="_blank">
                                <div class="border-s4-card border-s4-card-what p-3">
                                    <h4>WhatsApp</h4>
                                    <i class="bi bi-whatsapp ms-2 fs-icon"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center">
                            <a class="text-decoration-none" href="https://m.me/100012700908694" target="_blank">
                                <div class="border-s4-card border-s4-card-mess p-3">
                                    <h4>Messenger</h4>
                                    <i class="bi bi-messenger ms-2 fs-icon"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center">
                            <a class="text-decoration-none" href="https://www.instagram.com/jose_angel_videz_diaz?igsh=MTR0b3M3NXlqb3Rpbw==" target="_blank">
                                <div class="border-s4-card border-s4-card-ins p-3">
                                    <h4>Instagram</h4>
                                    <i class="bi bi-instagram ms-2 fs-icon"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center">
                            <a class="text-decoration-none" href="https://mail.google.com/mail/?view=cm&fs=1&to=joseangelvidezdiaz@gmail.com&su=Contacto%20y%20mensaje%20del%20portafolio%20de%20José%20Ángel%20Videz%20Díaz&body=Hola%20José%20Ángel,%20Buenas%20tardes" target="_blank">
                                <div class="border-s4-card border-s4-card-email p-3">
                                    <h4>Correo</h4>
                                    <i class="bi bi-envelope-paper ms-2 fs-icon"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center">
                            <a class="text-decoration-none" href="https://twitter.com/messages/compose?recipient_id=1612909015016546304" target="_blank">
                                <div class="border-s4-card border-s4-card-twitter p-3">
                                    <h4>Twitter</h4>
                                    <i class="bi bi-twitter-x fs-icon"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center mb-4">
                            <a class="text-decoration-none" href="tel:+573126506222" target="_blank">
                                <div class="border-s4-card border-s4-card-tel p-3">
                                    <h4>Teléfono</h4>
                                    <i class="bi bi-telephone ms-2 fs-icon"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row border-s4-card px-4 py-4 mt-4 g-3">
                        <div class="col-lg-12 col-sm-12 text-center">
                            <h2 class="t-n">Visita mis redes sociales</h2>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center">
                            <a class="text-decoration-none" href="https://www.linkedin.com/in/jos%C3%A9-%C3%A1ngel-videz-d%C3%ADaz?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
                                <div class="border-s4-card border-s4-card-link p-3">
                                    <h4>Linkedin</h4>
                                    <i class="bi bi-linkedin ms-2 fs-icon"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center">
                            <a class="text-decoration-none" href="https://github.com/jose-angel-videz-diaz" target="_blank">
                                <div class="border-s4-card border-s4-card-git p-3">
                                    <h4>GitHub</h4>
                                    <i class="bi bi-github ms-2 fs-icon"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-12 text-center">
                            <a class="text-decoration-none" href="https://web.facebook.com/profile.php?id=100012700908694" target="_blank">
                                <div class="border-s4-card border-s4-card-face p-3">
                                    <h4>Facebook</h4>
                                    <i class="bi bi-facebook ms-2 fs-icon"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row border-s4-card px-4 py-4 mt-4 g-3">
                        <div class="col-lg-12 col-sm-12 text-center">
                            <h2 class="t-n">Descarga y visualiza mi hoja de vida</h2>
                        </div>
                        <div class="col-lg-12 text-center">
                            <a class="text-decoration-none" href="{{ route('download.hv') }}">
                                <div class="border-s4-card border-s4-card-hv p-3">
                                    <h4>Descargar HV</h4>
                                    <i class="bi bi-paperclip ms-2 fs-icon"></i>
                                </div>
                            </a>
                        </div>
                        <div class="ratio ratio-16x9"> 
                            <iframe src="{{ route('ver-pdf') }}" frameborder="0" class="w-100"></iframe>
                        </div>
                    </div>
                </article>

                <article class="col-lg-12 col-md-12 col-sm-12 mb-3 d-flex">
                    <a class="btn btn-primary btn-top-s4 ms-auto rounded-pill" href="#top">Volver arriba<i class="bi bi-chevron-double-up ms-2"></i></a>
                </article>
            </section>
            <section class="row seccion-5 mb-5 px-5 py-5 selector-4" id="seccion5" data-url="agradecimientos">
                <article class="col-lg-12 mb-3">
                    <h1 class="text-center t-r">¡Has llegado al final!</h1>
                </article>
                <article class="mb-3 text-white">
                    <div class="credits-container">
                        <div class="credits">
                            <h2 class="space">Agradecimientos</h2>
                            <p>Quiero expresar mi más sincero agradecimiento a todos los visitantes de mi página. Su apoyo y interés son fundamentales para seguir creciendo y mejorando.</p>
                            <h3 class="space">Colegio El Cortijo Vianey I.E.D</h3>
                            <p>Donde adquirí una base sólida para mi educación y desarrollo personal.</p>
                            <h3 class="space">Institución SENA</h3>
                            <p>Por ser clave en mi formación profesional y en el desarrollo de mis habilidades técnicas.</p>
                            <h3 class="space">Finleco BPO</h3>
                            <p>Por brindarme la oportunidad de crecer en un entorno profesional enriquecedor.</p>
                            <h2 class="space">¡Gracias por tu visita y por ser parte de mi trayectoria!</h2><br><br><br><br>
                            <h1>¡GRACIAS!</h1><br><br><br>
                            <h1>:)</h1>
                        </div>
                    </div>
                </article>
                <article class="mb-5 t-r text-center">
                    <p class="fw-bold">
                        Este sitio web fue desarrollado utilizando JavaScript, Laravel, Bootstrap 5, HTML, CSS y Composer. Además, 
                        cuenta con un repositorio disponible en GitHub para facilitar su gestión y colaboración.
                    </p>
                </article>
                <article class="text-center mt-5">
                    <small class="text-white">
                        &copy;2024 @Jose Angel Videz Diaz
                    </small>
                </article>
            </section>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>