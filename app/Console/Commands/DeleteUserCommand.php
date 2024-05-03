<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class DeleteUserCommand extends Command
{
    protected $signature = 'app:delete-user-command';
    protected $description = 'Este comando es para eliminar usuarios de mi base de datos';


    public function handle()
    {
   
        $userId = $this->ask('Ingresa el id del usuario');


        $user = User::find($userId);
       
        if (!$user) {
            $this->error('El usuario con el ID proporcionado no fue encontrado.');
            return;
        }
        //eliminamos el usuario
        $user->delete();
        //damos un mensaje exitoso
        $this->info('Usuario eliminado exitosamente');

    }
}
