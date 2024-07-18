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

    public function dueno()
    {
        return $this->belongsTo(Usuario::class, 'dueno_id');
    }
}
