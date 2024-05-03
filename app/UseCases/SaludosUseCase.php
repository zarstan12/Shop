<?php
namespace App\UseCases;

class SaludosUseCase{

    public function buenosDias()
    {
        echo "Buenos dias Señor ";

    }

    public function BuenasTardes(string $userName)
    {
        Echo "buenas tardes señor $userName";
    }

}