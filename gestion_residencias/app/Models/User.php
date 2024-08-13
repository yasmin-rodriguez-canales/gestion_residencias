<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Especifica los campos que se pueden rellenar masivamente
    protected $fillable = [
        'nombre', // Nombre del usuario
        'email', // Email del usuario
        'contraseña', // Contraseña del usuario
        'rol', // Rol del usuario
    ];

    // Define la relación con el modelo Residencia
    public function residencias()
    {
        return $this->hasMany(Residencia::class, 'dueno_id');
    }

    // Define la relación con el modelo Solicitud
    public function solicitudes()
    {
        return $this->hasMany(Solicitud::class, 'estudiante_id');
    }
}
