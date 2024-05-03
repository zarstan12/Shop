<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\EloquentUserRepository;
use Illuminate\Http\Request;

class DeleteUserController extends Controller
{
    public function __invoke(int $userId)
    {
        $eloquentUserRepository = new EloquentUserRepository();
        $eloquentUserRepository->delete($userId);
        return redirect()->back();
    }
}
