<?php

use Faker\Generator as Faker;

$factory->define(App\Video::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'link' => $faker->freeEmail,
        'description' => $faker->paragraphs(2,true),
    ];
});
