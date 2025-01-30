@extends('layouts.app')
@section('title', '社員管理')
@section('content')
<div class="d-flex justify-content-end">
    <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
</div>
<br>
<h1>以下のデータを削除しました</h1>
    <table class="table text-center">
        <tr>
            <th>社員番号</th>
            <th>社員名</th>
            <th>部署ID</th>
            <th>社員コード</th>

        </tr>
        <tr>
            <td>{{ $u_id }}</td>
            <td>{{ $u_name }}</td>
            <td>{{ $d_id }}</td>
            <td>{{ $user_code }}</td>
        </tr>
    </table>
    <br>
    <a href="{{ route('user_management.index') }}" class="btn btn-primary">社員管理画面に戻る</a>
@endsection
