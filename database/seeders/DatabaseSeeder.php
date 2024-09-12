<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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

        // Call the UsersTableSeeder to run the seeder
        $this->call(UsersTableSeeder::class);

        // Call the UrlsTableSeeder to run the seeder
        $this->call(UrlsTableSeeder::class);
    }
}
