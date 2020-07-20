<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subcategory;
use Faker\Generator as Faker;

$factory->define(Subcategory::class, function (Faker $faker) {
    return [
        'title' => $faker->safeEmailDomain,
        'category_id' => $faker->numberBetween(1, 3),
    ];
});
