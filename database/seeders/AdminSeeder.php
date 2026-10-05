<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a default system administrator account
        User::create([
            'name' => 'System Admin',
            'email' => 'admin@campuslost.com',
            'password' => Hash::make('admin1234'),
            'role' => 'ADMIN',
            'student_id' => null, // Admin does not require a student ID
        ]);
    }
}
