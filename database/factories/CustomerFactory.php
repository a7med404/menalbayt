<?php

use Faker\Generator as Faker;

$factory->define(App\Models\customer::class, function (Faker $faker) {
    # 'first_name', 'last_name', 'phone_number', 'image', 'gender', 'last_seen', 'departments_id'
    return [
        'first_name'       => $faker->firstName(10),
        'last_name'        => $faker->lastName(10),
        'phone_number'     => $faker->e164PhoneNumber(),
        'gender'           => 1,
        'last_seen'        => now(),
    ];
});
