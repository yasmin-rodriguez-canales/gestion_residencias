<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidenciaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\MensajeController;
use App\Models\Usuario;


// Rutas de residencias
Route::resource('residencias', ResidenciaController::class);

// Rutas de usuarios
Route::resource('usuarios', UsuarioController::class);

// Rutas de solicitudes
Route::resource('solicitudes', SolicitudController::class);

// Rutas de mensajes
Route::resource('mensajes', MensajeController::class);


Route::get('/', function () {
    $usuarios = Usuario::all(); // Obtener todos los usuarios
    return view('usuarios.index', ['usuarios' => $usuarios]); // Pasar la variable a la vista
});