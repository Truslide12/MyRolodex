<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'email' => $faker->unique()->email,
        'phone' => $faker->phoneNumber,
        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
}); 
