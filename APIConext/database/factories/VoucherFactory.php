<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Voucher::class, function (Faker $faker) {
    return [
        'title'=>$faker->title,
        'description'=>$faker->text,
        'time'=>$faker->dateTime,
        'contact'=>$faker->phoneNumber,

    ];
});
