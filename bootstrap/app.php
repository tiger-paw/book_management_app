<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // セッションミドルウェアを有効化
        $middleware->append(\Illuminate\Session\Middleware\StartSession::class);
        // ログインセッションを保持するためにグローバルなミドルウェアを追加
        $middleware->append(App\Http\Middleware\ShareUserData::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
