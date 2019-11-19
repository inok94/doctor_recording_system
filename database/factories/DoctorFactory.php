<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Doctor;

const DOCTOR = 2;

$factory->define(Doctor::class, function () {
    return [
        'user_id' => User::query()->where('type_id', 2)->get()->random()->id,
    ];
});
