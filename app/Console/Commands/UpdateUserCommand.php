<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UpdateUserCommand extends Command
{

    protected $signature = 'app:update-user-command';
    protected $description = 'Este comando es para actualizar un usuario';

    public function handle()
    {
        //Solicitamos el itentificador (ID) del usuario
        $userId = $this->ask('Ingresa el id del usuario que quieras actualizar');
        
        //Buscamos el usuario mediante su identificador
        $user = User::findOrFail($userId);

        //Solicitamos los datos para hacer la actualizacion
        $name = $this->ask('ingrese su nombre');
        $lastName = $this->ask('ingrese su apellido');
        $phone = $this->ask('ingrese su telefono');
        $age = $this->ask('ingrese su edad');
       
        //Asigno los nuevos valores en cada campo
        $user->name = $name;
        $user->last_name = $lastName;
        $user->phone = $phone;
        $user->age = $age;

        //Lo guardo
        $user->save();
        $this->info('Usuario actualizado exitosamente');
    }
}
