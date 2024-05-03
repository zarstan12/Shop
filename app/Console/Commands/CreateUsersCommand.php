<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUsersCommand extends Command
{
 
    protected $signature = 'app:create-users-command';
    protected $description = 'Este comando es para crear usuarios';

    public function handle()
    {
        $nombre = 'sair';
        $user = new User();
        $user->name = $nombre;
        $user->last_name = 'Medina';
        $user->phone = 1234432142;
        $user->age = 44;
        $user->save();

        $this->info('Usuario registrado correctamente');
    }
}
