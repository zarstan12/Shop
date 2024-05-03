<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
      DB::table('products')->insert(
        [
            'id' => 1,
            'name' => 'Producto 1',
            'description' => 'Description 1',
            'code' => 1
        ]);
    }
}
