<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToggleRedirectController extends Controller
{
    // リダイレクトの有効/無効を切り替える
    public function toggle(Request $request)
    {
        dd($request->session()->all());

        // チェックボックスの状態を取得
        $redirectDisabled = $request->input('redirect_disabled') == '1';
        $request->session()->put('redirect_disabled', $redirectDisabled);

    // セッション値をログで確認（デバッグ用）
    \Log::info('redirect_disabled: ' . $redirectDisabled);


        // リダイレクトにsessionを使うため、リダイレクト先のコントローラでセッションを取得する必要がある
        return redirect('login')->with('redirect_disabled', $redirectDisabled);
    }
}
