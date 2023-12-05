<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservacione
 *
 * @property $id
 * @property $ID_Cliente
 * @property $ID_Mesa
 * @property $Fecha
 * @property $Hora
 * @property $Estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Mesa $mesa
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reservacione extends Model
{
    
    static $rules = [
		'ID_Cliente' => 'required',
		'ID_Mesa' => 'required',
		'Fecha' => 'required',
		'Hora' => 'required',
		'Estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_Cliente','ID_Mesa','Fecha','Hora','Estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mesa()
    {
        return $this->hasOne('App\Models\Mesa', 'id', 'ID_Mesa');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'ID_Cliente');
    }
    

}
