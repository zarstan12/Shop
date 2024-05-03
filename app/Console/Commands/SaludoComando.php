<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SaludoComando extends Command
{
    protected $signature = 'app:saludo-comando';
    protected $description = 'Comando creado para saludar a los demas';

    public function handle()
    {
        
    }
}
