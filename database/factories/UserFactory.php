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
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


// $factory->define(App\Post::class, function (Faker $faker) {
//     return [
//         'title' => $faker->name,
//         'slug' => $faker->slug,
//         'category_id' => rand(1,5),
//         'description' => clean($faker->randomHtml(3,8)),
//         'user_id' => rand(1,20),
//     ];
// });




// $factory->define(App\Comment::class, function (Faker $faker) {
//     return [
//         'user_id' => rand(1,20),
//         'post_id' => 94,
//         'body' => $faker->sentence(rand(7,100)),
//         'parent_id'=> rand(1,20),
//     ];
// });