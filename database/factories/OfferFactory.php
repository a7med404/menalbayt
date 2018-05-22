<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\offer::class, function (Faker $faker) {
    #id 	title 	description 	longitude 	latitude 	max_price 	min_price 	offer_start_date 	offer_end_date 	status 	level 	departments_id 	customers_id
    return [
        'title'            => $faker->word(100),
        'description'      => $faker->text($maxNBChars     = 200),
        'min_price'        => $faker->randomElement($array = [100, 400, 300, 200, 500, 600], $count      = 1),
        'max_price'        => $faker->randomElement($array = [1000, 400, 3000, 2000, 5000, 6000], $count = 1),
        'offer_start_date' => now(),
        'offer_end_date'   => now(),
        'latitude'         => $faker->latitude($min        = -90, $max                                   = 90),
        'longitude'        => $faker->longitude($min       = -180, $max                                  = 180),
        'level'            => 2,
        'status'           => 1,
        'department_id'    => 1,
        'customer_id'      => 1,
        'provider_id'      => 1,
    ];
});



