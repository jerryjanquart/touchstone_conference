<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Streamer',
            'email' => 'email@email.com',
            'password' => '$2y$12$TQXeSshmsfVTyvkkRYjrm.w3OMT.i0HXyqwExCOiS1H7z4U333SQO', // Conf2025
        ]);
    }
}
