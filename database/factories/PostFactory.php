<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'content'=> $faker-> html,
      'author'=> $faker-> firstName,
      'title'=> $faker-> word
    ];
});
