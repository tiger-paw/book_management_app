<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function login(Request $req)
    {
        // 追加PHP
        session_start();

        $userId = $req->u_id; // ユーザ名の取得
        $password = $req->password; // パスワードの取得

        $correctId = User::find($userId); // 正しいu_id
        $correctPass = User::find($userId)->password; // 正しいパスワード

        function error()
        {
            $_SESSION['error'] = "ログインに失敗しました。ログインし直してください";
            header('Location: login.php');
            exit();
        }
        // フォームからのデータチェック
        if (!isset($userId) || !isset($password) || $userId === "" || $password === "") {
            error();
        }

        // 認証処理(ユーザ名およびパスワードが一致するか)
        if ($userId === $correctId && $password === $correctPass) {
            $_SESSION['userId'] = $userId;
            $_SESSION['isLogin'] = true;
            header('Location: logined.php');
            exit();
        } else {
            error();
        }
    }
}

        // // 初期の記述

        // $userId = $req->u_id;
        // $password = $req->password;
        // $userPassword = User::find($userId)->password;

        
        // $req->session()->put('userId', $userId);
        // $req->session()->put('password', $password);

        // $data = [
        //     'user_id' => $userId,
        //     'password' => $password,
        //     'userPassword' => $userPassword,
        // ];

        // if (!empty($userId) && !empty($password) && $password === $userPassword) {

        //     return view('loginForm', $data);
        // }

        // return view('/', $data);