<?php

$factory->define(App\Entities\Category::class, function (Faker\Generator $faker) { 
    $name = $faker->unique()->name;
    return [
        'name' => $name,
        'slug' => str_slug($name, '-')        
    ];
});
