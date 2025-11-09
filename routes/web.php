<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí se registran todas las rutas accesibles desde el navegador.
| Cada una devuelve una vista Blade (sin conexión a base de datos).
| Posteriormente se agregarán rutas para autenticación, panel admin, etc.
|
*/

/**
 * Página principal (landing)
 * URL: http://localhost:8000/
 */
Route::get('/', fn() => view('landing'))->name('landing');

/**
 * Página de inicio / Home
 * URL: http://localhost:8000/home
 */
Route::get('/home', fn() => view('home'))->name('home');

/**
 * Página "Sobre nosotros"
 * URL: http://localhost:8000/about
 */
Route::get('/about', fn() => view('aboutus'))->name('about');

/**
 * Página de ofertas y promociones
 * URL: http://localhost:8000/offers
 */
Route::get('/offers', fn() => view('offers'))->name('offers');

/**
 * Página de términos y aviso de privacidad
 * URL: http://localhost:8000/terms
 */
Route::get('/terms', fn() => view('terms'))->name('terms');


/*
|--------------------------------------------------------------------------
| Sección preparada para futuras rutas dinámicas
|--------------------------------------------------------------------------
|
| Aquí se añadirán más adelante:
| - Rutas de autenticación (login, registro)
| - Panel de administración (/admin)
| - Formularios con controladores
| - API REST si decides agregar endpoints
|
| Ejemplo futuro:
| Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
|
*/
