<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UpdateUsersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-users-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $userId = $this->ask('Introduce el ID del usuario que deseas actualizar:');
        $user = User::find($userId);

        if (!$user) {
            $this->error('El usuario con el ID proporcionado no fue encontrado.');
            return;
        }

        $name = $this->ask('Nuevo nombre (deja en blanco para mantener el actual):');
        if (!empty($name)) {
            $user->name = $name;
        }

        $lastName = $this->ask('Nuevo apellido (deja en blanco para mantener el actual):');
        if (!empty($lastName)) {
            $user->last_name = $lastName;
        }

        $phone = $this->ask('Nuevo teléfono (deja en blanco para mantener el actual):');
        if (!empty($phone)) {
            $user->phone = $phone;
        }

        $age = $this->ask('Nueva edad (deja en blanco para mantener la actual):');
        if (!empty($age)) {
            $user->age = $age;
        }

        $user->save();

        $this->info('Usuario actualizado correctamente');
    }
}
