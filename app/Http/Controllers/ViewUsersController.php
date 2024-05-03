<?php

namespace App\Http\Controllers;


use App\Repositories\EloquentUserRepository;


class ViewUsersController extends Controller
{
    public function __invoke()
    {
       $userRepository = new EloquentUserRepository();
       $users = $userRepository->getUsers();
        return view('users', ['users'=> $users]);
    }
}
