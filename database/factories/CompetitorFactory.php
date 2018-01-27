<?php

use Faker\Generator as Faker;

$factory->define(App\Competitor::class, function (Faker $faker) {
    return [
        'country'=>$faker->countryCode,
        'name'=>$faker->name
    ];
});
