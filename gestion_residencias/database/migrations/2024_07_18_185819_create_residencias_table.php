<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidenciasTable extends Migration
{
    public function up()
    {
        Schema::create('residencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dueno_id')->constrained('usuarios')->onDelete('cascade'); // Cambia 'usuarios' si el nombre de tu tabla es diferente
            $table->string('descripcion');
            $table->decimal('precio', 8, 2);
            $table->boolean('disponibilidad');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('residencias');
    }
}

