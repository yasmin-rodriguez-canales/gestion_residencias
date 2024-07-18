<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'contrasena', 'rol',
    ];

    public function residencias()
    {
        return $this->hasMany(Residencia::class, 'dueno_id');
    }

    public function solicitudes()
    {
        return $this->hasMany(Solicitud::class, 'estudiante_id');
    }
}
