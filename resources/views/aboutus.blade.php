@extends('layouts.app')

@section('title', 'Nosotros | Técnicos Celaya')
@section('meta_description', 'Conoce a Técnicos Celaya: especialistas en reparación y mantenimiento de impresoras y copiadoras, con experiencia, compromiso y atención personalizada.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
@endpush

@section('content')
<section class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-6 mb-4 mb-md-0">
      <img src="{{ asset('img/tecnicos.png') }}" class="img-fluid rounded shadow-sm" alt="Equipo de Técnicos Celaya">
    </div>
    <div class="col-md-6">
      <h1 class="fw-bold mb-3">Sobre Nosotros</h1>
      <p class="lead">
        En <strong>Técnicos Celaya</strong> somos un equipo de profesionales especializados en el mantenimiento, reparación y venta de impresoras y copiadoras.
        Nuestro compromiso es ofrecer soluciones rápidas, seguras y efectivas que mantengan tus equipos funcionando al máximo rendimiento.
      </p>
      <p>
        Con más de <strong>10 años de experiencia</strong> en el sector, hemos trabajado con empresas locales y nacionales brindando servicios técnicos, preventivos y correctivos
        adaptados a las necesidades de cada cliente. Creemos en la honestidad, la atención personalizada y el uso de consumibles originales que garantizan la calidad y durabilidad de tu inversión.
      </p>
      <a href="{{ route('offers') }}" class="btn btn-primary mt-3">Ver ofertas</a>
    </div>
  </div>
</section>

<section class="bg-light border-top py-5">
  <div class="container text-center">
    <h2 class="mb-4">Nuestra Misión</h2>
    <p class="fs-5">
      Proporcionar servicios integrales en impresión y copiado, enfocados en la satisfacción total de nuestros clientes mediante
      soluciones innovadoras, atención oportuna y un compromiso constante con la calidad.
    </p>
  </div>
</section>

<section class="container py-5">
  <div class="row text-center">
    <div class="col-md-4 mb-4">
      <img src="{{ asset('img/soporte.png') }}" alt="Confianza" width="80" height="80" class="mb-3">
      <h3 class="h5 fw-bold">Confianza</h3>
      <p>Brindamos atención personalizada, diagnósticos precisos y soluciones transparentes para cada cliente.</p>
    </div>
    <div class="col-md-4 mb-4">
      <img src="{{ asset('img/refacciones.png') }}" alt="Tecnología" width="80" height="80" class="mb-3">
      <h3 class="h5 fw-bold">Tecnología</h3>
      <p>Utilizamos herramientas actualizadas y consumibles originales para garantizar resultados de alto nivel.</p>
    </div>
    <div class="col-md-4 mb-4">
      <img src="{{ asset('img/rapidez.png') }}" alt="Soporte" width="80" height="80" class="mb-3">
      <h3 class="h5 fw-bold">Soporte</h3>
      <p>Contamos con técnicos certificados y servicio postventa para mantener tu equipo siempre operativo.</p>
    </div>
  </div>
</section>

<section class="bg-white border-top py-5">
  <div class="container">
    <h2 class="text-center mb-4">¿Por qué elegirnos?</h2>
    <div class="row justify-content-center">
      <div class="col-md-10">
        <ul class="list-group list-group-flush fs-5">
          <li class="list-group-item">✔ Experiencia comprobada en impresoras y copiadoras de distintas marcas.</li>
          <li class="list-group-item">✔ Atención rápida, amable y 100% personalizada.</li>
          <li class="list-group-item">✔ Uso exclusivo de refacciones y consumibles originales.</li>
          <li class="list-group-item">✔ Garantía escrita en cada reparación.</li>
          <li class="list-group-item">✔ Cobertura técnica en Celaya y municipios cercanos.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="bg-light py-5 border-top">
  <div class="container text-center">
    <h2 class="mb-4">Ubicación</h2>
    <p class="fs-5">
      Nos encontramos en <strong>Celaya, Guanajuato</strong>.  
      Puedes visitarnos para recibir atención personalizada o solicitar una cotización sin compromiso.
    </p>
    <div class="ratio ratio-16x9 mt-3 shadow">
      <iframe 
        src="https://www.google.com/maps?q=Celaya,+Gto&output=embed" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

{{-- WhatsApp flotante --}}
<a class="position-fixed bottom-0 end-0 m-4 btn btn-success rounded-circle shadow-lg"
   href="https://wa.me/5214611234567?text=Hola%20Técnicos%20Celaya,%20quisiera%20más%20información%20sobre%20sus%20servicios"
   target="_blank" rel="noopener"
   aria-label="Contáctanos por WhatsApp"
   style="font-size:1.5rem; width:3rem; height:3rem; display:flex; align-items:center; justify-content:center;">
  ⌕
</a>
@endsection
