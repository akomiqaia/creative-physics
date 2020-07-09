<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    //
    public function index($user)
    {
        $user = User::find($user);
        error_log($user);
        return view('home', ['user' => $user]);
    }
}
