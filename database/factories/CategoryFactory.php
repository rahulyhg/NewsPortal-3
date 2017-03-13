<?php

$factory->define(App\Entities\Category::class, function (Faker\Generator $faker) { 
    $name = $faker->unique()->name;
    $slug = str_slug($name, '-');
    return [
        'name' => $name,
        'slug' => $slug
    ];
});
