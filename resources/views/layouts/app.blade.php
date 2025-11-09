<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Programación Web')</title>
  <meta name="description" content="@yield('meta_description','Servicios de desarrollo y soporte tecnológico')">

  {{-- Bootstrap CDN --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  {{-- Tus estilos locales --}}
  <link rel="stylesheet" href="{{ asset('estilos/menu.css') }}">
  <link rel="stylesheet" href="{{ asset('estilos/estilo.css') }}">
  <link rel="stylesheet" href="{{ asset('estilos/landing.css') }}">
  @stack('styles')

  <link rel="icon" href="{{ asset('img/fotocopia.png') }}">
</head>
<body class="bg-light">

  {{-- Navbar (oculta en la landing) --}}
  @if (!request()->routeIs('landing'))
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('landing') }}">Técnicos Celaya</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="mainNav" class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                 href="{{ route('home') }}" aria-current="{{ request()->routeIs('home') ? 'page' : '' }}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                 href="{{ route('about') }}" aria-current="{{ request()->routeIs('about') ? 'page' : '' }}">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('offers') ? 'active' : '' }}"
                 href="{{ route('offers') }}" aria-current="{{ request()->routeIs('offers') ? 'page' : '' }}">Ofertas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('terms') ? 'active' : '' }}"
                 href="{{ route('terms') }}" aria-current="{{ request()->routeIs('terms') ? 'page' : '' }}">Términos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  @endif

  {{-- Contenido dinámico --}}
  <main class="py-4">
    @yield('content')
  </main>

  <footer class="border-top py-4 bg-light">
    <section class="container py-4">
  <div class="border-top pt-3 small text-muted">
    <p>
      En <strong>Técnicos Celaya</strong> protegemos tus datos personales. La información que nos proporciones será utilizada únicamente
      para responder a tus solicitudes de servicio, cotización o compra de consumibles.
      No compartimos tus datos con terceros sin tu consentimiento. Para más información, contáctanos en
      <a href="mailto:tecnicosCelaya@gmail.com" class="text-decoration-none">tecnicosCelaya@gmail.com</a>.
    </p>
    <p class="text-center mb-0">© 2025 Técnicos Celaya</p>
  </div>
</section>
  </footer>

  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>
