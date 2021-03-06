<?php

use App\Models\Post;
use Faker\Generator;

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

$factory->define(Post::class, function(Generator $faker) {
    return [
        'title' => $faker->sentence,
        'slug' => $faker->slug,
        'intro' => $faker->paragraph,
    ];
});
