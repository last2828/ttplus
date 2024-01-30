<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Blog\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->realText(rand(10, 40));

    $data = [
        'title' => $title,
        'content' => $faker->realText(),
        'meta_title' => $faker->sentence(rand(3, 8), true),
        'meta_description' => $faker->sentence(rand(3, 8), true),
        'meta_keywords' => $faker->sentence(rand(3, 8), true),
        'type_id' => rand(1, 3),
        'slug' => Str::slug($title),
        'status' => $faker->boolean(50),
    ];

    return $data;
});
