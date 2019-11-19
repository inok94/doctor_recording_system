<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SchedulesDoctors;
use App\Doctor;
use Faker\Generator as Faker;

$factory->define(SchedulesDoctors::class, function (Faker $faker) {
    $dt = $faker->dateTimeInInterval($startDate = 'now', $endDate = '+ 30 days');
    $date = $dt->format("Y-m-d");
    return [
        'doctor_id' => Doctor::query()->get()->random()->id,
        'data' => $date,
    ];
});
