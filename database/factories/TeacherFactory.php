<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'old' => $faker->numberBetween(18, 30),
    ];
});
