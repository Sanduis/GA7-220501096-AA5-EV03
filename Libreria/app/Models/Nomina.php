<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nomina
 *
 * @property $id
 * @property $empleados_id
 * @property $convenios_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Convenio $convenio
 * @property Empleado $empleado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nomina extends Model
{
    
    static $rules = [
		'empleados_id' => 'required',
		'convenios_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['empleados_id','convenios_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function convenio()
    {
        return $this->hasOne('App\Models\Convenio', 'id', 'convenios_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'empleados_id');
    }
    

}
