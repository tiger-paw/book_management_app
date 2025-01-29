<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function login(Request $req)
    {
        $userId = (int) $req->u_id; // ユーザ名の取得
        $password = $req->password; // パスワードの取得

        $userRecord = User::find($userId); // ユーザーIDに一致するレコード
        $correctId = User::find($userId)->u_id; // 正しいu_id
        $correctPass = User::find($userId)->password; // 正しいパスワード

        $userName = User::find($userId)->u_name; // 社員名をDBから取得
        $userCode = User::find($userId)->user_code; // ユーザーコードをDBから取得

        // ユーザー照合結果
        $isUser = $userId === $correctId && $password === $correctPass;

        // 総務であるかを確認する真偽値
        $isAdmin = $userCode === "admin";

        // 認証処理
        if ($isUser) {

            // リダイレクトするパターン  (セッションでデータをビューに渡すにはリダイレクト先のコントローラで取得が必要)
            $req->session()->put('userId', $userId); // ユーザーIDをセッションに保存
            $req->session()->put('userName', $userName); // ユーザー名をセッションに保存
            $req->session()->put('userCode', $userCode); // ユーザーコードをセッションに保存
            $req->session()->put('isAdmin', $isAdmin);

            return redirect('/');
        } else {
            return view('login_form');
        }
    }

    public function logout(Request $req)
    {
        $req->session()->flush();

        return redirect('/login');
    }
}
