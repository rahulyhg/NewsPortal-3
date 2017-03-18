<?php

use App\Entities\Category;
use App\Entities\NewsType;

$factory->define(Category::class, function (Faker\Generator $faker) {
    $name = $faker->unique()->name;
    $slug = str_slug($name, '-');
    return [
        'name' => $name,
        'slug' => $slug
    ];
});

$factory->state(Category::class, 'relations', function (Faker\Generator $faker) {
    return [
        'newsTypes' => function () {
            return factory(NewsType::class)->create();
        }
    ];
});
