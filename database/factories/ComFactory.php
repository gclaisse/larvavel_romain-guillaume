<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Com::class, function (Faker\Generator $faker) {

    return [
        'commentaire' => $faker->text,
        'created_at' => $faker->dateTime,
        'user_id' => factory(App\User::class)->create()->id,
        'article_id' => factory(App\Article::class)->create()->id
    ];


});