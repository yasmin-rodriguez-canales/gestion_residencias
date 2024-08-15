<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function showLoginForm()
    {
        return view('usuarios.index'); 
    }

    public function create()
    {
        return view('usuarios.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'contraseña' => 'required|string|min:8',
            'rol' => 'required|string',
        ]);

        Usuario::create([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'contraseña' => bcrypt($request->input('contraseña')),
            'rol' => $request->input('rol'),
        ]);

        return redirect()->route('usuarios.inicio')->with('success', 'Usuario creado exitosamente.');
    }
}
