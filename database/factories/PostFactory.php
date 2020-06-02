<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Post as ModelPost;
use Faker\Generator as Faker;


$factory->define(ModelPost::class, function (Faker $faker) {
   
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'categories_id' => rand(1,5),
        'body' => $faker->paragraph,
        'time' => $faker->date($format = 'Y-m-d'),
        'image' => $faker->imageUrl($width = 730, $height = 490, 'sports')
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
