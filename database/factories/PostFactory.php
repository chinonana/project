<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        
        'discription'=> $faker->realText(200),    // 200文字のテキスト
    ];
});
