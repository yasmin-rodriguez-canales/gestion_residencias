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
            $table->unsignedBigInteger('dueno_id');
            $table->string('descripcion');
            $table->float('precio');
            $table->boolean('disponibilidad');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('residencias');
    }
}

