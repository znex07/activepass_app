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
            'name' => 'Makati Medical Center',
            'img' => 'provider1.png',
            'clinic_hours' => '9-5pm',
            'clinic_days' => 'M-F',
            'availability' => 'Available',
            'patients_number' => '350'
        ]);
        Clinic::create([
            'name' => 'HMI Center',
            'img' => 'provider2.png',
            'clinic_hours' => '9-5pm',
            'clinic_days' => 'M-F',
            'availability' => 'Full',
            'patients_number' => '200'
        ]);
        Clinic::create([
            'name' => 'St. Lukes Medical',
            'img' => 'provider3.jpg',
            'clinic_hours' => '9-5pm',
            'clinic_days' => 'M-F',
            'availability' => 'Available',
            'patients_number' => '430'
        ]);
    }
}
