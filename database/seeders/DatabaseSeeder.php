<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Livestreamer',
            'password' => '$2y$12$TQXeSshmsfVTyvkkRYjrm.w3OMT.i0HXyqwExCOiS1H7z4U333SQO', // Conf2025
        ]);
        
    }
}
