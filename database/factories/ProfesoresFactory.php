<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profesor;
use Faker\Generator as Faker;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'ap_paterno' =>$faker->name,
        'genero_id' => 1,
        'estado' => 1,
    ];
});
