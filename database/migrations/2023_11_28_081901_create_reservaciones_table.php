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
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id('ID_Reservacion');
            $table->foreignId('ID_Cliente')->constrained('usuarios', 'ID_Usuario');
            $table->foreignId('ID_Mesa')->constrained('mesas', 'ID_Mesa');
            $table->date('Fecha');
            $table->time('Hora');
            $table->enum('Estado', ['Pendiente', 'Confirmada', 'Cancelada']);
            // Otros campos relevantes sobre las reservaciones
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservaciones');
    }
};
