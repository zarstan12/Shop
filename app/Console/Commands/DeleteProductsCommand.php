<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class DeleteProductsCommand extends Command
{
 
    protected $signature = 'app:delete-products-command';
    protected $description = 'Command description';

    public function handle()
    {
    $productId = $this->ask('dame el id del producto');

    $product = Product::findOrFail($productId);

    $product->delete();

    $this->warn('Producto eliminado');

    }
}
