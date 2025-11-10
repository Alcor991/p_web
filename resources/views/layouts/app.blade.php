<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title','Programación Web')</title>
  <meta name="description" content="@yield('meta_description','Servicios de desarrollo y soporte tecnológico')">

  {{-- Bootstrap 5 --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  {{-- TUS CSS ORIGINALES (mismos nombres y carpetas que antes de migrar) --}}
  <link rel="stylesheet" href="{{ asset('estilos/estilo.css') }}">
  <link rel="stylesheet" href="{{ asset('estilos/menu.css') }}">

  {{-- Hojas adicionales por vista (opcional) --}}
  @stack('styles')

  {{-- Favicon / logo --}}
  <link rel="icon" href="{{ asset('img/fotocopia.png') }}">

  {{-- Si hay navbar (no en landing), añade padding-top al body para que no tape el contenido --}}
  @if (!request()->routeIs('landing'))
    <style>body{padding-top:70px}</style>
  @endif
</head>
<body class="bg-light">

  {{-- NAVBAR (idéntica a tu HTML original). Se oculta en la landing --}}
  @if (!request()->routeIs('landing'))
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-celaya">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('landing') }}" aria-label="Ir a inicio">
          <img src="{{ asset('img/fotocopia.png') }}" alt="Logo Técnicos Celaya" class="me-2">
          Técnicos Celaya
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal" aria-controls="menuPrincipal"
                aria-expanded="false" aria-label="Abrir menú de navegación">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="menuPrincipal">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">Registro</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->routeIs('offers') ? 'active' : '' }}" href="{{ route('offers') }}">Ofertas</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Nosotros</a></li>
          </ul>

          {{-- Estado de autenticación en la barra --}}
          <ul class="navbar-nav ms-lg-3">
            @auth
              <li class="nav-item d-flex align-items-center me-2">
                <span class="navbar-text text-white-50 small">Hola, <strong>{{ auth()->user()->name }}</strong></span>
              </li>
              <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                  @csrf
                  <button class="btn btn-sm btn-outline-light">Salir</button>
                </form>
              </li>
            @else
              {{-- (ya están los enlaces Login/Registro a la izquierda) --}}
            @endauth
          </ul>
        </div>
      </div>
    </nav>

    {{-- Comportamiento original: ocultar navbar al hacer scroll hacia abajo --}}
    <script>
      (function() {
        const navbar = document.querySelector(".navbar");
        if(!navbar) return;
        let lastScrollY = window.scrollY;
        window.addEventListener("scroll", () => {
          if (window.scrollY > lastScrollY && window.scrollY > 50) {
            navbar.classList.add("hide-on-scroll");
          } else {
            navbar.classList.remove("hide-on-scroll");
          }
          lastScrollY = window.scrollY;
        });
      })();
    </script>
  @endif

  {{-- FLASH MESSAGES (éxito / error / validaciones) --}}
  @if (session('ok') || session('err') || ($errors ?? collect())->any())
    <div class="container mt-3">
      @if (session('ok'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('ok') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      @endif
      @if (session('err'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('err') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      @endif
      @if (($errors ?? collect())->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Revisa los campos:</strong>
          <ul class="mb-0">
            @foreach ($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach
          </ul>
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      @endif
    </div>
  @endif

  {{-- CONTENIDO DE CADA VISTA --}}
  <main>
    @yield('content')
  </main>

  {{-- FOOTER global único (mismo texto que usabas antes) --}}
  <footer class="mt-4">
    <div class="container border-top pt-3">
      <p>
        En <strong>Técnicos Celaya</strong> protegemos tus datos personales. La información que nos
        proporciones será utilizada únicamente para responder a tus solicitudes de
        servicio, cotización o compra de consumibles. No compartimos tus datos con
        terceros sin tu consentimiento. Para más información, contáctanos en
        <a href="mailto:tecnicosCelaya@gmail.com">tecnicosCelaya@gmail.com</a>.
      </p>
      <p class="text-center mb-0">© {{ date('Y') }} Técnicos Celaya</p>
    </div>
  </footer>

  {{-- JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>
