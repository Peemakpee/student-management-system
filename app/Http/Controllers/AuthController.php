<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin() {

        return view('user.auth.login');
    }

    public function getRegister() {

        return view('user.auth.register');
    }
}
