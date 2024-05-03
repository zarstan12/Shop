<?php

namespace App\Console\Commands;

use App\Models\Product;
use COM;
use Illuminate\Console\Command;

class CreateProducts2Command extends Command
{
 
    protected $signature = 'app:create-products2-command';

    protected $description = 'Command description';


    public function handle()
    {
            //aprobado
        $producto = new Product();
        $producto->name = $this->ask('dame un nombre');
        $producto->description = $this->ask('dame una descripcion');
        $producto->code = $this->ask('dame un codigo');


         $producto->save();

        $this->info('producto creado correctamente');
    }
}
