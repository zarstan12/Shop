<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class StoreProductsCommand extends Command
{

    protected $signature = 'app:store-products-command';

    protected $description = 'comando para crear productos';

    public function handle()
    {
    $name = $this->ask('dame el nombre del producto');
    $stock = $this->ask('dame la cantidad');
    $precio = $this->ask('dame el precio');

    $product = new Product();
    $product->name = $name;
    $product->stock = $stock;
    $product->precio = $precio;

    $product->save();

    $this->info('producto guardado correctamente');

    }
}
