<?php

use Faker\Generator as Faker;

$factory->define(App\Series::class, function (Faker $faker) {
    return [
        'title' => $faker->firstName . ' ' . $faker->lastName,
        'description' => $faker->paragraph,
    ];
});
