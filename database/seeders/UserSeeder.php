<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 'admin'
            ],
            [
                'name' => 'User One',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 'user'
            ],
            [
                'name' => 'User Two',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 'user'
            ],
            [
                'name' => 'Komang Menak',
                'email' => 'menakfurniture@gmail.com',
                'password' => Hash::make('menakfurniture2000'),
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 'admin'
            ],
        ]);
    }
}
