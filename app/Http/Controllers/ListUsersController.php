<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\Contracts\Users\UserRepositoryInterface;
use Illuminate\Http\Request;

class ListUsersController extends Controller
{
    
    public function __construct(private readonly UserRepositoryInterface $userRepositoryInterface)
    {}

    public function __invoke()
    {
        $users = $this->userRepositoryInterface->getUsers();
        return response()->json($users);
        
    }

}
