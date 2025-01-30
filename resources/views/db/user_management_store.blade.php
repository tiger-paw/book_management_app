@extends('layouts.app')
@section('title', '社員管理')
@section('content')
<div class="d-flex justify-content-end">
    <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
</div>
<br>
<body>
    <h1>以下のデータを登録しました</h1>
    <table class="table">
        <tr>
            <th>社員番号</th>
            <th>社員名</th>
            <th>パスワード</th>
            <th>部門ID</th>
            <th>社員コード</th>


        </tr>
        <tr>
            <td>{{ $u_id }}</td>
            <td>{{ $u_name }}</td>
            <td>{{ $password }}</td>
            <td>{{ $d_id }}</td>
            <td>{{ $user_code }}</td>
        </tr>
    </table>
    <br>
    <a href="{{ route('user_management.index') }}" class="btn btn-primary">社員管理画面に戻る</a>
    @endsection
