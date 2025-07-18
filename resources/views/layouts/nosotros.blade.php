@extends('layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg);">
            <div class="container position-relative">
                <h1>Sobre nosotros</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('inicio') }}">Inicio</a></li>
                        <li class="current">Nosotros</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img
                            src="assets/img/about.png"></div>

                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="inner-title">Conocenos</h2>
                        <div class="our-story">
                            <h4>Chile 2020</h4>
                            <h3>Nuestra historia</h3>
                            <p>Todo gran proyecto nace de una visión. La nuestra comenzó con nuestro fundador, Moisés.

                                Durante años, Moisés no solo acumuló conocimiento y experiencia en este sector, sino que
                                cultivó una verdadera pasión por el arte y la técnica de nuestro oficio. Vio la oportunidad
                                de hacer las cosas de una manera diferente, con un sello propio y un compromiso
                                inquebrantable con la calidad.

                                Con el deseo de materializar esa visión, fundó esta empresa. Lo que empezó como el sueño de
                                un experto, hoy es una compañía en plena expansión, impulsada por el mismo espíritu de
                                excelencia que nos vio nacer. Cada día, seguimos creciendo y evolucionando, pero manteniendo
                                la misma pasión del primer día.</p>
                            {{-- <ul>
                                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                        commo</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit
                                        in</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span>
                                </li>
                            </ul>
                            <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit
                                repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>

                            <div class="watch-video d-flex align-items-center position-relative">
                                <i class="bi bi-play-circle"></i>
                                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox stretched-link">Watch
                                    Video</a>
                            </div> --}}
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Stats Counter Section -->
        <section id="stats-counter" class="stats-counter section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Nuestros Logros en Cifras</h2>
                <p>Los números que respaldan nuestra experiencia, calidad y compromiso en cada proyecto.</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-building-check color-blue flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Proyectos Entregados</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-rulers color-orange flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="120000" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Metros Cuadrados Construidos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-emoji-smile color-green flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Clientes Satisfechos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-people color-pink flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="45" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Especialistas Calificados</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Stats Counter Section -->

        <!-- Alt Services Section -->
        <section id="alt-services" class="alt-services section">

            <div class="container">

                <div class="row justify-content-around gy-4">

                    <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/alt-services.jpg" alt="Equipo de construcción revisando planos">
                    </div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <h3>Construimos Confianza, Entregamos Calidad</h3>
                        <p>Nuestro enfoque se basa en una gestión integral que garantiza la excelencia en cada etapa. Desde
                            la planificación detallada hasta la entrega final, nos comprometemos con la calidad, la
                            seguridad y la satisfacción total de nuestros clientes.</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-compass flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Planificación y Diseño</a></h4>
                                <p>Creamos planos detallados y soluciones de ingeniería innovadoras que optimizan recursos y
                                    aseguran la viabilidad de cada proyecto.</p>
                            </div>
                        </div>
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Construcción de Calidad</a></h4>
                                <p>Utilizamos materiales de primera y mano de obra calificada para ejecutar obras que
                                    cumplen con los más altos estándares de durabilidad y seguridad.</p>
                            </div>
                        </div>
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-clipboard2-data flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Gestión de Proyectos</a></h4>
                                <p>Supervisamos cada detalle, coordinando equipos y gestionando plazos para garantizar una
                                    entrega puntual y dentro del presupuesto acordado.</p>
                            </div>
                        </div>
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
                            <i class="bi bi-award flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Garantía Post-Venta</a></h4>
                                <p>Nuestro compromiso no termina con la entrega. Ofrecemos un sólido respaldo y garantía
                                    para asegurar la tranquilidad y confianza de nuestros clientes.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Alt Services Section -->

        <!-- Alt Services 2 Section -->
        <section id="alt-services-2" class="alt-services-2 section">

            <div class="container">

                <div class="row justify-content-around gy-4">

                    <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up"
                        data-aos-delay="100">
                        <h3>Nuestro Compromiso con Cada Obra</h3>
                        <p>
                            Más que construir edificios, construimos relaciones a largo plazo. Nuestra filosofía se centra
                            en pilares fundamentales que garantizan la transparencia, la seguridad y la excelencia en todo
                            lo que hacemos.
                        </p>

                        <div class="row">

                            <div class="col-lg-6 icon-box d-flex">
                                <i class="bi bi-shield-check flex-shrink-0"></i>
                                <div>
                                    <h4>Seguridad Primero</h4>
                                    <p>Implementamos los más estrictos protocolos de seguridad para proteger a nuestro
                                        equipo, la comunidad y tu inversión.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 icon-box d-flex">
                                <i class="bi bi-gem flex-shrink-0"></i>
                                <div>
                                    <h4>Calidad Garantizada</h4>
                                    <p>Seleccionamos solo proveedores y materiales de primera línea para asegurar la
                                        durabilidad y el valor de cada proyecto.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 icon-box d-flex">
                                <i class="bi bi-graph-up-arrow flex-shrink-0"></i>
                                <div>
                                    <h4>Transparencia Total</h4>
                                    <p>Mantenemos una comunicación abierta sobre los avances y el presupuesto en cada fase
                                        del proyecto.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 icon-box d-flex">
                                <i class="bi bi-lightbulb flex-shrink-0"></i>
                                <div>
                                    <h4>Innovación y Eficiencia</h4>
                                    <p>Aplicamos técnicas constructivas modernas y tecnología para optimizar tiempos, costos
                                        y resultados.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/features-3-2.jpg"
                            alt="Ingenieros supervisando una obra">
                    </div>

                </div>

            </div>

        </section><!-- /Alt Services 2 Section -->

        @include('layouts.partials.testimonios')

    </main>
@endsection
