<?php

use App\Role;
use App\Site;
use App\Status;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Role::create([
            'name' => 'Administrator'
        ]);
        Role::create([
            'name' => 'Member'
        ]);

        Status::create([
            'name' => 'Active'
        ]);
        Status::create([
            'name' => 'Inactive'
        ]);

        Site::create([
            'name' => 'T&D Jogja'
        ]);

        User::create([
            'site_id' => 1,
            'role_id' => 1,
            'name' => 'Admin',
            'last_name' => 'Jogja',
            'email' => 'admin@jogja.id',
            'password' => Hash::make('password')
        ]);
    }
}
