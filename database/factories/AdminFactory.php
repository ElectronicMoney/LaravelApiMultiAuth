<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Admin::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('secret'), // secret
        'remember_token' => str_random(10),
    ];
});
