<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insertOrIgnore([

            [
                'name' => 'Administrator',
                'email' => 'superadmin@akaboezem.com',
                'role' => 'admin',
                'password' => Hash::make('mypassword'),
            ],


        ]);
    }
}
