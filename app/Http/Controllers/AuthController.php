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

        // ユーザー照合結果
        $isUser = $userId == $correctId && $password === $correctPass; //

        // 認証処理
        if ($isUser) {
            $req->session()->put('userId', $userId); // ユーザーIDをセッションに保存
            $req->session()->put('userName', $userName); // ユーザー名をセッションに保存
            $req->session()->put('userCode', $userCode); // ユーザーコードをセッションに保存

            return redirect('/')->with([
                'userRecord' => $userRecord,
                'userId' => $userId,
                'password' => $password,
                'userName' => $userName,
                'correctId' => $correctId,
                'correctPass' => $correctPass,
            ]);
        } else {
            return view('loginForm');
        }
    }
}
