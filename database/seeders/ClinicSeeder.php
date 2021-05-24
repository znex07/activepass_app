<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clinic;

class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clinic::create([
            'clinic_hours' = '9-5pm',
            'clinic_days' = 'M-F',
            'patients_number' = '20'
        ]);
    }
}
