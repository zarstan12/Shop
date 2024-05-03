<?php

namespace App\Http\Controllers;

use App\Repositories\EloquentUserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        $userRepository = new EloquentUserRepository();
        $userOrNull = $userRepository->findByEmail($email);

        if (!is_null($userOrNull) and Hash::check($password, $userOrNull->password) ) {
           Auth::login($userOrNull);
        }

        return response()->json('Usuario logueado correctamente');

    }
}
