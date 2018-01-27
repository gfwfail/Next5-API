<?php

use Faker\Generator as Faker;

$countries = collect([
    'AU',
    'US',
    'UK',
    'HK',
    'NZ'

]);

$factory->define(App\Competitor::class, function (Faker $faker) use ($countries) {
    return [
        'country' => $countries->random(),
        'name'    => $faker->name
    ];
});
