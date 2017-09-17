<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});

$factory->define(App\News::class, function (Faker $faker) {
    static $date = '2017-09-17 13:00:00';

    return [
        'title'      => $faker->paragraph(1),
        'content'    => $faker->realText(1000),
        'author_id'  => App\Author::all()->random()->id,
        'created_at' => $date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)
            ->modify('-10 days')
            ->format('Y-m-d H:i:s'),
        'updated_at' => null
    ];
});
