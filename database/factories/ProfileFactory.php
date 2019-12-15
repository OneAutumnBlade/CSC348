<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'name' =>$faker->name(),
        'date_of_birth' =>$faker->date(),
        'user_id' =>App\User::inRandomOrder()->first()->id,
    ];
});
