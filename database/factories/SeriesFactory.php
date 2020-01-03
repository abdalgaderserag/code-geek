<?php

use Faker\Generator as Faker;

$factory->define(App\series::class, function (Faker $faker) {
    return [
        'title' => $faker->firstName . ' ' . $faker->lastName,
        'description' => $faker->paragraph,
    ];
});
