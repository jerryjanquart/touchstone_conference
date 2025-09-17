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
            'name' => 'Conference Guest',
            'email' => 'your@email.com',
            'password' => '$2y$12$/WkfG7f.cI4k29z.iMMma.jdSShw5kfmA3wTFvk0NV4Mfphr6MnMi', // TS_Conf_4ar67
        ]);

    }
}
