<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BlogPost;
use Faker\Generator as Faker;

$factory->define(BlogPost::class, function (Faker $faker) {
    return [
        //
        'blog_title' => "Blah blah",
        'blog_content' => "blah blah blah",
    ];
});
