<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $fillable = [
        'estudiante_id', 'residencia_id', 'fecha_solicitud', 'estado',
    ];

    // Relación de 'Solicitud' con el modelo 'Usuario' como estudiante que realiza la solicitud
    public function estudiante()
    {
        return $this->belongsTo(Usuario::class, 'estudiante_id');
    }

    public function residencia()
    {
        return $this->belongsTo(Residencia::class, 'residencia_id');
    }
}
