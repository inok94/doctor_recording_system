<?php

use Illuminate\Database\Seeder;

use App\SchedulesDoctors;

class SchedulesDoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SchedulesDoctors::class, 40)->create();
    }
}
