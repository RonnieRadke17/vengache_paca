<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class descansosTrabajadores extends Model
{
    protected $table = 'descansos_trabajadores';
    protected $primaryKey = 'ID_Descanso';
    public $timestamps = true;

    // Relación con usuario (trabajador)
    public function trabajador()
    {
        return $this->belongsTo(Usuario::class, 'ID_Trabajador', 'ID_Usuario');
    }
}
