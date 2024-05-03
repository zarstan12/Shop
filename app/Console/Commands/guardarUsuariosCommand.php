<?php

namespace App\Console\Commands;

use App\UseCases\SaveUserUseCase;
use Illuminate\Console\Command;

class guardarUsuariosCommand extends Command
{

    protected $signature = 'app:guardar-usuarios-command';
    protected $description = 'Comando para guardar usuarios';

    public function handle()
    {
        $name = $this->ask('dame tu nombre');
        $lastName = $this->ask('dame tu apellido');
        $phone = $this->ask('dame tu numero');
        $age = $this->ask('dame tu edad');
 
       $SaveUserUC = new SaveUserUseCase($name,$lastName,$phone,$age);
       $SaveUserUC->setName('isela');
        echo $SaveUserUC->getName();



    }
}
