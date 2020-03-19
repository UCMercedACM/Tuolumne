<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Workshop;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Workshop::class, function (Faker $faker) {
    return [
        'workshop_name' => $faker->name,
        'description' => $faker->sentence,
        'location' => $faker->address,
        'time' => $faker->time,
        'date' => $faker->date,
        'github_repo' => $faker->unique()->url,
        'google_slides' => $faker->unique()->url,
        'attendees' => $faker->name,
        'conducted_by' => $faker->name,
        // 'thumbnail' => $faker->image,
        // 'flyer' => $faker->image,
        'active' => $faker->boolean,
        'created_at' => now(),
    ];
});
