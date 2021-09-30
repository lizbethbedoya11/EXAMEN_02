<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cita;
use Faker\Generator as Faker;

$factory->define(Cita::class, function (Faker $faker) {

    return [
        'idpaciente' => $faker->randomDigitNotNull,
        'fecha_cita' => $faker->word,
        'iddoctor' => $faker->word
    ];
});
