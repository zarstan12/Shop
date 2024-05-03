<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\EloquentUserRepository;

class ViewUpdateController extends Controller
{
    public function __invoke(int $userId)
    {
        $eloquentUserRepository = new EloquentUserRepository();
        $user = $eloquentUserRepository->findById($userId);
        return view('update', ['user' => $user]);
    }
}
