<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::Create([
            'code'=>'12345',
            'name'=>'Indomie',
            'price'=>3000
        ]);
        Product::Create([
            'code'=>'58265',
            'name'=>'Qtela',
            'price'=>8000
        ]);
        Product::Create([
            'code'=>'09134',
            'name'=>'Yakult',
            'price'=>11000
        ]);
        Product::Create([
            'code'=>'65789',
            'name'=>'Mini Oreo',
            'price'=>20000
        ]);
        Product::Create([
            'code'=>'11123',
            'name'=>'SariRoti',
            'price'=>30000
        ]);
    }
}
