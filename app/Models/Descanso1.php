<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Descanso
 *
 * @property $ID_Descanso
 * @property $ID_Trabajador
 * @property $Fecha
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Descanso extends Model
{
    
    static $rules = [
		'ID_Descanso' => 'required',
		'ID_Trabajador' => 'required',
		'Fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_Descanso','ID_Trabajador','Fecha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'ID_Trabajador');
    }
    

}
