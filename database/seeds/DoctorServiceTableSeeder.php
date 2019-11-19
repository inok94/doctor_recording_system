<?php

use Illuminate\Database\Seeder;

use App\DoctorService;
use App\Doctor;

class DoctorServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DoctorService::class, 80)->create();
    }
}
