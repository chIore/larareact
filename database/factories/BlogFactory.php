<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->userName,
        'description' => $faker->text(30),
        'author_id' => $faker->numberBetween(1, 50),
    ];
});
