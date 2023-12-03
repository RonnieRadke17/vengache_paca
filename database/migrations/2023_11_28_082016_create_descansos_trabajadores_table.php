<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('descansos_trabajadores', function (Blueprint $table) {
            $table->id('ID_Descanso');
            $table->foreignId('ID_Trabajador')->constrained('users');
            $table->date('Fecha');
            // Otros campos relevantes sobre los descansos de trabajadores
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('descansos_trabajadores');
    }
};
