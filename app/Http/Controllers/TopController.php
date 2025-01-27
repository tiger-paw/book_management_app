<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 利用するモデルの読み込み

class TopController extends Controller
{
    
    // メニュー画面
    public function index()
    {
        // ビューを返す処理を記載
        $menuItems = [
            '書籍一覧',
            '書籍検索',
            '社員管理',
            '書籍管理'
        ];
        return view('index',compact('menuItems'));
    }
}
