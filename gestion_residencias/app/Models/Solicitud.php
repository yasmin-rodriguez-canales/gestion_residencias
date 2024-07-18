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

    public function estudiante()
    {
        return $this->belongsTo(Usuario::class, 'estudiante_id');
    }

    public function residencia()
    {
        return $this->belongsTo(Residencia::class, 'residencia_id');
    }
}
