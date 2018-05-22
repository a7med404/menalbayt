<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\profile::class, function (Faker $faker) {
    return [
        'first_name'        => $faker->firstName(10),
        'last_name'         => $faker->lastName(10),
        'username'          => $faker->name(10),
        'email'             => $faker->email(),
        'address_latitude'  => $faker->latitude($min = -90, $max = 90),
        'address_longitude' => $faker->longitude($min = -180, $max = 180),
        'gender'            => 1,
        'pio'               => $faker->text($maxNBChars   = 255),
        'identifier_type'   => $faker->numberBetween($min = 1, $max = 5),
        'identifier_number' => $faker->numberBetween($min = 10000000, $max = 200000000),
        'identifier_image'  => $faker->word(),
        'trusted'           => 1,
        'department_id'     => 1,
    ];
});
