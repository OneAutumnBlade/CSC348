<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'name' =>$faker->name(),
        'user_id' => $faker->unique()->numberBetween(2, App\User::count()),
    ];
});
