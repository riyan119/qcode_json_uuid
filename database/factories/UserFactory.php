<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'meta' => [
            "gender" => $faker->randomElement(['male','female']),
            "country" => $faker->country,
            "bio" => [
                "summery" => $faker->realText(),
                "full" => $faker->realText(800)
            ],
            "skills" => $faker->randomElements(["PHP","Laravel","MYSQL","VueJS","JavaScript"], rand(2,4))
        ],
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
