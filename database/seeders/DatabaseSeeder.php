<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $role = Role::where('name', 'admin')->firstOrFail();

            // User::create([
            //     'name'           => 'Admin',
            //     'is_vaccinated'  => 'yes',
            //     'email'          => 'admin@admin.com',
            //     'password'       => bcrypt('password'),
            //     'remember_token' => Str::random(60),
            //     'role_id'        => 1,
            // ]);
    }
}
