@extends('layouts.app')
@section('title', '社員管理')
@section('content')
<div class="d-flex justify-content-end">
    <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
</div>
<br>
<body>
    <h1>データの削除</h1>
    @if(isset($record))
        <form action="/db/user_management_delete" method="post">
            @csrf
            <p>以下のデータを削除します　よろしいですか？</p>
            <p> 社員番号：<input type="text" name="u_id" value="{{ $record ->u_id }}" readonly></p>
            <p> 社員名：<input type="text" name="u_name" value="{{ $record ->u_name }}" readonly></p>
            <p> 部署ID：<input type="text" name="d_id" value="{{ $record ->d_id }}" readonly></p>
            <p> 社員コード：<input type="text" name="user_code" value="{{ $record ->user_code }}" readonly></p>
            <br>
            <input type="submit" value="削除" class="btn btn-danger mx-2">
            <a href="/db/user_management_erase" class="btn btn-secondary mx-2">戻る</a>
            <a href="{{ route('user_management.index') }}" class="btn btn-primary mx-2">社員管理画面に戻る</a>
        </form>
    @else
        <form action="/db/user_management_erase" method="post">
            @csrf
            社員番号：<input type="number" name="u_id" required><br>
            <br>
            <input type="submit" value="確認" class="btn btn-primary mx-2">
            <a href="{{ route('user_management.index') }}" class="btn btn-secondary mx-2">戻る</a>
        </form>
    @endif
@endsection
