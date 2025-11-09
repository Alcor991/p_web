@extends('layouts.app')

@section('title', 'Soluciones completas para tus impresoras y copiadoras')
@section('meta_description', 'Reparación, venta de consumibles y soporte técnico profesional para impresoras y copiadoras en Celaya.')

@push('styles')
<link rel="stylesheet" href="{{ asset('estilos/estilo.css') }}">
@endpush

@section('content')
{{-- Hero principal --}}
<section class="hero position-relative">
  <img src="{{ asset('img/copiadora.jpg') }}" class="w-100" alt="Copiadora en reparación">
  <div class="hero-text text-center position-absolute top-50 start-50 translate-middle text-white p-4 bg-dark bg-opacity-50 rounded">
    <h1 class="fw-bold">Soluciones completas para tus impresoras y copiadoras</h1>
    <p class="lead">Reparación rápida, venta de consumibles y equipos confiables para mantener tu oficina siempre operativa.</p>
    <a href="{{ route('offers') }}" class="btn btn-primary btn-lg mt-3">Ver ofertas</a>
  </div>
</section>

{{-- Testimonios --}}
<section class="container my-5">
  <h2 class="text-center mb-4">Testimonios</h2>
  <div class="row g-4 justify-content-center">
    <div class="col-md-4">
      <blockquote class="blockquote text-center p-3 border rounded bg-white shadow-sm">
        <img src="{{ asset('img/avatar.png') }}" width="40" height="40" alt="Cliente" loading="lazy" class="mb-2"><br>
        <p class="mb-1">“Excelente servicio, repararon nuestra impresora en tiempo récord y los consumibles son de calidad.”</p>
        <footer class="blockquote-footer">Grupo Herdez</footer>
      </blockquote>
    </div>

    <div class="col-md-4">
      <blockquote class="blockquote text-center p-3 border rounded bg-white shadow-sm">
        <img src="{{ asset('img/avatar.png') }}" width="40" height="40" alt="Cliente" loading="lazy" class="mb-2"><br>
        <p class="mb-1">“Siempre compro mis cartuchos aquí, la atención es rápida y confiable.”</p>
        <footer class="blockquote-footer">Leo Mendoza</footer>
      </blockquote>
    </div>

    <div class="col-md-4">
      <blockquote class="blockquote text-center p-3 border rounded bg-white shadow-sm">
        <img src="{{ asset('img/avatar.png') }}" width="40" height="40" alt="Cliente" loading="lazy" class="mb-2"><br>
        <p class="mb-1">“Una vez le di un zurdazo por error a mi impresora y ellos la lograron arreglar, muy recomendado.”</p>
        <footer class="blockquote-footer">El Canelo</footer>
      </blockquote>
    </div>
  </div>
</section>

{{-- Contáctanos --}}
<section class="container my-5">
  <h2 class="text-center mb-4">Contáctanos</h2>
  <div class="row justify-content-center">
    <div class="col-md-6 text-center">
      <p class="mb-2">
        <img src="{{ asset('img/llamada-telefonica.png') }}" width="24" height="24" alt="Teléfono" loading="lazy" class="me-2">
        Teléfono: <a href="tel:+527685345642" class="text-decoration-none">+52 768 534 5642</a>
      </p>
      <p>
        <img src="{{ asset('img/correo.png') }}" width="24" height="24" alt="Correo" loading="lazy" class="me-2">
        Correo: <a href="mailto:tecnicosCelaya@gmail.com" class="text-decoration-none">tecnicosCelaya@gmail.com</a>
      </p>
    </div>
  </div>
</section>

{{-- Garantías --}}
<section class="bg-light py-5 border-top">
  <div class="container">
    <h2 class="text-center mb-4">Garantías y distintivos</h2>
    <ul class="list-group list-group-flush text-center">
      <li class="list-group-item">Garantía de 30 días en reparaciones.</li>
      <li class="list-group-item">Consumibles originales y certificados.</li>
      <li class="list-group-item">Técnicos capacitados y con experiencia.</li>
    </ul>
  </div>
</section>

{{-- WhatsApp flotante --}}
<a class="position-fixed bottom-0 end-0 m-4 btn btn-success rounded-circle shadow-lg"
   href="https://wa.me/5214611234567?text=Hola%20Técnicos%20Celaya,%20quiero%20una%20cotización"
   target="_blank" rel="noopener"
   aria-label="Contáctanos por WhatsApp" style="font-size:1.5rem; width:3rem; height:3rem; display:flex; align-items:center; justify-content:center;">
  ⌕
</a>

@endsection
