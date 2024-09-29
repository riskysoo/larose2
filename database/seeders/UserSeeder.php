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
            'name' => 'admin',
            'email' => 'admin0901@larose',
            'password' => bcrypt('Marketing@2024'),
            'roles' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
