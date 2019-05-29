<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Filme;
use Faker\Generator as Faker;

$factory->define(Filme::class, function (Faker $faker) {
    return [
            'title'=> $faker->name,
            'rating'=> $faker->randomNumber(10),
            'length'=> $faker->numberbetween($min =60, $max=180),
            'release_date'=>$faker->dateTimeThisDecade($max ='now',$timezone = null)
            
            
    ];
});
