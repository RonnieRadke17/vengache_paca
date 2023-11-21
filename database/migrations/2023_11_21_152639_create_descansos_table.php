<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescansosTable extends Migration
{
    public function up()
    {
        Schema::create('descansos', function (Blueprint $table) {
            $table->id('IdDescanso');
            $table->unsignedBigInteger('IdTrabajador');
            $table->foreign('IdTrabajador')->references('IdTrabajador')->on('trabajador');
            $table->string('Nombre', 25);
            $table->date('FechaInicio');
            $table->date('FechaFinal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('descansos');
    }
}
