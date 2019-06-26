<?php

use App\genrebook;
use Faker\Generator as Faker;

$factory->define(App\genrebook::class, function (Faker $faker) {
    return [
        'NameGenre' => $faker->company,
    ];
});
