<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefrescosTable extends Migration
{
    public function up()
    {
        Schema::create('refresco', function (Blueprint $table) {
            $table->id('IdRefresco');
            $table->string('Nombre', 25);
            $table->double('Precio', 5, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('refresco');
    }
}
