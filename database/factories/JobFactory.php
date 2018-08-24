<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\job::class, function (Faker $faker) {
    # 'id', 'name', 'description', 'departments_id', 'status',
    return [
        'name'           => $faker->jobTitle(),
        'description'    => $faker->text(160),
        'department_id'  => 1,
        'status'         => 1,
    ];
});
