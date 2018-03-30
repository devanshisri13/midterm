<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'Make'=> $faker->randomElement($array= array('ford','honda','toyota')),
        'Model'=> $faker->randomLetter,
        'year' => $faker->numberBetween($min=1900,$max=2018),
    ];
});
