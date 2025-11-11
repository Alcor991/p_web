@extends('layouts.app')

@section('title', 'Ofertas y Promociones | Técnicos Celaya')
@section('meta_description', 'Promociones en reparación de impresoras y copiadoras, kits de cartuchos, mantenimiento preventivo y renta de equipos en Celaya.')

@push('styles')
<link rel="stylesheet" href="{{ asset('estilos/ofertas.css') }}">
@endpush

@section('content')
<section class="container py-5">
  <h1 class="fw-bold mb-4 text-center">Ofertas y Promociones</h1>
  <p class="text-center mb-5">
    Ahorra tiempo y dinero con nuestros paquetes diseñados para oficinas y negocios. 
    Todos los servicios incluyen diagnóstico profesional y garantía escrita.
  </p>

  {{-- Grid de ofertas principales --}}
  <div class="row g-4">
    {{-- Reparación Express --}}
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/reparacion.png') }}" class="card-img-top" alt="Reparación express de impresoras">
        <div class="card-body d-flex flex-column">
          <h2 class="h5">Reparación Express</h2>
          <p class="small text-muted mb-2">Diagnóstico incluido · Entrega rápida</p>
          <ul class="mb-3">
            <li>Diagnóstico profesional en 24–48 h</li>
            <li>Refacciones originales (si aplican)</li>
            <li>Garantía de 30 días</li>
          </ul>
          <div class="mt-auto d-flex align-items-center justify-content-between">
            <span class="h5 mb-0">$499 MXN*</span>
            <a href="https://wa.me/5214611234567?text=Quiero%20agendar%20Reparación%20Express"
               target="_blank" rel="noopener" class="btn btn-primary">Agendar</a>
          </div>
          <small class="text-muted mt-2">* Mano de obra; refacciones se cotizan aparte.</small>
        </div>
      </div>
    </div>

    {{-- Kit de Cartuchos --}}
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/cartuchos.png') }}" class="card-img-top" alt="Kit de cartuchos">
        <div class="card-body d-flex flex-column">
          <h2 class="h5">Kit de Cartuchos</h2>
          <p class="small text-muted mb-2">Originales y certificados</p>
          <ul class="mb-3">
            <li>Compatibilidad garantizada</li>
            <li>Instalación y prueba básica</li>
            <li>Soporte remoto postventa</li>
          </ul>
          <div class="mt-auto d-flex align-items-center justify-content-between">
            <span class="h5 mb-0">Desde $899 MXN</span>
            <a href="https://wa.me/5214611234567?text=Quiero%20cotizar%20Kit%20de%20Cartuchos"
               target="_blank" rel="noopener" class="btn btn-outline-secondary">Cotizar</a>
          </div>
        </div>
      </div>
    </div>

    {{-- Mantenimiento Preventivo --}}
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/mantenimiento.png') }}" class="card-img-top" alt="Mantenimiento preventivo">
        <div class="card-body d-flex flex-column">
          <h2 class="h5">Mantenimiento Preventivo</h2>
          <p class="small text-muted mb-2">Evita paros y costos inesperados</p>
          <ul class="mb-3">
            <li>Limpieza profunda y calibración</li>
            <li>Revisión de rodillos y fusor</li>
            <li>Reporte técnico con hallazgos</li>
          </ul>
          <div class="mt-auto d-flex align-items-center justify-content-between">
            <span class="h5 mb-0">$799 MXN</span>
            <a href="https://wa.me/5214611234567?text=Quiero%20agendar%20Mantenimiento%20Preventivo"
               target="_blank" rel="noopener" class="btn btn-primary">Agendar</a>
          </div>
        </div>
      </div>
    </div>

    {{-- Renta de Copiadora --}}
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/renta.png') }}" class="card-img-top" alt="Renta de copiadora para oficina">
        <div class="card-body d-flex flex-column">
          <h2 class="h5">Renta de Copiadora</h2>
          <p class="small text-muted mb-2">Ideal para oficinas con picos de demanda</p>
          <ul class="mb-3">
            <li>Plan mensual con soporte incluido</li>
            <li>Instalación y capacitación básica</li>
            <li>Equipo listo para trabajar</li>
          </ul>
          <div class="mt-auto d-flex align-items-center justify-content-between">
            <span class="h5 mb-0">Desde $1,999 MXN/mes</span>
            <a href="https://wa.me/5214611234567?text=Estoy%20interesado%20en%20Renta%20de%20Copiadora"
               target="_blank" rel="noopener" class="btn btn-outline-secondary">Solicitar</a>
          </div>
        </div>
      </div>
    </div>

    {{-- Paquete Oficina --}}
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/oficina.png') }}" class="card-img-top" alt="Paquete oficina con mantenimiento">
        <div class="card-body d-flex flex-column">
          <h2 class="h5">Paquete Oficina</h2>
          <p class="small text-muted mb-2">Para 1–3 equipos en la misma sede</p>
          <ul class="mb-3">
            <li>2 mantenimientos preventivos/año</li>
            <li>Atención prioritaria</li>
            <li>Descuento en refacciones</li>
          </ul>
          <div class="mt-auto d-flex align-items-center justify-content-between">
            <span class="h5 mb-0">$3,599 MXN/año</span>
            <a href="https://wa.me/5214611234567?text=Quiero%20contratar%20el%20Paquete%20Oficina"
               target="_blank" rel="noopener" class="btn btn-primary">Contratar</a>
          </div>
        </div>
      </div>
    </div>

    {{-- Diagnóstico a Domicilio --}}
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/diagnostico.png') }}" class="card-img-top" alt="Diagnóstico a domicilio">
        <div class="card-body d-flex flex-column">
          <h2 class="h5">Diagnóstico a Domicilio</h2>
          <p class="small text-muted mb-2">Visita programada en tu empresa</p>
          <ul class="mb-3">
            <li>Revisión y reporte técnico</li>
            <li>Opciones de reparación in situ</li>
            <li>Aplican zonas de cobertura</li>
          </ul>
          <div class="mt-auto d-flex align-items-center justify-content-between">
            <span class="h5 mb-0">$299 MXN*</span>
            <a href="https://wa.me/5214611234567?text=Deseo%20programar%20Diagnóstico%20a%20Domicilio"
               target="_blank" rel="noopener" class="btn btn-outline-secondary">Programar</a>
          </div>
          <small class="text-muted mt-2">* Puede variar por distancia; confirma cobertura.</small>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Tabla de precios resumida --}}
<section class="bg-light border-top py-5">
  <div class="container">
    <h2 class="text-center mb-4">Precios resumidos</h2>
    <div class="table-responsive">
      <table class="table table-striped align-middle">
        <thead>
          <tr>
            <th>Servicio</th>
            <th>Incluye</th>
            <th>Precio</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Reparación Express</td>
            <td>Diagnóstico + Mano de obra</td>
            <td>$499 MXN</td>
            <td><a class="btn btn-sm btn-primary" target="_blank" rel="noopener"
                   href="https://wa.me/5214611234567?text=Quiero%20agendar%20Reparación%20Express">Agendar</a></td>
          </tr>
          <tr>
            <td>Mantenimiento Preventivo</td>
            <td>Limpieza + Calibración + Reporte</td>
            <td>$799 MXN</td>
            <td><a class="btn btn-sm btn-primary" target="_blank" rel="noopener"
                   href="https://wa.me/5214611234567?text=Quiero%20agendar%20Mantenimiento%20Preventivo">Agendar</a></td>
          </tr>
          <tr>
            <td>Renta de Copiadora</td>
            <td>Soporte + Instalación</td>
            <td>Desde $1,999 MXN/mes</td>
            <td><a class="btn btn-sm btn-outline-secondary" target="_blank" rel="noopener"
                   href="https://wa.me/5214611234567?text=Estoy%20interesado%20en%20Renta%20de%20Copiadora">Solicitar</a></td>
          </tr>
          <tr>
            <td>Kit de Cartuchos</td>
            <td>Originales certificados</td>
            <td>Desde $899 MXN</td>
            <td><a class="btn btn-sm btn-outline-secondary" target="_blank" rel="noopener"
                   href="https://wa.me/5214611234567?text=Quiero%20cotizar%20Kit%20de%20Cartuchos">Cotizar</a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="small text-muted mt-2">Precios sujetos a cambios por disponibilidad y modelo. Pide una cotización para confirmar compatibilidad.</p>
  </div>
</section>

{{-- Marcas y distintivos --}}
<section class="container py-5">
  <h2 class="text-center mb-4">Trabajamos con</h2>
  <div class="row g-4 justify-content-center align-items-center text-center">
    <div class="col-6 col-md-2"><img src="{{ asset('img/hp.png') }}" class="img-fluid" alt="HP" loading="lazy"></div>
    <div class="col-6 col-md-2"><img src="{{ asset('img/canon.png') }}" class="img-fluid" alt="Canon" loading="lazy"></div>
    <div class="col-6 col-md-2"><img src="{{ asset('img/xerox.png') }}" class="img-fluid" alt="Xerox" loading="lazy"></div>
    <div class="col-6 col-md-2"><img src="{{ asset('img/brother.png') }}" class="img-fluid" alt="Brother" loading="lazy"></div>
    <div class="col-6 col-md-2"><img src="{{ asset('img/ricoh.png') }}" class="img-fluid" alt="Ricoh" loading="lazy"></div>
  </div>
</section>

{{-- FAQ --}}
<section class="bg-white border-top py-5">
  <div class="container">
    <h2 class="text-center mb-4">Preguntas frecuentes</h2>
    <div class="accordion" id="faqOffers">
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq1">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c1" aria-expanded="true" aria-controls="c1">
            ¿El diagnóstico tiene costo si no reparo?
          </button>
        </h2>
        <div id="c1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqOffers">
          <div class="accordion-body">
            El diagnóstico de taller está incluido en la Reparación Express. Si decides no continuar, solo se cobra el diagnóstico a domicilio (si aplica).
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="faq2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2" aria-expanded="false" aria-controls="c2">
            ¿Qué cubre la garantía?
          </button>
        </h2>
        <div id="c2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqOffers">
          <div class="accordion-body">
            Cobertura de 30 días sobre la reparación realizada y refacciones instaladas por nuestro equipo (aplican términos según marca/modelo).
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="faq3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c3" aria-expanded="false" aria-controls="c3">
            ¿Puedo solicitar factura?
          </button>
        </h2>
        <div id="c3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqOffers">
          <div class="accordion-body">
            Sí. Indícanos tus datos fiscales al solicitar el servicio para emitir la factura correspondiente.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Aviso de garantías --}}
<section class="container py-4">
  <div class="alert alert-info" role="alert">
    Todas las promociones están sujetas a disponibilidad y cobertura en <strong>Celaya, Guanajuato</strong>.
    Solicita tu confirmación por WhatsApp para bloquear precio y fecha de atención.
  </div>
</section>

{{-- Botón flotante WhatsApp --}}
<a class="position-fixed bottom-0 end-0 m-4 btn btn-success rounded-circle shadow-lg"
   href="https://wa.me/5214611234567?text=Hola%20Técnicos%20Celaya,%20quiero%20una%20cotización%20de%20ofertas"
   target="_blank" rel="noopener" aria-label="Contáctanos por WhatsApp"
   style="font-size:1.5rem; width:3rem; height:3rem; display:flex; align-items:center; justify-content:center;">
  ⌕
</a>
@endsection
