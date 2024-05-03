<?php

namespace App\Console\Commands;

use App\UseCases\SaludosUseCase;
use Illuminate\Console\Command;

class SaludoBuenosDiasCommand extends Command
{

    protected $signature = 'app:saludo-buenos-dias-command';

    protected $description = 'Comando para dar los buenos dias';

    /**
     * Execute the console command.
     */
    public function handle()
    {
     $saludar = new SaludosUseCase();
        $saludar->buenosDias();
  
        
    }
}
