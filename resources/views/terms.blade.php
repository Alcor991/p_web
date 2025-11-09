@extends('layouts.app')

@section('title', 'Términos y Condiciones · Aviso de Privacidad | Técnicos Celaya')
@section('meta_description', 'Consulta los Términos y Condiciones de uso del sitio y el Aviso de Privacidad de Técnicos Celaya.')

@push('styles')
<link rel="stylesheet" href="{{ asset('estilos/terminos.css') }}">
@endpush

@section('content')
<section class="container py-5">
  <h1 class="fw-bold mb-4">Términos y Condiciones · Aviso de Privacidad</h1>
  <p class="text-muted mb-4">Última actualización: {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>

  {{-- 1. Introducción  :D --}}
  <section class="mb-5">
    <h2 class="h4">1) Introducción</h2>
    <p>
      Bienvenido al sitio web de <strong>Técnicos Celaya</strong> (“nosotros”, “nuestro” o “la Empresa”).
      Al acceder y utilizar este sitio aceptas los presentes Términos y Condiciones, así como nuestro Aviso de Privacidad.
      Si no estás de acuerdo con alguna de las disposiciones, te recomendamos no utilizar el sitio.
    </p>
  </section>

  {{-- 2. Definiciones --}}
  <section class="mb-5">
    <h2 class="h4">2) Definiciones</h2>
    <ul>
      <li><strong>Usuario:</strong> Persona que navega o utiliza el sitio.</li>
      <li><strong>Servicios:</strong> Reparación, mantenimiento, venta y/o renta relacionados con impresoras y copiadoras.</li>
      <li><strong>Datos Personales:</strong> Información que identifica o hace identificable a una persona.</li>
      <li><strong>ARCO:</strong> Derechos de Acceso, Rectificación, Cancelación y Oposición respecto de tus Datos Personales.</li>
    </ul>
  </section>

  {{-- 3. Uso del sitio --}}
  <section class="mb-5">
    <h2 class="h4">3) Uso del sitio</h2>
    <p>
      Te comprometes a utilizar el sitio conforme a la legislación aplicable, a estos Términos y a la buena fe. Queda prohibido:
    </p>
    <ul>
      <li>Realizar actividades que puedan afectar la disponibilidad, integridad o seguridad del sitio.</li>
      <li>Publicar o transmitir contenido ilícito, difamatorio, ofensivo o que infrinja derechos de terceros.</li>
      <li>Intentar acceder a áreas restringidas, sistemas o bases de datos sin autorización.</li>
    </ul>
  </section>

  {{-- 4. Información de los servicios y precios --}}
  <section class="mb-5">
    <h2 class="h4">4) Información de servicios y precios</h2>
    <p>
      La información publicada (descripciones, imágenes y precios) es de carácter informativo y puede variar según marca, modelo o disponibilidad.
      Los <strong>precios</strong> mostrados pueden cambiar sin previo aviso. Te recomendamos solicitar una
      <a href="https://wa.me/5214611234567?text=Hola%20Técnicos%20Celaya,%20quisiera%20una%20cotización" target="_blank" rel="noopener">cotización</a>
      para confirmar compatibilidad y cobertura de servicio en tu ubicación.
    </p>
  </section>

  {{-- 5. Propiedad intelectual --}}
  <section class="mb-5">
    <h2 class="h4">5) Propiedad intelectual</h2>
    <p>
      El contenido del sitio (textos, logotipos, imágenes, diseños y código) está protegido por las leyes aplicables.
      No se permite su reproducción, distribución o modificación sin autorización escrita del titular correspondiente.
      Las marcas de terceros mencionadas pertenecen a sus respectivos propietarios.
    </p>
  </section>

  {{-- 6. Limitación de responsabilidad --}}
  <section class="mb-5">
    <h2 class="h4">6) Limitación de responsabilidad</h2>
    <p>
      El uso del sitio es bajo tu propio riesgo. Hacemos esfuerzos razonables para mantener la información actualizada,
      sin embargo, no garantizamos su exactitud, disponibilidad permanente ni ausencia de errores.
      En ningún caso seremos responsables por daños indirectos, incidentales o consecuenciales derivados del uso del sitio.
    </p>
  </section>

  {{-- 7. Aviso de Privacidad (resumen) --}}
  <section class="mb-5">
    <h2 class="h4">7) Aviso de Privacidad (resumen)</h2>
    <p>
      Para brindar atención a tus solicitudes (servicio, cotización, compra o soporte) podemos recabar datos como nombre,
      teléfono, correo electrónico, empresa y modelo de equipo. Tratamos tus datos conforme a la legislación aplicable en México,
      incluida la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (LFPDPPP).
    </p>
    <h3 class="h6 mt-3">Finalidades del tratamiento</h3>
    <ul>
      <li>Atender solicitudes de información y cotización.</li>
      <li>Programar diagnósticos, reparaciones y mantenimiento.</li>
      <li>Gestionar ventas, facturación y soporte postventa.</li>
      <li>Mejorar la calidad del servicio y la experiencia del usuario.</li>
    </ul>
    <h3 class="h6 mt-3">Transferencias</h3>
    <p>
      No compartimos tus datos con terceros sin tu consentimiento, salvo requerimientos de autoridad o proveedores que
      actúen como encargados para cumplir una finalidad solicitada (por ejemplo, mensajería o facturación).
    </p>
  </section>

  {{-- 8. Derechos ARCO y medios de contacto --}}
  <section class="mb-5">
    <h2 class="h4">8) Derechos ARCO y medios de contacto</h2>
    <p>
      Puedes ejercer tus derechos ARCO (Acceso, Rectificación, Cancelación y Oposición), así como revocar tu consentimiento,
      enviando un mensaje a:
      <a href="mailto:tecnicosCelaya@gmail.com" class="text-decoration-none">tecnicosCelaya@gmail.com</a>.
      Indica tu nombre completo, medio de contacto y la descripción clara de tu solicitud. Daremos seguimiento conforme a los plazos legales aplicables.
    </p>
  </section>

  {{-- 9. Cookies y tecnologías similares --}}
  <section class="mb-5">
    <h2 class="h4">9) Cookies y tecnologías similares</h2>
    <p>
      El sitio puede utilizar cookies para mejorar la experiencia de navegación, recordar preferencias y obtener estadísticas de uso.
      Puedes deshabilitarlas desde tu navegador; sin embargo, algunas funciones podrían verse afectadas.
    </p>
  </section>

  {{-- 10. Seguridad de la información --}}
  <section class="mb-5">
    <h2 class="h4">10) Seguridad de la información</h2>
    <p>
      Implementamos medidas administrativas y técnicas razonables para proteger tus datos contra acceso, alteración, divulgación o destrucción no autorizada.
      Ningún método de transmisión o almacenamiento es 100% seguro, por lo que no podemos garantizar seguridad absoluta.
    </p>
  </section>

  {{-- 11. Conservación de datos --}}
  <section class="mb-5">
    <h2 class="h4">11) Conservación de datos</h2>
    <p>
      Conservaremos tus datos personales únicamente por el tiempo necesario para cumplir las finalidades informadas y/o por los plazos establecidos
      en la normativa aplicable. Posteriormente, procederemos a su supresión o anonimización segura.
    </p>
  </section>

  {{-- 12. Menores de edad --}}
  <section class="mb-5">
    <h2 class="h4">12) Menores de edad</h2>
    <p>
      Nuestros servicios están dirigidos a mayores de edad. Si consideras que un menor nos proporcionó datos sin consentimiento de su tutor,
      contáctanos para atenderlo a la brevedad.
    </p>
  </section>

  {{-- 13. Modificaciones --}}
  <section class="mb-5">
    <h2 class="h4">13) Modificaciones</h2>
    <p>
      Podemos actualizar estos Términos y/o el Aviso de Privacidad para reflejar cambios en la operación del sitio, servicios o requisitos legales.
      Te recomendamos revisarlos periódicamente. La versión vigente será la que se publique en este sitio.
    </p>
  </section>

  {{-- 14. Contacto --}}
  <section class="mb-4">
    <h2 class="h4">14) Contacto</h2>
    <p>
      Si tienes dudas sobre estos Términos o sobre el tratamiento de tus datos personales, escríbenos a
      <a href="mailto:tecnicosCelaya@gmail.com" class="text-decoration-none">tecnicosCelaya@gmail.com</a>
      o envíanos un mensaje por WhatsApp:
      <a href="https://wa.me/5214611234567?text=Hola%20Técnicos%20Celaya,%20tengo%20una%20duda%20sobre%20sus%20términos%20y%20privacidad"
         target="_blank" rel="noopener">hacer consulta</a>.
    </p>
    <p class="small text-muted mt-3">
      <em>Nota:</em> Este documento es informativo y no constituye asesoría legal. Ajusta los datos de contacto, razón social y domicilio
      conforme a tu operación. Si lo requieres, consulta a un profesional para adaptar estas cláusulas a tus necesidades específicas.
    </p>
  </section>
</section>

{{-- Botón flotante WhatsApp --}}
<a class="position-fixed bottom-0 end-0 m-4 btn btn-success rounded-circle shadow-lg"
   href="https://wa.me/5214611234567?text=Hola%20Técnicos%20Celaya,%20necesito%20ayuda%20con%20los%20términos%20y%20privacidad"
   target="_blank" rel="noopener" aria-label="Contáctanos por WhatsApp"
   style="font-size:1.5rem; width:3rem; height:3rem; display:flex; align-items:center; justify-content:center;">
  ⌕
</a>
@endsection
