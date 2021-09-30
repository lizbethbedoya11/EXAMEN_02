<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Detalle
 * @package App\Models
 * @version September 30, 2021, 3:50 am UTC
 *
 * @property integer $idcita
 * @property string $detallecita
 */
class Detalle extends Model
{
    //use SoftDeletes;

    public $table = 'detalle';
    protected $primaryKey= 'iddetalle';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcita',
        'detallecita'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'iddetalle' => 'integer',
        'idcita' => 'integer',
        'detallecita' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcita' => 'nullable|integer',
        'detallecita' => 'nullable|string|max:45'
    ];

    
}
