<?php

namespace App\Console\Commands;

use App\UseCases\CocheUseCase;
use App\UseCases\RegisterUserUseCase;
use Illuminate\Console\Command;

class CocheCommand extends Command
{

    protected $signature = 'app:coche-command';
    protected $description = 'Command description';

    public function handle()
    {   
        $registerUseCase = New RegisterUserUseCase();

         echo $registerUseCase->password;
     
    }
}
