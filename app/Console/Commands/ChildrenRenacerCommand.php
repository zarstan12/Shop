<?php

namespace App\Console\Commands;

use App\UseCases\ChildrenRenacerUseCase;
use Illuminate\Console\Command;

class ChildrenRenacerCommand extends Command
{
    protected $signature = 'app:children-renacer-command';

    protected $description = 'Command description';


    public function handle()
    {
        $children1 = new ChildrenRenacerUseCase('Mahelet Sofia', 'Medina De la Ossa', 2, 'parvulo', 'Jilson', 'Maria');
        $children2 = new ChildrenRenacerUseCase('Elena Sofia', 'Mercado Sanchez', 0, 'gestacion', 'Favian', 'Elsy');
       echo $children1->greeting();
       echo $children2->greeting();

    }
}

