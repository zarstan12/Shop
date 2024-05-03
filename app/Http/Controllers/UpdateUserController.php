<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\EloquentUserRepository;
use Illuminate\Http\Request;

class UpdateUserController extends Controller
{
  public function __invoke(Request $request, int $userId)
  {
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');

   $eloquentUserRepository = new EloquentUserRepository();
   $eloquentUserRepository->update($userId,$name,$email,$password);

    return response()->json('usuario actualizado correctamente');


  }
}
