@extends('layouts.app')
@section('title','Panel | Técnicos Celaya')
@section('meta_description','Panel de usuario autenticado.')

@section('content')
<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4 mb-0">Panel</h1>
    <div>
      <span class="me-3 text-muted small">Sesión: <strong>{{ auth()->user()->email }}</strong></span>
      <form action="{{ route('logout') }}" method="POST" class="d-inline">
        @csrf
        <button class="btn btn-sm btn-outline-secondary">Salir</button>
      </form>
    </div>
  </div>

  <div class="row g-3">
    <div class="col-md-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h2 class="h6">Bienvenido</h2>
          <p class="mb-2">Hola, <strong>{{ auth()->user()->name }}</strong>.</p>
          <p class="mb-0 text-muted small">Aquí podrás ver tus accesos, atajos y próximos módulos del sistema.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h2 class="h6">Accesos rápidos</h2>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="{{ route('home') }}" class="link-primary">Inicio del sitio</a></li>
            <li class="mb-2"><a href="{{ route('offers') }}" class="link-primary">Ofertas</a></li>
            <li class="mb-2"><a href="{{ route('terms') }}" class="link-primary">Términos y privacidad</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h2 class="h6">Estado</h2>
          <ul class="mb-0 small text-muted">
            <li>Usuario: <strong>{{ auth()->user()->name }}</strong></li>
            <li>Correo: <strong>{{ auth()->user()->email }}</strong></li>
            <li>Ingreso: <strong>{{ now()->format('d/m/Y H:i') }}</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
