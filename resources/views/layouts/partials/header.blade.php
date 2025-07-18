<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('inicio') }}" class="logo d-flex align-items-center">

            @php
                // Definimos la ruta del logo una sola vez para mantener el código limpio
                $logoPath = 'assets/img/icons/icono.png';
            @endphp

            {{-- Verificamos si el archivo del logo existe en la carpeta 'public' --}}
            @if (file_exists(public_path($logoPath)))
                {{-- Si el archivo existe, mostramos la imagen --}}
                <img src="{{ asset($logoPath) }}" alt="Logo VGS Primax" id="logo-img">
            @else
                {{-- Si el archivo NO existe, mostramos el texto como 'fallback' --}}
                <div>
                    <h1 class="sitename">VGS Primax</h1><span></span>
                </div>
            @endif

        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                {{-- Aquí está la magia ✨ --}}
                <li><a href="{{ route('inicio') }}"
                        class="{{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a></li>
                <li><a href="{{ route('nosotros') }}"
                        class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a></li>
                <li><a href="{{ route('proyectos') }}"
                        class="{{ request()->routeIs('proyectos') ? 'active' : '' }}">Proyectos</a></li>
                {{-- <li><a href="{{ route('obras') }}" class="{{ request()->routeIs('obras') ? 'active' : '' }}">Obras</a></li> --}}
                <li><a href="{{ route('modelos') }}"
                        class="{{ request()->routeIs('modelos') ? 'active' : '' }}">Modelos</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
