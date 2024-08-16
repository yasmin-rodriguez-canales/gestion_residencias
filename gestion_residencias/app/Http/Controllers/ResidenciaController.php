<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residencia;
use App\Models\Usuario;

class ResidenciaController extends Controller
{

    public function calendario()
    {
        return view('residencias.calendario');
    }


    public function index()
    {
        // Obtener todas las residencias
        $residencias = Residencia::all();

        // Pasar las residencias a la vista
        return view('usuarios.dueno', compact('residencias'));
    }


    public function create()
    {
        // Obtener la lista de dueños para el dropdown
        $duenos = Usuario::all();
        return view('residencias.create', compact('duenos'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'dueno_id' => ['required', 'exists:usuarios,id'],
            'descripcion' => ['required', 'string', 'max:255'],
            'precio' => ['required', 'numeric', 'min:0'],
            'disponibilidad' => ['required', 'in:Disponible,No Disponible'],
        ]);

        // Crear una nueva residencia
        Residencia::create([
            'dueno_id' => $request->dueno_id,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'disponibilidad' => $request->disponibilidad,
        ]);

        // Redirigir a la vista 'dueno'
    return redirect()->route('dueno')->with('success', 'Residencia creada con éxito.');
 }
}