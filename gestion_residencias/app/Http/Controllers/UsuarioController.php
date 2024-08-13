<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    // Método para mostrar el formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('usuarios.index');
    }

    // Método para manejar la autenticación del usuario
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

    // Método para mostrar el formulario de creación de usuario
    public function create()
    {
        // Obtener todos los usuarios para pasar a la vista
        $usuarios = Usuario::all();
        return view('usuarios.create', ['usuarios' => $usuarios]);
    }

    // Método para almacenar un nuevo usuario
    public function store(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'contraseña' => 'required|string|min:8',
            'rol' => 'required|string',
        ]);

        // Crear el nuevo usuario
        Usuario::create([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'contraseña' => bcrypt($request->input('contraseña')),
            'rol' => $request->input('rol'),
        ]);

        // Redirigir a la vista de inicio de sesión con un mensaje de éxito
        return redirect()->route('usuarios.create')->with('success', 'Usuario creado exitosamente.');
    }
}
