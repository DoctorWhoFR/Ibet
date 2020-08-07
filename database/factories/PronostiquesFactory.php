<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Pronostiques;
use Bezhanov\Faker\ProviderCollectionHelper;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Pronostiques::class, function (Faker $faker) {
    ProviderCollectionHelper::addAllProvidersTo($faker);

    return [
        'date_debut' => $faker->dateTimeBetween("1day", "1day", "Europe/Paris"),
        'date_fin' => $faker->dateTimeBetween("1day", "2day", "Europe/Paris"),
        'equipe_defence' => $faker->team,
        'analyse' => $faker->realText(),
        'type' => $faker->randomElement(['foot', 'bascket', 'tennis']),
        'equipe_attack' => $faker->team,
        'pronostique' => $faker->randomElement(['attack', 'defense', 'egalite']),
        'cote_moyen' => $faker->numberBetween(1, 3),
        'status' => $faker->randomElement(['finished', 'not_started', 'started']),
        'confiance' => $faker->numberBetween(50, 100),
        'final_equipedefence_score' => $faker->numberBetween(1,4),
        'final_equipeattack_score' => $faker->numberBetween(1,4)
    ];
});
