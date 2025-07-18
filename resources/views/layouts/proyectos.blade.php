@extends('layouts.app')

@section('content')
    <main class="main">

       <!-- Page Title -->
        <div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg);">
            <div class="container position-relative">
                <h1>Proyectos</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('inicio') }}">Inicio</a></li>
                        <li class="current">Proyectos</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Projects Section -->
        <!-- Projects Section -->
        <section id="projects" class="projects section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Proyectos</h2>
                <p>Mira los proyectos en los que hemos trabajado</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    {{-- <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-remodeling">Remodeling</li>
                        <li data-filter=".filter-construction">Construction</li>
                        <li data-filter=".filter-repairs">Repairs</li>
                        <li data-filter=".filter-design">Design</li>
                    </ul><!-- End Portfolio Filters --> --}}

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/cabania-inipulli-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Cabaña Iñipulli</h4>
                                    <p>Cabaña ubicada en Iñipulli</p>
                                    <a href="assets/img/projects/cabania-inipulli-1.jpg" title="Iñipulli"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/cabania-losrobles-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Cabaña Los Robles</h4>
                                    <p>Cabaña Los Robles</p>
                                    <a href="assets/img/projects/cabania-losrobles-1.jpg" title="Cabaña Los Robles"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/cabania-puile-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Cabaña en Puile</h4>
                                    <p>Cabaña en Puile</p>
                                    <a href="assets/img/projects/cabania-puile-1.jpg" title="Cabaña en Puile"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/cabania-puile-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Cabaña en Puile</h4>
                                    <p>Cabaña con ubicación en Puile</p>
                                    <a href="assets/img/projects/cabania-puile-2.jpg" title="Cabaña Puile"
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/cabania-puringuepobre-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Cabaña Puringue Pobre</h4>
                                    <p>Cabaña Puringue Pobre</p>
                                    <a href="assets/img/projects/cabania-puringuepobre-1.jpg"
                                        title="Cabaña en Puringue Pobre" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/casa-linguento-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Cabaña en Linguento</h4>
                                    <p>Cabaña con ubicación en linguento</p>
                                    <a href="assets/img/projects/casa-linguento-1.jpg" title="Cabaña en Linguento"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/casa-linguento-2.jpeg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Casa en Linguento</h4>
                                    <p>Casa con ubicación en linguento</p>
                                    <a href="assets/img/projects/casa-linguento-2.jpeg" title="Casa en Linguento"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/casa-malalhue-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Casa en Malalhue</h4>
                                    <p>Casa ubicada en Malalhue</p>
                                    <a href="assets/img/projects/casa-malalhue-1.jpg" title="Casa en Malalhue"
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/casa-meliquina-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Casa en Meliquina</h4>
                                    <p>Casa ubicada en Meliquina</p>
                                    <a href="assets/img/projects/casa-meliquina-1.jpg" title="Casa en Meliquina"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/casa-puquila-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>CAsa en Puquila</h4>
                                    <p>Casa con ubicación en puquila</p>
                                    <a href="assets/img/projects/casa-puquila-1.jpg" title="CAsa en Puquila"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/casa-valdivia-1.jpeg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Casa Valdivia</h4>
                                    <p>Casa con ubicación en valdivia</p>
                                    <a href="assets/img/projects/casa-valdivia-1.jpeg" title="Casa Valdivia"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/galpon-lanco-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Galpón en Lanco</h4>
                                    <p>Galpón ubicado en Lanco</p>
                                    <a href="assets/img/projects/galpon-lanco-1.jpg" title="Galón con ubicación Lanco"
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

    </main>
@endsection
