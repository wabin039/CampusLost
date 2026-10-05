<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\AdminSeeder; // Import the AdminSeeder class here
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the AdminSeeder to create default system administrator accounts
        $this->call([
            AdminSeeder::class,
        ]);
    }
}
