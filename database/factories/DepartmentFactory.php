<?php

use Faker\Generator as Faker;

$factory->define(App\Models\department::class, function (Faker $faker) {
    # 'name'  'image', 'description', 'status'
    return [
        'name'        => $faker->jobTitle(),
        'description' => $faker->text(160),
        'status'      => 1,
    ];
});
