<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ViewRegisterController extends Controller
{
    public function __invoke()
    {
        return view('register');
    }
}
