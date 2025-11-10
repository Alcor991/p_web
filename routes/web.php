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
Route::fallback(fn() => response()->view('landing', [], 404));

use App\Http\Controllers\AuthController;

Route::get('/login',    [AuthController::class, 'showLogin'])->name('login');
Route::post('/login',   [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register',[AuthController::class, 'register'])->name('register.post');

Route::post('/logout',  [AuthController::class, 'logout'])->name('logout');

// Ruta protegida de ejemplo (requiere login)
Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');