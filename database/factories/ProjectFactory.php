<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\project::class, function (Faker $faker) {
    # 	id 	title 	short_description 	date 	protfolios_id 
    return [
        'title'  => $faker->text(50),
        'short_description' => $faker->text(160),
        'date' => now(),
    ];
});
