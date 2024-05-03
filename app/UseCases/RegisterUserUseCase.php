<?php
namespace App\UseCases;

use App\Repositories\EloquentUserRepository;
class RegisterUserUseCase{

    public  $email = 'saircuello1224@gmail.com';
    private  $password;
    public  $name;
    public int $phone;

    public function execute($name, $lastName,$phone, $age) {
        $eloquentUserRepository = new EloquentUserRepository();
        $eloquentUserRepository->create($name,$lastName,$phone,$age);
    }
   
  



}