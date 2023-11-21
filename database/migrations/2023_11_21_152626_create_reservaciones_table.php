<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionesTable extends Migration
{
    public function up()
    {
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id('IdReservacion');
            $table->unsignedBigInteger('IdCliente');
            $table->foreign('IdCliente')->references('IdCliente')->on('cliente');
            $table->string('Nombre', 25);
            $table->dateTime('Fecha');
            $table->integer('Mesa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservaciones');
    }
}
