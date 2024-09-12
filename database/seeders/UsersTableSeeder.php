<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating a sample user
        User::create([
            'name' => 'Hubert',
            'email' => 'hubert@tester.com',
            'password' => Hash::make('password'), // Always hash passwords
        ]);
    }
}
