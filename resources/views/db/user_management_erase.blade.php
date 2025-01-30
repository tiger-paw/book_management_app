@extends('layouts.app')
@section('title', '社員管理')
@section('content')
<div class="d-flex justify-content-end">
    <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
</div>
<body>
    <h1>データの削除</h1>
    @if(isset($record))
    <form action="/db/user_management_delete" method="post">
            @csrf
            <p>以下のデータを削除します　よろしいですか？</p>
            社員番号：<input type="text" name="u_id" value="{{ $record ->u_id }}" readonly><br>
            社員名：<input type="text" name="u_name" value="{{ $record ->u_name }}" readonly><br>
            部署ID：<input type="text" name="d_id" value="{{ $record ->d_id }}" readonly><br>
            社員コード：<input type="text" name="user_code" value="{{ $record ->user_code }}" readonly><br>

            <input type="submit" value="削除" class="btn btn-outline-danger"><br>
            <a href="/db/user_management_erase" class="btn btn-outline-primary">キャンセル</a><br>
            <a href="{{ route('user_management.index') }}" class="btn btn-outline-primary">社員管理画面に戻る</a>

        </form>
    @else
        <form action="/db/user_management_erase" method="post">
        @csrf  
        社員番号：<input type="number" name="u_id" required><br>
            <input type="submit" value="確認" class="btn btn-outline-primary"><br>
            <a href="{{ route('user_management.index') }}" class="btn btn-outline-primary">キャンセル</a>

        </form>
    @endif
@endsection