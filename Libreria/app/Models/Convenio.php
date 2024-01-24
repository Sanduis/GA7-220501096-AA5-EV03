<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Convenio
 *
 * @property $id
 * @property $nombre
 * @property $registro
 * @property $created_at
 * @property $updated_at
 *
 * @property Nomina[] $nominas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Convenio extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'registro' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','registro'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nominas()
    {
        return $this->hasMany('App\Models\Nomina', 'convenios_id', 'id');
    }
    

}
