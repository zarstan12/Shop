<?php

namespace App\Repositories\Contracts\Users;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{

public function store(string $name, string $email, string $password): void;

public function getUsers(): Collection;

public function delete(int $userId): void;

public function findById(int $userId): User;

public function update(int $userId, string $name, string $email, string $password): void;


}