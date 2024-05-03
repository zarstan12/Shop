<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function __construct(private readonly UserRepositoryInterface $userRepository)
   {}

   public function __invoke(Request $request)
   {
    $name = $request->get('name');
    $email = $request->get('email');
    $password = $request->get('password');

    $this->userRepository->store($name,$email,$password);
    return redirect()->back();
   }
}
