<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment_body' =>$faker->realText(),
        'profile_id' =>App\Profile::inRandomOrder()->first()->id,
        'post_id' =>App\Post::inRandomOrder()->first()->id,
    ];
});
