<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validar las credenciales del formulario
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'contraseña' => ['required'], 
        ]);

        // Verificar si el usuario existe en la base de datos
        $usuario = Usuario::where('email', $credentials['email'])->first();

        if ($usuario && Hash::check($credentials['contraseña'], $usuario->contraseña)) {
            // Si la contraseña es correcta
            return redirect()->route('usuarios.inicio');
        } else {
            // Si las credenciales son incorrectas
            return redirect()->back()->withErrors([
                'email' => 'Credenciales incorrectas. Por favor, intenta de nuevo o crea una cuenta.',
            ]);
        }
    }
}
