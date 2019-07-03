<?php

use App\Livre;
use Faker\Generator as Faker;

$factory->define(App\Livre::class, function (Faker $faker) {
    return [
        'Title_Livre' => $faker->sentence(1, true),
    'genrebook_id' => factory(genrebook::class)->create()->id,
    'Volume' => $faker->randomFloat(2, 0.01, 9999.99),
    ];
});
