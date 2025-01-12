<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Sofa Minimalis',
                'description' => 'Sofa minimalis modern.',
                'price' => 2500000,
                'image' => 'https://via.placeholder.com/200',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kasur King Size',
                'description' => 'Kasur ukuran king yang nyaman.',
                'price' => 3500000,
                'image' => 'https://via.placeholder.com/200',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
