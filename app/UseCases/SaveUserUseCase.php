<?php

namespace App\UseCases;

use App\Models\User;

class SaveUserUseCase
{
    private string $name;
    public string $lastName;
    public int $phone;
    public int $age;


    public function __construct(string $name,string $lastName, int $phone, int $age)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->age = $age;

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function createUser()
    {
        $user = new User();
        $user->name = $this->name;
        $user->last_name = $this->lastName;
        $user->phone = $this->phone;
        $user->age = $this->age;

        $user->save();
    }
}
