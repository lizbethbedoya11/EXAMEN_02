<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Doctor
 * @package App\Models
 * @version September 30, 2021, 3:51 am UTC
 *
 * @property string $apellido
 * @property string $nombre
 * @property integer $dni
 * @property string $especialidad
 */
class Doctor extends Model
{
    //use SoftDeletes;

    public $table = 'doctor';
    protected $primaryKey= 'iddoctor';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'apellido',
        'nombre',
        'dni',
        'especialidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'iddoctor' => 'integer',
        'apellido' => 'string',
        'nombre' => 'string',
        'dni' => 'integer',
        'especialidad' => 'string'
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
        'especialidad' => 'nullable|string|max:45'
    ];

    
}
