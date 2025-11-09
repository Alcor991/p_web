@extends('layouts.app')

@section('title','Bienvenido | Técnicos Celaya')
@section('meta_description','Landing principal de Técnicos Celaya: servicios, mantenimiento y soluciones en impresión y copiado.')

@push('styles')
<link rel="stylesheet" href="{{ asset('estilos/landing.css') }}">
@endpush

@section('content')
{{-- Hero principal --}}
<section class="position-relative text-center text-white" 
         style="height:100vh; background: url('{{ asset('img/copiadora.jpg') }}') center/cover no-repeat;">
  <div class="d-flex flex-column justify-content-center align-items-center h-100 bg-dark bg-opacity-50">
    <h1 class="display-4 fw-bold mb-3">Soluciones completas para tus impresoras y copiadoras</h1>
    <p class="lead mb-4">Reparación rápida, venta de consumibles y soporte confiable para mantener tu oficina operativa.</p>
    <div>
      <a href="{{ route('home') }}" class="btn btn-primary btn-lg me-2">Entrar al sitio</a>
      <a href="{{ route('offers') }}" class="btn btn-outline-light btn-lg">Ver ofertas</a>
    </div>
  </div>
</section>

{{-- Sección de valores --}}
<section class="bg-white border-top">
  <div class="container py-5">
    <div class="row g-4 text-center">
      <div class="col-md-4">
        <h2 class="h4">Calidad</h2>
        <p>Aplicamos buenas prácticas, seguridad y alto rendimiento en cada servicio.</p>
      </div>
      <div class="col-md-4">
        <h2 class="h4">Soporte</h2>
        <p>Planes de mantenimiento y asistencia técnica continua.</p>
      </div>
      <div class="col-md-4">
        <h2 class="h4">Resultados</h2>
        <p>Soluciones efectivas, rápidas y garantizadas para tus equipos.</p>
      </div>
    </div>
  </div>
</section>

{{-- Botón flotante WhatsApp --}}
<a class="position-fixed bottom-0 end-0 m-4 btn btn-success rounded-circle shadow-lg"
   href="https://wa.me/5214611234567?text=Hola%20Técnicos%20Celaya,%20quiero%20una%20cotización"
   target="_blank" rel="noopener"
   aria-label="Contáctanos por WhatsApp"
   style="font-size:1.5rem; width:3rem; height:3rem; display:flex; align-items:center; justify-content:center;">
  ⌕
</a>
@endsection
