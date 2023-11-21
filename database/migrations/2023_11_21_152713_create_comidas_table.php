<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComidasTable extends Migration
{
    public function up()
    {
        Schema::create('comida', function (Blueprint $table) {
            $table->id('IdComida');
            $table->string('Nombre', 25);
            $table->double('Precio', 5, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comida');
    }
}
