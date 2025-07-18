@extends('layouts.app')

@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg);">
            <div class="container position-relative">
                <h1>Nuestros Modelos</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('inicio') }}">Inicio</a></li>
                        <li class="current">Modelos</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
        <div class="container">

            <section class="modelo-seccion">
                <div class="row align-items-center modelo-card">
                    <div class="col-md-6 p-0">
                        <img src="{{ asset('assets/img/modelos/tineo/modelo-tineo.png') }}" alt="Casa Modelo Tineo">
                    </div>
                    <div class="col-md-6 p-4">
                        <h3>Modelo "Tineo"</h3>
                        <p>Ideal para parejas, como primera vivienda o refugio de fin de semana.</p>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#modalModeloTineo">
                            Ver más detalles
                        </button>
                    </div>
                </div>
            </section>

            <section class="modelo-seccion">
                <div class="row align-items-center modelo-card">
                    <div class="col-md-6 p-4" style="text-align: right">
                        <h3>Modelo "Canelo"</h3>
                        <p>Un diseño eficiente y funcional para la familia joven.</p>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#modalModeloCanelo">
                            Ver más detalles
                        </button>
                    </div>
                    <div class="col-md-6 p-0">
                        <img src="{{ asset('assets/img/modelos/canelo/modelo-canelo.png') }}" alt="Casa Modelo Canelo">
                    </div>
                </div>
            </section>
            <section class="modelo-seccion">
                <div class="row align-items-center modelo-card">
                    <div class="col-md-6 p-0">
                        <img src="{{ asset('assets/img/modelos/arrayan/modelo-arrayan.png') }}" alt="Casa Modelo Arrayán">
                    </div>
                    <div class="col-md-6 p-4">
                        <h3>Modelo "Arrayán"</h3>
                        <p>Mayor comodidad y espacios más amplios para el día a día.</p>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#modalModeloArrayan">
                            Ver más detalles
                        </button>
                    </div>
                </div>
            </section>

            <section class="modelo-seccion">
                <div class="row align-items-center modelo-card">
                    <div class="col-md-6 p-4" style="text-align: right">
                        <h3>Modelo "Alerce"</h3>
                        <p>El equilibrio perfecto entre espacio y comodidad, con un segundo baño para mayor conveniencia.
                        </p>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#modalModeloAlerce">
                            Ver más detalles
                        </button>
                    </div>
                    <div class="col-md-6 p-0">
                        <img src="{{ asset('assets/img/modelos/alerce/modelo-alerce.png') }}" alt="Casa Modelo Alerce">
                    </div>
                </div>
            </section>
            <section class="modelo-seccion">
                <div class="row align-items-center modelo-card">
                    <div class="col-md-6 p-0">
                        <img src="{{ asset('assets/img/modelos/olivillo/modelo-olivillo.png') }}" alt="Casa Modelo Olivillo">
                    </div>
                    <div class="col-md-6 p-4">
                        <h3>Modelo "Olivillo"</h3>
                        <p>Amplitud y confort en cada rincón, ideal para quienes valoran el espacio interior.</p>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#modalModeloOlivillo">
                            Ver más detalles
                        </button>
                    </div>
                </div>
            </section>

            <section class="modelo-seccion">
                <div class="row align-items-center modelo-card">
                    <div class="col-md-6 p-4" style="text-align: right">
                        <h3>Modelo "Ulmo"</h3>
                        <p>Un hogar espacioso y versátil, con áreas sociales generosas para compartir.</p>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#modalModeloUlmo">
                            Ver más detalles
                        </button>
                    </div>
                    <div class="col-md-6 p-0">
                        <img src="{{ asset('assets/img/modelos/ulmo/modelo-ulmo.png') }}" alt="Casa Modelo Ulmo">
                    </div>
                </div>
            </section>
            <section class="modelo-seccion">
                <div class="row align-items-center modelo-card">
                    <div class="col-md-6 p-0">
                        <img src="{{ asset('assets/img/modelos/notro/modelo-notro.png') }}" alt="Casa Modelo Notro">
                    </div>
                    <div class="col-md-6 p-4">
                        <h3>Modelo "Notro"</h3>
                        <p>Diseño premium con dormitorios amplios y una distribución que privilegia el lujo y la comodidad.
                        </p>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#modalModeloNotro">
                            Ver más detalles
                        </button>
                    </div>
                </div>
            </section>

            <section class="modelo-seccion">
                <div class="row align-items-center modelo-card">
                    <div class="col-md-6 p-4" style="text-align: right">
                        <h3>Modelo "Coigüe"</h3>
                        <p>Nuestra opción más completa. Perfecta para familias grandes que buscan el máximo espacio y
                            confort.</p>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#modalModeloCoigue">
                            Ver más detalles
                        </button>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="col-md-6 p-0">
                            <img src="{{ asset('assets/img/modelos/coigue/modelo-coigue.png') }}" alt="Casa Modelo Coigüe">
                        </div>
                    </div>
            </section>

        </div>
        <div class="modal fade" id="modalModeloTineo" tabindex="-1" aria-labelledby="labelModeloTineo" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="labelModeloTineo">Detalles del Modelo "Tineo"</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselModeloTineo" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselModeloTineo" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Imagen 1"></button>
                                <button type="button" data-bs-target="#carouselModeloTineo" data-bs-slide-to="1"
                                    aria-label="Imagen 2"></button>
                                <button type="button" data-bs-target="#carouselModeloTineo" data-bs-slide-to="2"
                                    aria-label="Imagen 3"></button>
                            </div>
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/img/modelos/tineo/modelo-tineo.png') }}" class="d-block w-100"
                                        alt="Modelo Tineo - Imagen 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/modelos/tineo/modelo-tineo1.jpg') }}" class="d-block w-100"
                                        alt="Modelo Tineo - Imagen 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/modelos/tineo/modelo-tineo2.jpg') }}" class="d-block w-100"
                                        alt="Modelo Tineo - Imagen 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselModeloTineo"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselModeloTineo"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>
                        <h4>Características Principales</h4>
                        <ul>
                            <li><strong>Superficie:</strong> 36 m²</li>
                            <li><strong>Dormitorios:</strong> 2</li>
                            <li><strong>Baños:</strong> 1</li>
                            <li><strong>Extras:</strong> Cocina integrada y optimización de espacios de guardado.</li>
                        </ul>
                        <p>El modelo Tineo es la solución perfecta para quienes buscan maximizar la funcionalidad en un
                            espacio compacto. Ideal para parejas, como primera vivienda o como un acogedor refugio de fin de
                            semana.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalModeloCanelo" tabindex="-1" aria-labelledby="labelModeloCanelo"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="labelModeloCanelo">Detalles del Modelo "Canelo"</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselModeloCanelo" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselModeloCanelo" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Imagen 1"></button>
                                <button type="button" data-bs-target="#carouselModeloCanelo" data-bs-slide-to="1"
                                    aria-label="Imagen 2"></button>
                                <button type="button" data-bs-target="#carouselModeloCanelo" data-bs-slide-to="2"
                                    aria-label="Imagen 3"></button>
                            </div>
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/img/modelos/canelo/modelo-canelo.png') }}"
                                        class="d-block w-100" alt="Modelo Canelo - Imagen 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/modelos/canelo/modelo-canelo1.jpeg') }}"
                                        class="d-block w-100" alt="Modelo Canelo - Imagen 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/modelos/canelo/modelo-canelo2.jpeg') }}"
                                        class="d-block w-100" alt="Modelo Canelo - Imagen 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselModeloCanelo"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselModeloCanelo"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>
                        <h4>Características Principales</h4>
                        <ul>
                            <li><strong>Superficie:</strong> 48 m²</li>
                            <li><strong>Dormitorios:</strong> 3</li>
                            <li><strong>Baños:</strong> 1</li>
                            <li><strong>Extras:</strong> Ventanas termopanel para aislación eficiente y living-comedor
                                conectado.</li>
                        </ul>
                        <p>Con un diseño eficiente y funcional para la familia joven, el modelo Canelo ofrece tres
                            dormitorios en una distribución inteligente que separa las áreas privadas de las sociales.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalModeloArrayan" tabindex="-1" aria-labelledby="labelModeloArrayan"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="labelModeloArrayan">Detalles del Modelo "Arrayán"</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselModeloArrayan" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselModeloArrayan" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Imagen 1"></button>
                                <button type="button" data-bs-target="#carouselModeloArrayan" data-bs-slide-to="1"
                                    aria-label="Imagen 2"></button>
                                <button type="button" data-bs-target="#carouselModeloArrayan" data-bs-slide-to="2"
                                    aria-label="Imagen 3"></button>
                            </div>
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active"><img
                                        src="{{ asset('assets/img/modelos/arrayan/modelo-arrayan.png') }}"
                                        class="d-block w-100" alt="Modelo Arrayán - Imagen 1"></div>
                                <div class="carousel-item"><img
                                        src="{{ asset('assets/img/modelos/arrayan/modelo-arrayan1.jpg') }}"
                                        class="d-block w-100" alt="Modelo Arrayán - Imagen 2"></div>
                                <div class="carousel-item"><img
                                        src="{{ asset('assets/img/modelos/arrayan/modelo-arrayan2.jpg') }}"
                                        class="d-block w-100" alt="Modelo Arrayán - Imagen 3"></div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselModeloArrayan"
                                data-bs-slide="prev"><span class="carousel-control-prev-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Anterior</span></button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselModeloArrayan"
                                data-bs-slide="next"><span class="carousel-control-next-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Siguiente</span></button>
                        </div>
                        <h4>Características Principales</h4>
                        <ul>
                            <li><strong>Superficie:</strong> 54 m²</li>
                            <li><strong>Dormitorios:</strong> 3</li>
                            <li><strong>Baños:</strong> 1</li>
                            <li><strong>Extras:</strong> Porche de acceso techado y espacio para clósets en todos los
                                dormitorios.</li>
                        </ul>
                        <p>El modelo Arrayán está pensado para quienes buscan mayor comodidad y espacios más amplios para el
                            día a día. Su diseño favorece la vida en familia, con un área social luminosa y dormitorios que
                            aseguran un descanso placentero.</p>
                    </div>
                    <div class="modal-footer"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Cerrar</button></div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalModeloAlerce" tabindex="-1" aria-labelledby="labelModeloAlerce"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="labelModeloAlerce">Detalles del Modelo "Alerce"</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselModeloAlerce" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselModeloAlerce" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Imagen 1"></button>
                                <button type="button" data-bs-target="#carouselModeloAlerce" data-bs-slide-to="1"
                                    aria-label="Imagen 2"></button>
                                <button type="button" data-bs-target="#carouselModeloAlerce" data-bs-slide-to="2"
                                    aria-label="Imagen 3"></button>
                            </div>
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active"><img
                                        src="{{ asset('assets/img/modelos/alerce/modelo-alerce.png') }}" class="d-block w-100"
                                        alt="Modelo Alerce - Imagen 1"></div>
                                <div class="carousel-item"><img
                                        src="{{ asset('assets/img/modelos/alerce/modelo-alerce1.jpg') }}" class="d-block w-100"
                                        alt="Modelo Alerce - Imagen 2"></div>
                                <div class="carousel-item"><img
                                        src="{{ asset('assets/img/modelos/alerce/modelo-alerce2.jpeg') }}" class="d-block w-100"
                                        alt="Modelo Alerce - Imagen 3"></div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselModeloAlerce"
                                data-bs-slide="prev"><span class="carousel-control-prev-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Anterior</span></button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselModeloAlerce"
                                data-bs-slide="next"><span class="carousel-control-next-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Siguiente</span></button>
                        </div>
                        <h4>Características Principales</h4>
                        <ul>
                            <li><strong>Superficie:</strong> 63 m²</li>
                            <li><strong>Dormitorios:</strong> 3</li>
                            <li><strong>Baños:</strong> 2</li>
                            <li><strong>Extras:</strong> Baño de visitas y logia o área de lavandería independiente.</li>
                        </ul>
                        <p>Encontrando el equilibrio perfecto entre espacio y comodidad, el modelo Alerce incorpora un
                            segundo baño para mayor conveniencia. Es una casa versátil, ideal para familias que crecen y
                            necesitan funcionalidad sin sacrificar el estilo.</p>
                    </div>
                    <div class="modal-footer"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Cerrar</button></div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalModeloOlivillo" tabindex="-1" aria-labelledby="labelModeloOlivillo"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="labelModeloOlivillo">Detalles del Modelo "Olivillo"</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselModeloOlivillo" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselModeloOlivillo" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Imagen 1"></button>
                                <button type="button" data-bs-target="#carouselModeloOlivillo" data-bs-slide-to="1"
                                    aria-label="Imagen 2"></button>
                                <button type="button" data-bs-target="#carouselModeloOlivillo" data-bs-slide-to="2"
                                    aria-label="Imagen 3"></button>
                            </div>
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active"><img
                                        src="{{ asset('assets/img/modelos/olivillo/modelo-olivillo.png') }}"
                                        class="d-block w-100" alt="Modelo Olivillo - Imagen 1"></div>
                                <div class="carousel-item"><img
                                        src="{{ asset('assets/img/modelos/olivillo/modelo-olivillo1.jpg') }}"
                                        class="d-block w-100" alt="Modelo Olivillo - Imagen 2"></div>
                                <div class="carousel-item"><img
                                        src="{{ asset('assets/img/modelos/olivillo/modelo-olivillo2.jpg') }}"
                                        class="d-block w-100" alt="Modelo Olivillo - Imagen 3"></div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselModeloOlivillo"
                                data-bs-slide="prev"><span class="carousel-control-prev-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Anterior</span></button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselModeloOlivillo"
                                data-bs-slide="next"><span class="carousel-control-next-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Siguiente</span></button>
                        </div>
                        <h4>Características Principales</h4>
                        <ul>
                            <li><strong>Superficie:</strong> 72 m²</li>
                            <li><strong>Dormitorios:</strong> 3</li>
                            <li><strong>Baños:</strong> 2</li>
                            <li><strong>Extras:</strong> Dormitorio principal con baño en suite y terraza posterior.</li>
                        </ul>
                        <p>El modelo Olivillo ofrece amplitud y confort en cada rincón. Diseñado para quienes valoran el
                            espacio interior, cuenta con un dormitorio principal en suite que proporciona privacidad y un
                            área social perfecta para recibir visitas.</p>
                    </div>
                    <div class="modal-footer"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Cerrar</button></div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalModeloUlmo" tabindex="-1" aria-labelledby="labelModeloUlmo"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="labelModeloUlmo">Detalles del Modelo "Ulmo"</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselModeloUlmo" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselModeloUlmo" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Imagen 1"></button>
                                <button type="button" data-bs-target="#carouselModeloUlmo" data-bs-slide-to="1"
                                    aria-label="Imagen 2"></button>
                                <button type="button" data-bs-target="#carouselModeloUlmo" data-bs-slide-to="2"
                                    aria-label="Imagen 3"></button>
                            </div>
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active"><img
                                        src="{{ asset('assets/img/modelos/ulmo/modelo-ulmo.png') }}" 
                                        class="d-block w-100" alt="Modelo Ulmo - Imagen 1"></div>
                                <div class="carousel-item"><img 
                                        src="{{ asset('assets/img/modelos/ulmo/modelo-ulmo1.jpg') }}"
                                        class="d-block w-100" alt="Modelo Ulmo - Imagen 2"></div>
                                <div class="carousel-item"><img 
                                        src="{{ asset('assets/img/modelos/ulmo/modelo-ulmo2.jpg') }}"
                                        class="d-block w-100" alt="Modelo Ulmo - Imagen 3"></div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselModeloUlmo"
                                data-bs-slide="prev"><span class="carousel-control-prev-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Anterior</span></button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselModeloUlmo"
                                data-bs-slide="next"><span class="carousel-control-next-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Siguiente</span></button>
                        </div>
                        <h4>Características Principales</h4>
                        <ul>
                            <li><strong>Superficie:</strong> 86 m²</li>
                            <li><strong>Dormitorios:</strong> 3</li>
                            <li><strong>Baños:</strong> 2</li>
                            <li><strong>Extras:</strong> Cocina con comedor de diario y sala de estar o home office.</li>
                        </ul>
                        <p>Como un hogar espacioso y versátil, el modelo Ulmo se destaca por sus áreas sociales generosas,
                            ideales para compartir. La inclusión de una sala de estar adicional ofrece flexibilidad para el
                            trabajo remoto o el entretenimiento familiar.</p>
                    </div>
                    <div class="modal-footer"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Cerrar</button></div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalModeloNotro" tabindex="-1" aria-labelledby="labelModeloNotro"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="labelModeloNotro">Detalles del Modelo "Notro"</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselModeloNotro" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselModeloNotro" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Imagen 1"></button>
                                <button type="button" data-bs-target="#carouselModeloNotro" data-bs-slide-to="1"
                                    aria-label="Imagen 2"></button>
                                <button type="button" data-bs-target="#carouselModeloNotro" data-bs-slide-to="2"
                                    aria-label="Imagen 3"></button>
                            </div>
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active"><img
                                        src="{{ asset('assets/img/modelos/notro/modelo-notro.png') }}" class="d-block w-100"
                                        alt="Modelo Notro - Imagen 1"></div>
                                <div class="carousel-item"><img
                                        src="{{ asset('assets/img/modelos/notro/modelo-notro1.jpg') }}" class="d-block w-100"
                                        alt="Modelo Notro - Imagen 2"></div>
                                <div class="carousel-item"><img
                                        src="{{ asset('assets/img/modelos/notro/modelo-notro2.jpg') }}" class="d-block w-100"
                                        alt="Modelo Notro - Imagen 3"></div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselModeloNotro"
                                data-bs-slide="prev"><span class="carousel-control-prev-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Anterior</span></button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselModeloNotro"
                                data-bs-slide="next"><span class="carousel-control-next-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Siguiente</span></button>
                        </div>
                        <h4>Características Principales</h4>
                        <ul>
                            <li><strong>Superficie:</strong> 112 m²</li>
                            <li><strong>Dormitorios:</strong> 3</li>
                            <li><strong>Baños:</strong> 2</li>
                            <li><strong>Extras:</strong> Walk-in clóset en dormitorio principal, cocina con isla central y
                                hall de acceso.</li>
                        </ul>
                        <p>El modelo Notro presenta un diseño premium con dormitorios amplios y una distribución que
                            privilegia el lujo. Cada detalle, desde el walk-in clóset hasta la isla de la cocina, está
                            pensado para una experiencia de vida superior.</p>
                    </div>
                    <div class="modal-footer"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Cerrar</button></div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalModeloCoigue" tabindex="-1" aria-labelledby="labelModeloCoigue"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="labelModeloCoigue">Detalles del Modelo "Coigüe"</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselModeloCoigue" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselModeloCoigue" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Imagen 1"></button>
                                <button type="button" data-bs-target="#carouselModeloCoigue" data-bs-slide-to="1"
                                    aria-label="Imagen 2"></button>
                                <button type="button" data-bs-target="#carouselModeloCoigue" data-bs-slide-to="2"
                                    aria-label="Imagen 3"></button>
                            </div>
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active"><img
                                        src="{{ asset('assets/img/modelos/coigue/modelo-coigue.png') }}" class="d-block w-100"
                                        alt="Modelo Coigüe - Imagen 1"></div>
                                <div class="carousel-item"><img
                                        src="{{ asset('assets/img/modelos/coigue/modelo-coigue1.jpeg') }}" class="d-block w-100"
                                        alt="Modelo Coigüe - Imagen 2"></div>
                                <div class="carousel-item"><img
                                        src="{{ asset('assets/img/modelos/coigue/modelo-coigue2.jpeg') }}" class="d-block w-100"
                                        alt="Modelo Coigüe - Imagen 3"></div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselModeloCoigue"
                                data-bs-slide="prev"><span class="carousel-control-prev-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Anterior</span></button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselModeloCoigue"
                                data-bs-slide="next"><span class="carousel-control-next-icon"
                                    aria-hidden="true"></span><span class="visually-hidden">Siguiente</span></button>
                        </div>
                        <h4>Características Principales</h4>
                        <ul>
                            <li><strong>Superficie:</strong> 124 m²</li>
                            <li><strong>Dormitorios:</strong> 4</li>
                            <li><strong>Baños:</strong> 2</li>
                            <li><strong>Extras:</strong> Dormitorio principal en suite, 4to dormitorio flexible (oficina) y
                                quincho techado.</li>
                        </ul>
                        <p>Nuestra opción más completa y espaciosa. El modelo Coigüe es perfecto para familias grandes que
                            buscan el máximo confort. Sus cuatro dormitorios y generosas áreas comunes garantizan que cada
                            miembro de la familia tenga su propio lugar.</p>
                    </div>
                    <div class="modal-footer"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Cerrar</button></div>
                </div>
            </div>
        </div>
    </main>
@endsection
