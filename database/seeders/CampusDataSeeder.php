<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Location;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CampusDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Default Categories
        $categories = [
            'Electronics',
            'Documents & IDs',
            'Accessories',
            'Books & Notes',
            'Personal Items'
        ];

        foreach ($categories as $cat) {
            Category::firstOrCreate(['category_name' => $cat]);
        }

        // Default Locations
        $locations = [
            'University Library',
            'Cafeteria',
            'Main Gate',
            'Academic Building 1',
            'Academic Building 2',
            'Computer Lab',
            'Parking Area'
        ];

        foreach ($locations as $loc) {
            Location::firstOrCreate(['location_name' => $loc]);
        }

        // Create a Default Admin User
        User::firstOrCreate(
            ['email' => 'admin@campuslost.com'],
            [
                'name' => 'System Admin',
                'student_id' => 'ADMIN001',
                'password' => Hash::make('password123'),
                'role' => 'ADMIN',
            ]
        );
    }
}
