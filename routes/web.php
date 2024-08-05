<?php

use App\Http\Controllers\AutenticacionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('auth.acceso');
})->name('login');

Route::post('/iniciar-sesion', [AutenticacionController::class, "iniciarSesion"])->name("auth.iniciarSesion");

Route::get('/registrarse', function () {
    return view('auth.registrarse');
});

Route::post('/registrar', [AutenticacionController::class, "registrarUsuario"])->name("auth.registrarUsuario");

Route::group(['prefix' => 'cuenta', 'middleware' => ['auth']], function () {
    Route::get('/usuario', [AutenticacionController::class, "verPerfil"])->name("auth.verPerfil");
    Route::post('/cerrar-sesion', [AutenticacionController::class, "cerrarSesion"])->name("auth.cerrarSesion");
});
