<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {

    $name = $faker->unique()->word();

    $data = [
        'name' => $name,
        'content' => $faker->realText(),
        'meta_title' => $faker->sentence(rand(3, 8), true),
        'meta_description' => $faker->sentence(rand(3, 8), true),
        'meta_keywords' => $faker->sentence(rand(3, 8), true),
        'slug' => Str::slug($name),
        'status' => $faker->boolean(50),
    ];

    return $data;
});
