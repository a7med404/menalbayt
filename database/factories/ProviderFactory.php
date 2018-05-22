<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\provider::class, function (Faker $faker) {
    # id 	first_name 	last_name 	username 	phone_number 	email 	address 	image 	cover_image 	
    # gender 	pio 	balance 	available 	account_status 	identifier_number 	identifier_type 	identifier_image 	trusted 	last_seen
    return [
        // 'first_name'        => $faker->firstName(10),
        // 'last_name'         => $faker->lastName(10),
        // 'username'          => $faker->name(10),
        'phone_number'      => $faker->e164PhoneNumber(),
        // 'email'             => $faker->email(),
        // 'address_latitude'         => $faker->latitude($min = -90, $max = 90),
        // 'address_longitude'        => $faker->longitude($min = -180, $max = 180),
        // 'gender'            => 1,
        // 'pio'               => $faker->text($maxNBChars   = 255),
        'is_available'      => 1,
        'account_status'    => 1,
        // 'identifier_type' => $faker->numberBetween($min = 1, $max = 5),
        // 'identifier_number' => $faker->numberBetween($min = 10000000, $max = 200000000),
        // 'identifier_image'  => $faker->word(),
        // 'trusted'           => 1,
        'last_seen'         => now(),
        // 'department_id'      => 1,
    ]; 
});
