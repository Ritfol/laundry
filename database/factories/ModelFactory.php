<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'phone_number' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = Hash::make('admin'),
        'gender' => 'Male',
        'city' => 'Dar Es Salaam',
        'location_description' => 'Kariby na Kibo Complex',

    ];
});

$factory->define(App\Tender::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'phone_number' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = Hash::make('admin'),
        'service' => 'Monthly',
        'city' => 'Dar Es Salaam',
        'location_description' => 'Posta karibu na CRDB',

    ];
});

$factory->define(App\Admin::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => 'admin1',
        'phone_number' => $faker->phoneNumber,
        'email' => 'admin@admin.com',
        'password' => $password ?: $password = Hash::make('admin'),
        'role' => 'normal'

    ];
});
