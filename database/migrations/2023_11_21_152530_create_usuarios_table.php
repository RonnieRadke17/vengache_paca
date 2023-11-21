<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('IdUsuario');
            $table->string('Correo', 25);
            $table->string('Contraseña', 25);
            $table->string('Nombre', 25);
            $table->enum('Tipo', ['Administrador', 'Trabajador', 'Cliente']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
