<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'address' => $faker->address,
        'time' => $faker->timezone,
        'description' => $faker->text,
        'user_id'=>$faker->uuid  ,
    ];
});
