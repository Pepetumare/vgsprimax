@extends('layouts.app')

@section('content')
    <!-- No es necesario un <main> aquí, ya que tu plantilla principal (app.blade.php) debería tenerlo -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero section dark-background">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-7 text-center">
                        <h2 class="display-4">Construimos Proyectos, Creamos Futuro</h2>
                        <p class="lead">En VGS Primax transformamos tus ideas en realidad. Nos especializamos en proyectos
                            de construcción a medida, garantizando calidad, durabilidad y soluciones eficientes para cada
                            cliente.</p>
                        <a href="#get-started" class="btn-get-started">Solicitar Cotización</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            {{-- NOTA: Reemplaza estas imágenes con fotos de alta calidad de TUS proyectos --}}
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-1.jpg') }}"
                    alt="Proyecto residencial moderno de VGS Primax">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-2.jpg') }}"
                    alt="Obra de construcción industrial en proceso">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-3.jpg') }}"
                    alt="Detalle arquitectónico de una fachada">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-4.jpg') }}"
                    alt="Interior de un proyecto comercial finalizado">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-5.jpg') }}"
                    alt="Vista aérea de un complejo habitacional">
            </div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- /Hero Section -->

    <section id="get-started" class="get-started section">
        <div class="container">
            <div class="row justify-content-between gy-4">

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <div class="content">
                        <h3>¿Listo para Empezar tu Proyecto?</h3>
                        <p>Cuéntanos tu idea. Nuestro equipo de expertos se pondrá en contacto contigo para asesorarte y
                            ofrecerte una cotización a la medida de tus necesidades, sin compromiso.</p>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
                    {{-- 
                    IMPORTANTE: 
                    1. El 'action' debe apuntar a una ruta de Laravel.
                    2. Se añade enctype="multipart/form-data" para permitir el envío de archivos.
                --}}
                    <form action="{{ route('contacto.enviar') }}" method="post" class="php-email-form"
                        enctype="multipart/form-data">
                        {{-- Directiva de seguridad OBLIGATORIA en Laravel para formularios --}}
                        @csrf

                        <h3>Solicita una Cotización</h3>
                        <p>Completa el formulario y te contactaremos a la brevedad.</p>
                        <div class="row gy-3">

                            <div class="col-12">
                                <input type="text" name="name" class="form-control" placeholder="Nombre Completo"
                                    required>
                            </div>

                            <div class="col-12">
                                <input type="email" class="form-control" name="email" placeholder="Correo Electrónico"
                                    required>
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control" name="phone" placeholder="Teléfono de Contacto"
                                    required>
                            </div>

                            <div class="col-12">
                                <select name="modelo_casa" class="form-select">
                                    <option value="" selected disabled>Selecciona el modelo que te interesa...
                                    </option>
                                    <option value="Tineo">Modelo Tineo (36 m²)</option>
                                    <option value="Canelo">Modelo Canelo (48 m²)</option>
                                    <option value="Arrayán">Modelo Arrayán (54 m²)</option>
                                    <option value="Alerce">Modelo Alerce (63 m²)</option>
                                    <option value="Olivillo">Modelo Olivillo (72 m²)</option>
                                    <option value="Ulmo">Modelo Ulmo (86 m²)</option>
                                    <option value="Notro">Modelo Notro (112 m²)</option>
                                    <option value="Coigüe">Modelo Coigüe (124 m²)</option>
                                    <option value="Otro">Otro (Diseño Personalizado)</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="plano_adjunto" class="form-label"
                                    style="font-size: 0.9em; color: #6c757d;">Adjuntar plano o archivo (Opcional)</label>
                                <input type="file" class="form-control" name="plano_adjunto" id="plano_adjunto">
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6"
                                    placeholder="Cuéntanos más sobre tu proyecto o si tienes alguna duda" required></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <div class="loading">Cargando...</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Tu solicitud ha sido enviada. ¡Gracias por contactarnos!</div>
                                <button type="submit">Enviar Solicitud</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Proyectos Destacados ======= -->
    <section id="constructions" class="constructions section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Proyectos Destacados</h2>
            <p>Conoce algunas de las obras que demuestran nuestra dedicación, calidad y atención al detalle.</p>
        </div>
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg">
                                    <img src="{{ asset('assets/img/projects/casa-valdivia-1.jpeg') }}"
                                        alt="Fachada de casa moderna en Valdivia">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Residencia Familiar en Valdivia</h4>
                                    <p>Diseño y construcción de vivienda unifamiliar, optimizando la aislación térmica para
                                        el clima del sur de Chile y maximizando la luz natural.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg">
                                    <img src="{{ asset('assets/img/projects/galpon-lanco-1.jpg') }}"
                                        alt="Estructura de galpón industrial en Lanco">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Galpón Industrial en Lanco</h4>
                                    <p>Construcción de estructura de alta resistencia para uso industrial, cumpliendo con
                                        normativas de seguridad y optimizando el espacio de trabajo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

            </div>
        </div>
    </section><!-- /Constructions Section -->

    <!-- ======= Nuestros Servicios ======= -->
    <section id="services" class="services section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Nuestros Servicios</h2>
            <p>Ofrecemos soluciones integrales para llevar tu proyecto del papel a la realidad.</p>
        </div>
        <div class="container">
            <div class="row gy-4">

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-helmet-safety"></i>
                        </div>
                        <h3>Obras de Construcción</h3>
                        <p>Ejecutamos proyectos residenciales, comerciales e industriales con los más altos estándares de
                            calidad y seguridad.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <h3>Fabricación de Paneles SIP</h3>
                        <p>Producimos paneles SIP, ofreciendo una solución constructiva moderna con una aislación
                            térmica y acústica superior.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>
        </div>
    </section><!-- /Services Section -->
@endsection
