<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidenciaController extends Controller
{
    public function create()
    {
        return view('residencias.create');
    }
    
    
}

