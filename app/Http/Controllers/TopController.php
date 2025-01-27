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
        return view('index');
    }
}
