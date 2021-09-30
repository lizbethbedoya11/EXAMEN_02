<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Detalle;
use Faker\Generator as Faker;

$factory->define(Detalle::class, function (Faker $faker) {

    return [
        'idcita' => $faker->randomDigitNotNull,
        'detallecita' => $faker->word
    ];
});
