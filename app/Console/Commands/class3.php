<?php

namespace App\Console\Commands;

use App\UseCases\FoundNumberUseCase;
use Illuminate\Console\Command;

class class3 extends Command
{
    protected $signature = 'app:class3';
    protected $description = 'Verificar si el usuario es mayor de edad';
    public function handle()
    {   

        $numeros = [10,20,30,40,50,60];

        $numeroBuscar = $this->ask('dame un numero para buscar');
       
        $useCaseFound = New FoundNumberUseCase();

        $found = $useCaseFound->execute($numeros, $numeroBuscar);

        if ($found===true ) {
            echo "el numero $numeroBuscar fue encontrado en la lista";

        }else {
            echo 'numero no encontrado';
        }


    }
}
