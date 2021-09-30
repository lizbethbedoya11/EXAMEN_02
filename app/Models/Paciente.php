<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paciente
 * @package App\Models
 * @version September 30, 2021, 3:51 am UTC
 *
 * @property string $apellido
 * @property string $nombre
 * @property integer $dni
 * @property integer $celular
 */
class Paciente extends Model
{
    //use SoftDeletes;

    public $table = 'paciente';
    protected $primaryKey= 'idpaciente';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'apellido',
        'nombre',
        'dni',
        'celular'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idpaciente' => 'integer',
        'apellido' => 'string',
        'nombre' => 'string',
        'dni' => 'integer',
        'celular' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'apellido' => 'nullable|string|max:45',
        'nombre' => 'nullable|string|max:45',
        'dni' => 'nullable|integer',
        'celular' => 'nullable|integer'
    ];

    
}
