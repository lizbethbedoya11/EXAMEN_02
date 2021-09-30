<?php

namespace App\Repositories;

use App\Models\Cita;
use App\Repositories\BaseRepository;

/**
 * Class CitaRepository
 * @package App\Repositories
 * @version September 30, 2021, 3:50 am UTC
*/

class CitaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idpaciente',
        'fecha_cita',
        'iddoctor'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cita::class;
    }
}
