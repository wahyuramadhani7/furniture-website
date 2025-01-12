<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'), // Password terenkripsi
                'phone' => '081234567890',
                'address' => 'Jl. Contoh No. 123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User',
                'email' => 'user@example.com',
                'password' => Hash::make('password123'),
                'phone' => '081234567891',
                'address' => 'Jl. Lainnya No. 456',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
