<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Url;

class UrlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating some sample URLs
        Url::create([
            'target_url' => 'https://www.example.com',
            'shortened_url' => 'example',
            'user_id' => 1 // Make sure this user exists
        ]);

        Url::create([
            'target_url' => 'https://www.laravel.com',
            'shortened_url' => 'laravel',
            'user_id' => 1 // Make sure this user exists
        ]);

        Url::create([
            'target_url' => 'https://www.github.com',
            'shortened_url' => 'github',
            'user_id' => 2 // Assuming another user exists
        ]);
    }
}
