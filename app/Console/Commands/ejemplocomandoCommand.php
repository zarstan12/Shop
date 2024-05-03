<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ejemplocomandoCommand extends Command
{

    protected $signature = 'app:ejemplocomando-command';
    protected $description = 'Comando para saber si soy mayor de edad';

    const EDAD_MINIMA_COLOMBIA = 18;
    const EDAD_MINIMA_EN_MI_BAR = 30;

    public function handle()
    {
        for ($i=6; $i >15 ; $i++) { 
            echo $i . "\n";
        }
        
       
    }
}
