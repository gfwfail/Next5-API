<?php

use Faker\Generator as Faker;

$types = collect([
    'Thoroughbred',
    'Greyhounds',
    'Harness'
]);

$factory->define(App\Race::class, function (Faker $faker) use ($types) {
    return [
        'suspend' => time() + random_int(3000, 100000),
        'type'    => $types->random(),
    ];
});
