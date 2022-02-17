<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Category;
use App\Author;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return[
        'title'=>$faker->sentence,
        'content'=>$faker->paragraph(2),
        'category_id'=> factory(Category::class)->create()->id,
        'auther_id'=> factory(Auther::class)->create()->id,
        'img'=>$faker->url('Tendances.jpg')
        ];
});
