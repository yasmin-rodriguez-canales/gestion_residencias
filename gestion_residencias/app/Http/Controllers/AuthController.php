<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'email' => 'required|email',
            'contraseña' => 'required|string',
        ]);

        // Intentar autenticar al usuario
        $credentials = $request->only('email', 'contraseña');
        if (Auth::attempt($credentials)) {
            // Si la autenticación es exitosa, redirigir a la vista principal
            return redirect()->route('usuarios.inicio');
        } else {
            // Si la autenticación falla, redirigir a la página de inicio de sesión con un mensaje de error
            return redirect()->route('usuarios.create')
                ->withErrors(['error' => 'Credenciales incorrectas. Necesitas crear una cuenta.']);
        }
    }
}
