<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cita
 * @package App\Models
 * @version September 30, 2021, 3:50 am UTC
 *
 * @property integer $idpaciente
 * @property string $fecha_cita
 * @property string $iddoctor
 */
class Cita extends Model
{
    //use SoftDeletes;

    public $table = 'cita';
    protected $primaryKey= 'idcita';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idpaciente',
        'fecha_cita',
        'iddoctor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcita' => 'integer',
        'idpaciente' => 'integer',
        'fecha_cita' => 'date',
        'iddoctor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idpaciente' => 'nullable|integer',
        'fecha_cita' => 'nullable',
        'iddoctor' => 'nullable|string|max:45'
    ];

    
}
