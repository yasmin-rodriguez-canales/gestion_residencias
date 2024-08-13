<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidenciaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\AuthController;
use App\Models\Usuario;

// Rutas de residencias
Route::resource('residencias', ResidenciaController::class);

// Rutas de usuarios
Route::resource('usuarios', UsuarioController::class);

// Rutas de solicitudes
Route::resource('solicitudes', SolicitudController::class);

// Rutas de mensajes
Route::resource('mensajes', MensajeController::class);

// Ruta para mostrar el formulario de creación de usuario
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');

// Ruta para manejar el inicio de sesión
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/', function () {
    return view('usuarios.index'); // Vista del formulario de inicio de sesión
})->name('index');

// Ruta para la página principal después de iniciar sesión
Route::get('/inicio', function () {
    return view('inicio'); // Vista principal a la que se redirige después del inicio de sesión
})->name('inicio');
