<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShareUserData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // ログインしていなければログインページへリダイレクトさせる
        // if (empty($request->session()->get('userId'))) {
        //     return redirect('/login');
        // }

        // ログインしていない(=userIdを保持していない)場合はログインページへリダイレクト
        if (!$request->session()->has('userId') && !$this->isLoginRequest($request)) {
            return redirect('/login');
        }

        // セッションからデータを取得
        if ($request->hasSession() && $request->session()->has('userId')) {
            $userId = $request->session()->get('userId');
            $userName = $request->session()->get('userName');
            $userCode = $request->session()->get('userCode');
            $isAdmin = $request->session()->get('isAdmin');
            // $isAdmin = $userCode === 'admin';

            // ビューにデータを渡す
            view()->share(compact('userId', 'userName', 'userCode', 'isAdmin'));
            // ログインしている場合はそのままデータを渡す
        } elseif (!($request->hasSession()) && $request->has('u_id') && $request->has('password')) { // elseifの条件はフォームからの送信データであるu_idとpasswordが存在する場合
            // AuthControllerのloginアクションが実行されるよう送信データを保持したままリダイレクトではなくloginアクションへ移るようにする
            return app()->make(\App\Http\Controllers\AuthController::class)->login($request); // リクエストをAuthControllerのloginアクションに渡す
        } else {
            $userId = null;
            $userName = null;
            $userCode = null;
            $isAdmin = false;
            // ログインしていない場合は空のデータを渡す
            view()->share(compact('userId', 'userName', 'userCode', 'isAdmin'));
        }

        return $next($request);
    }

    protected function isLoginRequest(Request $request): bool
    {
        return $request->is('login') || $request->is('login/*');
    }
}
