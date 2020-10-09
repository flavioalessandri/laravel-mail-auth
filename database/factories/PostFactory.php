<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $width = 400;
    $height= 200;

    return [

      'title'       => $faker -> word(),
      'genre'       => $faker -> word(),
      'body'        => $faker -> text($maxNbChars = 700),
      'like'        => $faker -> numberBetween($min = 20, $max = 3000),
      'dislike'     => $faker -> numberBetween($min = 20, $max = 3000),
      'image'       => $faker -> imageUrl($width, $height)
    ];
});
