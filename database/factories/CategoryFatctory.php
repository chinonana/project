<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(\App\Category::class, function (Faker $faker) {
    $categories = ['花','草','動物','人工'];
    return [
        //
        'category' => $faker->randomElement($categories)
    ];
});