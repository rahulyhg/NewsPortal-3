<?php

use App\Entities\NewsType;
use App\Entities\Category;

$factory->define(NewsType::class, function (Faker\Generator $faker) {
    $name = $faker->unique()->name;
    $slug = str_slug($name, '-');
    return [
        'name' => $name,
        'slug' => $slug,
        'category_id' => function () {
            return factory(Category::class)->create()->id;
        }
    ];
});
