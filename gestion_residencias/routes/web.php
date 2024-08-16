<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResidenciaController;

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/login', [UsuarioController::class, 'showLoginForm'])->name('index');

// Ruta para manejar el inicio de sesión (esto apunta a AuthController)
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Ruta para mostrar el formulario de creación de usuario
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');

// Ruta para manejar el almacenamiento de un nuevo usuario
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');

// Ruta para mostrar el formulario de creación de residencia
Route::get('/residencias/create', [ResidenciaController::class, 'create'])->name('residencias.create');

// Ruta para manejar el almacenamiento de una nueva residencia
Route::post('/residencias', [ResidenciaController::class, 'store'])->name('residencias.store');

Route::get('/dueno', [ResidenciaController::class, 'index'])->name('usuarios.dueno');

Route::get('/inicio', [ResidenciaController::class, 'index2'])->name('usuarios.inicio');



// Ruta para la página principal después de iniciar sesión
Route::get('/inicio', function () {
    return view('usuarios.inicio'); 
})->name('usuarios.inicio');

// Ruta para la página de inicio de sesión (index)
Route::get('/', function () {
    return view('usuarios.index'); 
})->name('index');
