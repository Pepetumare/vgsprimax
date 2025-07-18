<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
        <div class="row gy-4">

            <div class="col-lg-5 col-md-12 footer-about">
                <a href="{{ route('inicio') }}" class="logo d-flex align-items-center">
                    <span class="sitename">VGS Primax</span>
                </a>
                <p class="mt-3">Empresa constructora dedicada al desarrollo de proyectos a medida, comprometidos con la
                    calidad, la innovación y la satisfacción de nuestros clientes en la Región de Los Ríos.</p>
                <div class="social-links d-flex mt-4">
                    {{-- NOTA: Reemplaza # con los enlaces reales a tus redes sociales --}}
                    {{-- <a href="#"><i class="bi bi-twitter-x"></i></a> --}}
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    {{-- <a href="#"><i class="bi bi-instagram"></i></a> --}}
                    {{-- <a href="#"><i class="bi bi-linkedin"></i></a> --}}
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Enlaces Rápidos</h4>
                <ul>
                    {{-- Usamos el helper route() para los enlaces internos de Laravel --}}
                    <li><a href="{{ route('inicio') }}">Inicio</a></li>
                    <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                    {{-- <li><a href="{{ route('obras') }}">Obras</a></li> --}}
                    <li><a href="{{ route('modelos') }}">Modelos</a></li>
                    <li><a href="#get-started">Contacto</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Nuestros Servicios</h4>
                <ul>
                    <li><a href="#">Obras de Construcción</a></li>
                    <li><a href="#">Paneles SIP</a></li>
                    <li><a href="#">Diseño y Arquitectura</a></li>
                    <li><a href="#">Remodelaciones</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contáctanos</h4>
                <p>Sector Santa Rosa Norte</p>
                <p>San José de la Mariquina, Chile</p>
                <p class="mt-3">
                    {{-- Enlaces interactivos para teléfono y correo --}}
                    <strong>Teléfono:</strong> <a href="tel:+56989335919">+56 9 8933 5919</a><br>
                    <strong>Correo:</strong> <a href="mailto:contacto@vgsprimax.cl">contacto@vgsprimax.cl</a>
                </p>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        {{-- El año se actualiza automáticamente --}}
        <p>© {{ date('Y') }} <strong class="px-1 sitename">VGS Primax</strong>. Todos los derechos reservados.</p>
        <div class="credits">
            {{-- Es importante mantener los créditos del template si usas la versión gratuita --}}
            Diseñado por <a href="https://www.instagram.com/Pepetumare">José Cornejo</a>
        </div>
    </div>

</footer>
