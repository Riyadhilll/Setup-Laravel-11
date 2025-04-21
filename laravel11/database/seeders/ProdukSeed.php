<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Produk Minuman',
                'price' => 50.00,
            ],
            [
                'name' => 'Product Makanan',
                'price' => 100.00,
            ],
            [
                'name' => 'Product Kecantikan',
                'price' => 200.00,
            ],
        ]);
    }
}
