<?php

use Faker\Generator as Faker;

$factory->define(App\JobApplication::class, function (Faker $faker) {
    $user_ids = DB::table('users')->pluck('id')->all();
    $job_ids = DB::table('jobs')->pluck('id')->all();
    return [
        'name' => $faker->name,
        'user_id' => $faker->randomElement($user_ids),
        'job_id' => $faker->randomElement($job_ids),
        'email' =>$faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'cv' =>'tj3FDghPCJSi2aG3wbWACdsP74hcD1SGHdKiFHl6.pdf'
    ];
});

