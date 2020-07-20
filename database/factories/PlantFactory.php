<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Plant;
use Faker\Generator as Faker;

$factory->define(Plant::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'description' => $faker->word(5),
        'image' => 'App/images/plant.png',
        'price' => $faker->randomDigit,
        'category_id' => $faker->numberBetween(1, 3),
    ];
});
