<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function login(Request $req)
    {

        $userId = $req->u_id;
        $password = $req->password;
        $userPassword = User::find($userId)->password;

        $req->session()->put('userId', $userId);
        $req->session()->put('password', $password);


        $data = [
            'user_id' => $userId,
            'password' => $password,
            'userPassword' => $userPassword,
        ];

        if (!empty($userId) && !empty($password) && $password === $userPassword) {

            return view('loginForm', $data);
        }

        return view('/', $data);
    }
}
