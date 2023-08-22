<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@test.com',
            'password' => '$2y$10$zqXYNx0qgVWqhuCM9sRa3urLwfdOAI.uvb2sBbwuo2yOu0j0MawFO',
            'created_at' => '2023-05-21 00:08:41',
            'updated_at' => '2023-05-21 00:09:24'
          ]);
        DB::table('users')->insert([
        'name' => 'user2',
        'email' => 'user2@test.com',
        'password' => '$2y$10$ghu3XNWe2wXA2V100RhjcOdIjHO5MUkjexr53lRsGC9EauwMAqwpK',
        'created_at' => '2023-08-22 18:21:23',
        'updated_at' => '2023-08-22 18:21:23'
        ]);
    
    }
}
