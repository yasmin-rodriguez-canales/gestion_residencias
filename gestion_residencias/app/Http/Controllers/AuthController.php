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
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->route('inicio');
        }

        // Autenticación fallida
        return redirect()->route('index')->with('error', 'Credenciales inválidas. Necesitas crear una cuenta.');
    }
}
