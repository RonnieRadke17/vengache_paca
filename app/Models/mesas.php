<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mesas extends Model
{
    protected $table = 'mesas';
    protected $primaryKey = 'ID_Mesa';
    public $timestamps = true;

    // Relación con reservaciones
    public function reservaciones()
    {
        return $this->hasMany(Reservacion::class, 'ID_Mesa', 'ID_Mesa');
    }
}
