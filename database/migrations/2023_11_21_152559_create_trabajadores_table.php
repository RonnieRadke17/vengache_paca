<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajadoresTable extends Migration
{
    public function up()
    {
        Schema::create('trabajador', function (Blueprint $table) {
            $table->id('IdTrabajador');
            $table->unsignedBigInteger('IdUsuario');
            $table->foreign('IdUsuario')->references('IdUsuario')->on('usuario');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trabajador');
    }
}
