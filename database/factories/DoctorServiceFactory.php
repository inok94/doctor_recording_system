<?php

use App\Doctor;
use App\Service;
use App\DoctorService;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(DoctorService::class, function () {
    return [
        'service_id' => Service::query()->get()->random()->id,
        'doctor_id' => Doctor::query()->get()->random()->id,
        'cost' => rand(600, 3000)
    ];
});
