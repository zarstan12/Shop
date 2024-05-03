<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class ListProductsCommand extends Command
{

    protected $signature = 'app:list-products-command';
    protected $description = 'Command description';

    public function handle()
    {

        //Read aprobado 
        
        $productos = Product::all();
        $dataProduct = [];
        foreach ($productos as $producto) {
            $dataProduct[] = [
                'ID' => $producto->id,
                'name' => $producto->name,
                'description' => $producto->description,
                'code' => $producto->code,
            ];
        }
        $this->table(['ID', 'NAME','DESCRIPTION', 'CODE'], $dataProduct);        

    }
}
