<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'dueno_id', 'descripcion', 'precio', 'disponibilidad',
    ];

     // Relación de 'Residencia' con el modelo 'Usuario' como dueño de la residencia
    public function dueno()
    {
        return $this->belongsTo(Usuario::class, 'dueno_id');
    }
}
