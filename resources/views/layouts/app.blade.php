<!DOCTYPE html>
{{-- 1. Se especifica el idioma y la región para buscadores --}}
<html lang="es-CL">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    {{-- 1. Título optimizado y localizado --}}
    <title>Constructora en San José de la Mariquina | VGS Primax | Construcción de Casas en la Región de los Ríos</title>

    {{-- 2. Descripción localizada y enfocada en el cliente --}}
    <meta name="description"
        content="VGS Primax, tu constructora de confianza en Valdivia. Expertos en diseño y construcción de casas y proyectos de arquitectura en toda la Región de los Ríos. Calidad y servicio excepcional. ¡Conversemos sobre tu proyecto!">

    {{-- 3. Palabras clave consistentes con el enfoque local --}}
    <meta name="keywords"
        content="constructora valdivia, construcción de casas los ríos, remodelaciones valdivia, vgs primax, arquitectos valdivia, proyectos inmobiliarios los ríos, construcción personalizada">

    {{-- 4. Canonical URL (evita contenido duplicado) - ¡Correcto! --}}
    <link rel="canonical" href="https://www.vgsprimax.cl/">

    {{-- Favicons y manifiesto (¡Bien implementado!) --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/icons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/img/icons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/img/icons/favicon.ico') }}" color="#ffc400">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    {{-- 5. Open Graph (para Facebook/WhatsApp) optimizado y localizado --}}
    <meta property="og:title" content="Constructora VGS Primax | Casas a Medida en Valdivia y la Región de los Ríos">
    <meta property="og:description"
        content="Diseñamos y construimos la casa de tus sueños en la Región de los Ríos. Conoce nuestros proyectos y la calidad que nos caracteriza.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.vgsprimax.cl/">
    <meta property="og:image" content="{{ asset('assets/img/vgs-primax-og-image.jpg') }}"> {{-- ¡OJO! Recomiendo crear una imagen específica (1200x630px) y cambiarle el nombre --}}
    <meta property="og:site_name" content="VGS Primax Constructora">
    <meta property="og:locale" content="es_CL">

    {{-- 6. Twitter Card (para Twitter/X) optimizado y localizado --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Constructora VGS Primax | Casas a Medida en Valdivia y la Región de los Ríos">
    <meta name="twitter:description"
        content="Diseñamos y construimos la casa de tus sueños en la Región de los Ríos. Conoce nuestros proyectos y la calidad que nos caracteriza.">
    <meta name="twitter:image" content="{{ asset('assets/img/vgs-primax-og-image.jpg') }}"> {{-- Usa la misma imagen que en Open Graph --}}

    {{-- Fonts y CSS (Sin cambios) --}}
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    @include('layouts.partials.header')

    <main>
        @yield('content')
    </main>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    @include('layouts.partials.footer')
    <a href="https://wa.me/56989335919?text=Hola%20VGS%20Primax,%20visité%20su%20sitio%20web%20y%20quisiera%20más%20información%20sobre%20sus%20servicios%20de%20construcción."
        class="whatsapp-flotante" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
</body>

</html>
