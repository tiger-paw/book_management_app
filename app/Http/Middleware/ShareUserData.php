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

        // リダイレクトの有効/無効を切り替える
        if ($request->has('redirect_disabled')) {
            $redirectDisabled = $request->input('redirect_disabled') == '1';
            $request->session()->put('redirect_disabled', $redirectDisabled);
        }

        // トグルスイッチの状態を確認
        if ($request->hasSession()) {
            $redirectDisabled = $request->session()->get('redirect_disabled', false);
            // 強制リダイレクト無効化が有効でtrueが入り、無効でfalseが入る
            view()->share('redirect_disabled', $redirectDisabled);
        }

        // 強制リダイレクトが無効化されておらず、かつ、ログインしていない(=userIdを保持していない)、かつ、ログインページへのリクエストではない場合はログインページへリダイレクト
        if (!$redirectDisabled && !$request->session()->has('userId') && !$this->isLoginRequest($request)) {
            // return redirect('/login');
            return redirect('/login')->with('message', 'ログインしてください');

        }

        // セッションからデータを取得
        if ($request->hasSession() && $request->session()->has('userId')) {
            $userId = $request->session()->get('userId');
            $userName = $request->session()->get('userName');
            $userCode = $request->session()->get('userCode');
            $isAdmin = $request->session()->get('isAdmin');
            $redirect_disabled = $request->session()->get('redirect_disabled');
            // $isAdmin = $userCode === 'admin';

            // ビューにデータを渡す
            view()->share(compact('userId', 'userName', 'userCode', 'isAdmin', 'redirect_disabled'));
            // ログインしている場合はそのままデータを渡す
        } elseif (!($request->hasSession()) && $request->has('u_id') && $request->has('password')) { // フォームからの送信データであるu_idとpasswordが存在する場合
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
