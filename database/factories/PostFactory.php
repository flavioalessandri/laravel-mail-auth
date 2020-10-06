<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [

      'title'       => $faker -> word(),
      'genre'       => $faker -> word(),
      'body'        => $faker -> text(),
      'like'        => $faker -> numberBetween($min = 20, $max = 300),
      'dislike'     => $faker -> numberBetween($min = 20, $max = 300)
    ];
});
