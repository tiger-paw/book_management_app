<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function login(Request $req)
    {
        $userId = $req->u_id; // ユーザ名の取得
        $password = $req->password; // パスワードの取得

        // id, passが送信されなければログインページへリダイレクト
        // if (!isset($userId) || !isset($password) || $userId === "" || $password === "") {
        //     redirect('/login');
        // }

        $userRecord = User::find($userId); // ユーザーIDに一致するレコード
        $correctId = User::find($userId)->u_id; // 正しいu_id
        $correctPass = User::find($userId)->password; // 正しいパスワード

        $userName = User::find($userId)->u_name; // 社員名をDBから取得
        $userCode = User::find($userId)->user_code; // ユーザーコードをDBから取得


        // 認証処理
        if ($userId === $correctId && $password === $correctPass) {
            $req->session()->put('userId', $userId); // ユーザーIDをセッションに保存
            $req->session()->put('userName', $userName); // ユーザー名をセッションに保存
            $req->session()->put('userCode', $userCode); // ユーザーコードをセッションに保存

            return redirect('/')->with([
                'userRecord' => $userRecord,
                'userId' => $userId,
                'password' => $userId,
                'userName' => $userName,
                'correctId' => $correctId,
                'correctPass' => $correctPass,
            ]);
        }

        // function error()
        // {
        //     $_SESSION['error'] = "ログインに失敗しました。ログインし直してください";
        //     header('Location: login.php');
        //     exit();
        // }
        // // フォームからのデータチェック
        // if (!isset($userId) || !isset($password) || $userId === "" || $password === "") {
        //     error();
        // }

        // // 認証処理(ユーザ名およびパスワードが一致するか)
        // if ($userId === $correctId && $password === $correctPass) {
        //     $_SESSION['userId'] = $userId;
        //     $_SESSION['isLogin'] = true;
        //     header('Location: logined.php');
        //     exit();
        // } else {
        //     error();
        // }

        $data = [
            'userRecord' => $userRecord,
            'userId' => $userId,
            'password' => $userId,
            'userName' => $userName,
            'correctId' => $correctId,
            'correctPass' => $correctPass,
        ];


        return view('loginForm', $data);
    }
}

        // // 初期の記述

        // $userId = $req->u_id;
        // $password = $req->password;
        // $userPassword = User::find($userId)->password;

        
        // $data = [
            //     'user_id' => $userId,
            //     'password' => $password,
            //     'userPassword' => $userPassword,
            // ];
            
            // if (!empty($userId) && !empty($password) && $password === $userPassword) {
                
                // $req->session()->put('userId', $userId);
                // $req->session()->put('password', $password);

        //     return view('loginForm', $data);
        // }

        // return view('/', $data);