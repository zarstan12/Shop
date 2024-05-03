<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\Users\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;

class EloquentUserRepository implements UserRepositoryInterface
{

    public function store(string $name, string $email, string $password): void
    {
        $passwordHash = Hash::make($password);
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $passwordHash
        ]);
    }

    public function getUsers(): Collection
    {
        $users = User::all();
        return $users;
    }

    public function delete(int $userId): void
    {
        $user = User::find($userId);
        $user->delete();
    }

    public function findById(int $userId): User
    {
        $user = User::find($userId);
        return $user;
    }


    public function update(int $userId, string $name, string $email, string $password): void
    {
        $user = User::find($userId);

        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();
    }
}
