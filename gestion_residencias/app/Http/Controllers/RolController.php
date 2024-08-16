<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class RolController extends Controller
{
    public function verificarRol()
    {
        $usuario = Auth::user();

        if ($usuario->rol === 'Dueño') {
            return redirect()->route('dueno');
        } elseif ($usuario->rol === 'Estudiante') {
            return redirect()->route('estudiante');
        } else {
            // Redirigir a una página de error o predeterminada si el rol no coincide
            return redirect()->route('index')->withErrors([
                'email' => 'Rol de usuario no reconocido.',
            ]);
        }
    }
}

