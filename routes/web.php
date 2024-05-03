<?php

use App\Http\Controllers\Front\DeleteUserController;
use App\Http\Controllers\Front\UpdateUserController;
use App\Http\Controllers\Front\ViewUpdateController;
use App\Http\Controllers\Front\ViewUpdateUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ViewRegisterController;
use App\Http\Controllers\ViewUsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'hola mundo';
});
Route::get('users', ViewUsersController::class);
Route::get('register', ViewRegisterController::class);
Route::post('register/store', RegisterController::class);
Route::get('update/{userId}', ViewUpdateController::class);
Route::post('update/{userId}', UpdateUserController::class);

Route::delete('delete/{userId}', DeleteUserController::class);