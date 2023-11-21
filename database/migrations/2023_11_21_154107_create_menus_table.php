<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id('IdMenu');
            $table->unsignedBigInteger('IdAlcohol')->nullable();
            $table->foreign('IdAlcohol')->references('IdAlcohol')->on('alcohol');
            $table->unsignedBigInteger('IdRefresco')->nullable();
            $table->foreign('IdRefresco')->references('IdRefresco')->on('refresco');
            $table->unsignedBigInteger('IdComida')->nullable();
            $table->foreign('IdComida')->references('IdComida')->on('comida');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
