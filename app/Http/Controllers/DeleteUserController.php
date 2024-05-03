<?php

namespace App\Http\Controllers;

use App\Repositories\EloquentUserRepository;

class DeleteUserController extends Controller
{
    public function __invoke(int $userId)
    {
        $eloquentUserRepository = new EloquentUserRepository();
        $eloquentUserRepository->delete($userId);
        return response()->json('Usuario eliminado, por favor no vuelva');
    }
}
