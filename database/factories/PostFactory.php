<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Post as ModelPost;
use Faker\Generator as Faker;


$factory->define(App\Model\Post::class, function (Faker $faker) {
   
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'slug' => $faker->unique()->slug,
        'categories_id' => rand(1,5),
        'body' => $faker->paragraph,
        'time' => $faker->date($format = 'Y-m-d'),
        'image' => $faker->unique()->imageUrl($width = 730, $height = 490, 'sports')
        // 'image' => 'https://placeimg.com/100/100/any?' . rand(1, 100),

        // abstract
        // animals
        // business
        // cats
        // city
        // food
        // nightlife
        // fashion
        // people
        // nature
        // sports
        // technics
        // transport
        // color
        // image
        // gray
        // image

    ];
});
$factory->define(App\Product::class, function (Faker $faker) {
   
    return [
        // 'image' => $faker->imageUrl($width = 730, $height = 490, 'sports'),
        'product_image' => $faker->imageUrl($width = 730, $height = 490, 'technics'),
        'files' => [$faker->imageUrl($width = 730, $height = 490, 'technics'), $faker->imageUrl($width = 730, $height = 490, 'transport'),],
        'name' => $faker->unique()->sentence($nbWords = 3, $variableNbWords = true),
        'description' => $faker->paragraph,
        'quantity' => rand(1,500),
        // 'brand',
        'price' => rand(10,5000),
        'Sku' => $faker->unique()->uuid,
        'content' => $faker->paragraphs($nb = 6, $asText = true),
        'slug' => $faker->unique()->slug,
        // 'type',
        'category_id' => rand(1,10),
        // 'files'

    ];
});

$factory->define(App\Banner_sr::class, function (Faker $faker) {
   
    return [
        'pictures'  => $faker->imageUrl($width = 1024, $height = 750, 'sports'),
        'details' => $faker->paragraph,
    ];
});

$factory->define(App\Banners::class, function (Faker $faker) {
   
    return [
        'pictures'  => $faker->imageUrl($width = 1024, $height = 750, 'sports'),
        'details' => $faker->paragraph,
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
   $cat =  $faker->unique()->word;
    return [
        'category'  => $cat,
        'slug' => $cat,
    ];
});

$factory->define(App\Sku::class, function(Faker $faker){
    return [
        'sku_no' => $faker->randomNumber($nbDigits = 4, $strict = false),
        'isvalid' => 0
    ];
});