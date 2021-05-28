<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'team1' => $faker -> word(),
        'team2' => $faker -> word(),
        'point1' => $faker -> numberBetween(1, 130),
        'point2' => $faker -> numberBetween(1, 130),
        'result' => $faker -> boolean($chanceOfGettingTrue = 50)
    ];
});
