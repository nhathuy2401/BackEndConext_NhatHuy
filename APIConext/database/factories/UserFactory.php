<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => '1231231321',
        'gender'=>'male',
        'verified'=> 'true',
        'expertise'=>$faker->dateTime,
        'business_type'=>$faker->text,
        'workplace'=>$faker->text,

    ];
});

//$factory->define(\App\Contact::class, function (Faker $faker) {
//    return [
//        'address' => $faker->address,
//        'hotline' => $faker->phoneNumber,
//        'email'=>$faker->email
//
//    ];
//});
//$factory->define(\App\Event::class, function (Faker $faker) {
//    return [
//        'title' => $faker->title,
//        'time' => $faker->dateTime,
//        'description'=>$faker->text,
//    ];
//});
//$factory->define(\App\Home::class, function (Faker $faker) {
//    return [
//        'business_type' => $faker->text,
//        'expertise' => $faker->text,
//        'user'=>$faker->name,
//        'explore'=>$faker->text,
//    ];
//});


