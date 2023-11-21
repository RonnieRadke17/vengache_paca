<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlcoholesTable extends Migration
{
    public function up()
    {
        Schema::create('alcohol', function (Blueprint $table) {
            $table->id('IdAlcohol');
            $table->string('Nombre', 25);
            $table->double('Precio', 5, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alcohol');
    }
}
