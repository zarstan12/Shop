<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class NewComandoCommand extends Command
{
    protected $signature = 'app:new-command';

    protected $description = 'descripcion del comando';
    
    public function handle()
    {

    }


}