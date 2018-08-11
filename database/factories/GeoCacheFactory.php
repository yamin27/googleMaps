<?php

use Faker\Generator as Faker;

$factory->define(\App\Model\GeoCache::class, function (Faker $faker) {
    return [
        'address' => $faker->address,
        'latitude' => $faker->latitude(23.79, 23.84),
        'longitude' => $faker->longitude(90.29, 90.40),

    ];
});
