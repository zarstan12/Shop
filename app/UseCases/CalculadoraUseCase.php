<?php
namespace App\UseCases;

class CalculadoraUseCase {

    public function sumar(int $numero1, int $numero2){
    
       $resultado =  $numero1 + $numero2;

       return $resultado;

    }


}