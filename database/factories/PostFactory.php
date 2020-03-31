<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->text(),
        'views' => $faker->numberBetween(1000, 9999),
        'user_id' => factory(\App\User::class),
        'category_id' => factory(\App\Category::class),
    ];
});
