<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'ID_Usuario';
    public $timestamps = true;

    // Relación con reservaciones
    public function reservaciones()
    {
        return $this->hasMany(Reservacion::class, 'ID_Cliente', 'ID_Usuario');
    }

    // Relación con descansos de trabajadores
    public function descansosTrabajadores()
    {
        return $this->hasMany(DescansoTrabajador::class, 'ID_Trabajador', 'ID_Usuario');
    }
}
