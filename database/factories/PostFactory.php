<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_body' =>$faker->realText(),
        'profile_id' =>App\Profile::inRandomOrder()->first()->id,
    ];
});
