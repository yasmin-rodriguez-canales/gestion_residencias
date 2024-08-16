<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// La clase Mensaje representa un modelo Eloquent en Laravel
class Mensaje extends Model
{
    use HasFactory;

    protected $fillable = [
        'remitente_id', 'destinatario_id', 'mensaje', 'fecha',
    ];

    // Relación de 'Mensaje' con el modelo 'Usuario' como remitente
    public function remitente()
    {
        return $this->belongsTo(Usuario::class, 'remitente_id');
    }

    public function destinatario()
    {
        return $this->belongsTo(Usuario::class, 'destinatario_id');
    }
}
