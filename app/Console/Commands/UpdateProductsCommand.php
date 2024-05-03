<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class UpdateProductsCommand extends Command
{

    protected $signature = 'app:update-products-command';

    protected $description = 'Command Para actualizar productos';

 
    public function handle()
    {
        $productId = $this->ask('dame el id');
      
        {
            $product = Product::findOrFail($productId);

           /* $product->name = $name;
            $product->description = $this->ask('dame la nueva descripcion');
            $product->code = $code;
            $product->save();*/
        }

    }
}
