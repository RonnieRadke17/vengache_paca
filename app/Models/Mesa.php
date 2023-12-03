<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mesa
 *
 * @property $id
 * @property $Nombre_Mesa
 * @property $created_at
 * @property $updated_at
 *
 * @property Reservacione[] $reservaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mesa extends Model
{
    
    static $rules = [
		'Nombre_Mesa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre_Mesa'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservaciones()
    {
        return $this->hasMany('App\Models\Reservacione', 'ID_Mesa', 'id');
    }
    

}
