<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class showUsersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:show-users-command';

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
        $users = User::all();

        if ($users->isEmpty()) {
            $this->info('No hay usuarios registrados.');
            return;
        }

        $data = [];
        foreach ($users as $user) {
            $data[] = [
                'ID' => $user->id,
                'Nombre' => $user->name,
                'Apellido' => $user->last_name,
                'Teléfono' => $user->phone,
                'Edad' => $user->age,
            ];
        }

        $this->table(['ID', 'Nombre', 'Apellido', 'Teléfono', 'Edad'], $data);

        $this->info('Usuarios mostrados correctamente');
    }
}
