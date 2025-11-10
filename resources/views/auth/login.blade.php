@extends('layouts.app')
@section('title','Login | Técnicos Celaya')
@section('meta_description','Acceso de usuarios con MySQL.')

@push('styles')
<link rel="stylesheet" href="{{ asset('estilos/login.css') }}">
@endpush

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
      <h1 class="h3 text-center mb-4">Iniciar sesión</h1>

      {{-- Mensajes de error global (credenciales) --}}
      @if(session('err'))
        <div class="alert alert-danger">{{ session('err') }}</div>
      @endif

      <form method="POST" action="{{ route('login.post') }}" class="card shadow-sm p-4">
        @csrf

        <div class="mb-3">
          <label for="email" class="form-label">Correo</label>
          <input id="email" type="email" name="email"
                 class="form-control @error('email') is-invalid @enderror"
                 value="{{ old('email') }}" required autofocus>
          @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input id="password" type="password" name="password"
                 class="form-control @error('password') is-invalid @enderror"
                 required minlength="6">
          @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="remember" name="remember">
          <label class="form-check-label" for="remember">Recordarme</label>
        </div>

        <button class="btn btn-primary w-100">Entrar</button>

        <p class="text-center small mt-3 mb-0">
          ¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate</a>
        </p>
      </form>
    </div>
  </div>
</div>
@endsection
