<?php

namespace App\Console\Commands;

use App\UseCases\CalculadoraUseCase;
use App\UseCases\CalculosUseCase;
use Illuminate\Console\Command;

class BuscarNumeroCommand extends Command
{
    protected $signature = 'app:buscar-numero-command';

    protected $description = 'Este comando sera para buscar numeros en un array';

   
    public function handle()
    {
       $numero1 = $this->ask('dame el primero numero');
       $numero2 = $this->ask('dame el primero numero');
       $operador = $this->ask('dame el operador');
        $calculadoraUseCase = new CalculadoraUseCase ();

       if ($operador == '+') {
        $resultado = $calculadoraUseCase->sumar($numero1, $numero2);
        echo "el resultado de $numero1 + $numero2 es igual a $resultado";
       }
    }
}
