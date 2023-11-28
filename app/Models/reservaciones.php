<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservaciones extends Model
{
    protected $table = 'reservaciones';
    protected $primaryKey = 'ID_Reservacion';
    public $timestamps = true;

    // Relación con usuario (cliente)
    public function cliente()
    {
        return $this->belongsTo(Usuario::class, 'ID_Cliente', 'ID_Usuario');
    }

    // Relación con mesa
    public function mesa()
    {
        return $this->belongsTo(Mesa::class, 'ID_Mesa', 'ID_Mesa');
    }
}
