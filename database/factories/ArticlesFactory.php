<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articles;
use Bezhanov\Faker\ProviderCollectionHelper;
use Faker\Generator as Faker;

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

$factory->define(Articles::class, function (Faker $faker) {
    ProviderCollectionHelper::addAllProvidersTo($faker);

    return [
        "titre" => $faker->sentence,
        "contenu" => $faker->realText(),
        "type" => $faker->randomElement(["foot", "bascket", "website"])
    ];
});
