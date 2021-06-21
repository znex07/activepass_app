<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountryTableSeeder::class,
            ProvincesTableSeeder::class,
            CitiesTableSeeder::class,
            ClinicSeeder::class
        ]);

        User::create([
            'fname'           => 'Admin',
            'role_id'  => '1',
            'is_vaccinated'  => 'Partially...',
            'avatar'  => 'default.png',
            'email'          => 'admin@admin.com',
            'password'       => bcrypt('sgweb123'),
            'remember_token' => Str::random(60),
            'role_id'        => 1,
        ]);
    }
}
