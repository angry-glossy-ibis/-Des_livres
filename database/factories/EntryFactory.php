<?php

use Faker\Generator as Faker;
use App\Entry;
App\Entry;

$factory->define(App\Entry::class, function (Faker $faker) {
    return [
        'title' => $faker->words(5,true),
        'content' => $faker->text(300),
        'user_id' => factory(app\User::class)->create()->id,
    ];
});
