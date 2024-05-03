<?php

use App\Http\Controllers\DeleteUserController;
use App\Http\Controllers\ListUsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdateUserController;
use App\Http\Controllers\ValidateAgeController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', RegisterController::class);
Route::post('login', LoginController::class);
Route::get('users', ListUsersController::class);
Route::put('users/update/{userId}', UpdateUserController::class);
Route::delete('user/delete/{userId}', DeleteUserController::class);

Route::post('validate/age', ValidateAgeController::class);









Route::put('update/{userId}', function (Request $request, $userId)
{
$name = $request->get('name');
$lastName = $request->get('last_name');
$phone = $request->get('phone');
$age = $request->get('age');

$user = User::find($userId);
$user->name = $name;
$user->last_name = $lastName;
$user->phone = $phone;
$user->age = $age;
$user->save();

return response()->json('Usuario actualizado correctamente');
});
Route::delete('users/{userId}', function ($userId) {

    $user = User::find($userId);
    $user->delete();
    return response()->json('Usuario eliminado');
});