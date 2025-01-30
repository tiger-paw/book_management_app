@extends('layouts.app')
@section('title', '社員管理')
@section('content')
    <div class="d-flex justify-content-end">
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
    </div>
    <br>
    <h1>社員の新規登録</h1>

    <form action="/db/user_management_store" method="post">
        @csrf
        <p style="margin-left: 2rem;">社員名：<input type="text" name="u_name" required></p>
        <p>パスワード：<input type="password" name="password" required></p>
        <p style="margin-left: 2rem;">部署ID：<input type="number" name="d_id" required></p>
        <p>社員コード：<input type="text" name="user_code" required></p>
        <input type="submit" value="登録" class="btn btn-primary">
        <a href="{{ route('user_management.index') }}" class="btn btn-secondary">戻る</a>
    </form>
    <br>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection
