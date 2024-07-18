<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id');
            $table->unsignedBigInteger('residencia_id');
            $table->date('fecha_solicitud');
            $table->string('estado'); // Pendiente, Aprobada, Rechazada
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
