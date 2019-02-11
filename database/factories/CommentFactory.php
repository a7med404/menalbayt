<?php

use Faker\Generator as Faker;

$factory->define(App\Models\comment::class, function (Faker $faker) {
    
    return [
        'comment'       => $faker->text(70),
        'offer_id'        => 2,//$faker->numberBetween($min = 1, $max = 30),
        'profile_id'     => 2, //$faker->numberBetween($min = 1, $max = 30),
    ];
});
