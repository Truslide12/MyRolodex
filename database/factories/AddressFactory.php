<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'number'    => $faker->buildingNumber,
        'street'    => $faker->streetName,
        'city'      => $faker->city,
        'state'     => $faker->state,
        'zip'       => $faker->postcode,
        'type'      => 'home',
        'contact_id'=> factory(App\Contact::class),
    ];
});
