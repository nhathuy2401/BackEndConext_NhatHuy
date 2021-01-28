<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(\App\Contact::class, function (Faker $faker) {
    return [
        'address' => $faker->address,
        'hotline' => $faker->phoneNumber,
        'email' => $faker->email,
    ];
});
