@extends('layouts.app')
@section('title','Registro | Técnicos Celaya')
@section('meta_description','Registro de usuarios con MySQL y aceptación de términos.')

@push('styles')
<link rel="stylesheet" href="{{ asset('estilos/registro.css') }}">
@endpush


@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-7 col-lg-6">
      <h1 class="h3 text-center mb-4">Crear cuenta</h1>

      {{-- Mensajes de error globales --}}
      @if(session('err'))
        <div class="alert alert-danger">{{ session('err') }}</div>
      @endif

      <form method="POST" action="{{ route('register.post') }}" class="card shadow-sm p-4">
        @csrf

        <div class="mb-3">
          <label for="name" class="form-label">Nombre completo</label>
          <input id="name" type="text" name="name"
                 class="form-control @error('name') is-invalid @enderror"
                 value="{{ old('name') }}" required maxlength="120">
          @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Correo electrónico</label>
          <input id="email" type="email" name="email"
                 class="form-control @error('email') is-invalid @enderror"
                 value="{{ old('email') }}" required>
          @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input id="password" type="password" name="password"
                 class="form-control @error('password') is-invalid @enderror"
                 required minlength="6">
          @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
          <input id="password_confirmation" type="password" name="password_confirmation"
                 class="form-control" required minlength="6">
        </div>

        {{-- Checkbox de términos y condiciones --}}
        <div class="form-check mb-4">
          <input type="checkbox" class="form-check-input @error('terms') is-invalid @enderror"
                 id="terms" name="terms" value="1" {{ old('terms') ? 'checked' : '' }} required>
          <label class="form-check-label" for="terms">
            Acepto los <a href="{{ route('terms') }}" target="_blank" class="link-primary text-decoration-none">
              términos y condiciones
            </a>
          </label>
          @error('terms') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
        </div>

        <button class="btn btn-primary w-100">Crear cuenta</button>

        <p class="text-center small mt-3 mb-0">
          ¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión</a>
        </p>
      </form>
    </div>
  </div>
</div>
@endsection
