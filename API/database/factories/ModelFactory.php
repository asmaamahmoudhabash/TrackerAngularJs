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


// projects

$factory->define(App\Models\Project::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->word,
        'content' => $faker->sentence,
//        'image' => $faker->image('images',400,300),
    ];
});

// tasks

$factory->define(App\Models\Task::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->word,
        'content' => $faker->sentence,
        'project_id' => factory(App\Models\Project::class)->create()->id,
        'status' => true,




    ];


});
