<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Catalog\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $title = $faker->unique()->sentence(rand(1, 3), true);
    $model = $faker->unique(true)->numberBetween(rand(1, 3));
    $content = '<ul>
                <li>
                  <p>Stronger permanent magnet DC motor</p>
                </li>
                <li>
                  <p>Mechanical commutation through multi bar commutator provides long lifetime</p>
                </li>
                <li>
                  <p>Operation in both directions of rotation</p>
                </li>
                <li>
                  <p>Sleeve bearing at motor shaft is standard</p>
                </li>
                <li>
                  <p>Optionally with ball bearing, custom shaft length and diameter, lead version</p>
                </li>
              </ul>';
    $data = [
        'name' => $title,
        'model' => $model,
        'content' => $content,
        'meta_title' => $faker->sentence(rand(3, 8), true),
        'meta_description' => $faker->sentence(rand(3, 8), true),
        'meta_keywords' => $faker->sentence(rand(3, 8), true),
        'category_id' => rand(2, 13),
        'image' => env('APP_URL') . $faker->randomElement([
            'img/product/catalog_image1.png',
            'img/product/catalog_image2.png',
            'img/product/catalog_image3.png',
            'img/product/catalog_image4.png',
            'img/product/catalog_image5.png',
            'img/product/catalog_image6.png',
            'img/product/catalog_image7.png',
            'img/product/catalog_image8.png',
            'img/product/catalog_image9.png',
            'img/product/catalog_image10.png',
            'img/product/catalog_image11.png',
            'img/product/catalog_image12.png',
            'img/product/catalog_image13.png'
        ]),
        'group_id' => rand(1, 87),
        'slug' => Str::slug($title . $faker->unique(true)->numberBetween(rand(10, 3000))),
        'status' => $faker->boolean(50),
    ];

    return $data;
});
