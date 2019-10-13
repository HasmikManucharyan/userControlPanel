<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Role;
use App\Location;
use App\AgeGroup;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
	$roles = Role::all()->pluck('id')->toArray();
	$locations = Location::all()->pluck('id')->toArray();
	$ageGroups = AgeGroup::all()->pluck('id')->toArray();
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'phone' => $faker->PhoneNumber,
        // 'email' => $faker->unique()->safeEmail,
        'email' => Str::random(7).Str::random(4).'@'.Str::random(4),
        'email_verified_at' => now(),
        'password' => bcrypt($faker->password(6)), // password
        'remember_token' => Str::random(10),
        'role_id' => $faker->randomElement($roles),
        'location_id' => $faker->randomElement($locations),
        'ageGroup_id' => $faker->randomElement($ageGroups),
    ];
});
