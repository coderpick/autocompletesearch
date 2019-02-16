<?php

use App\Category;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $name = $faker->words(rand(1,3), true);
    $slug = str_slug($name, '-');
    return [
        'category_id' => function()
        {
            return Category::all()->random();
        },
        'name' => $name,
        'slug' => $slug,
        'description' => $faker->text($maxNbChars = 200),
        'image' => $faker->imageUrl(800,600, 'sports'),
        'price' => rand(50,500),
    ];
});
