<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $empresa_id
 * @property $nombre
 * @property $apellido
 * @property $CC
 * @property $nomina
 * @property $faltas
 * @property $devengado
 * @property $deducciones
 * @property $percepciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Administradore[] $administradores
 * @property Empresa $empresa
 * @property Nomina[] $nominas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'empresa_id' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'CC' => 'required',
		'nomina' => 'required',
		'faltas' => 'required',
		'devengado' => 'required',
		'deducciones' => 'required',
		'percepciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['empresa_id','nombre','apellido','CC','nomina','faltas','devengado','deducciones','percepciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function administradores()
    {
        return $this->hasMany('App\Models\Administradore', 'empleados_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'id', 'empresa_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nominas()
    {
        return $this->hasMany('App\Models\Nomina', 'empleados_id', 'id');
    }
    

}
