<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ListUsersCommand extends Command
{
 
    protected $signature = 'app:list-users-command';

    protected $description = 'Este comando es para listar todos mis usuarios';

    public function handle()
    {
        $users = User::all();
       // $dataUsers = [];

        foreach ($users as $user ) {
           $dataUsers[] = [
            'ID' => $user->id,
            'Name' => $user->name,
            'Phone' => $user->phone,
            'Age' => $user->age,
           ];
        }
        $this->table(['ID','Name','Phone','Age'], $dataUsers);
    }
}
