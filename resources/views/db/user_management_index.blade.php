@extends('layouts.app')
@section('title', '社員管理')
@section('content')
<div class="d-flex justify-content-end">
    <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
</div>
    <h1>社員表示</h1>
    <table class="table">
        <tr>
            <th>社員番号</th>
            <th>社員名</th>
            <th>部署ID</th>
            <th>社員コード</th>
        </tr>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->u_id }}</td>
            <td>{{ $record->u_name }}</td>
            <td>{{ $record->d_id }}</td>
            <td>{{ $record->user_code }}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('user_management.index') }}" class="btn btn-secondary">社員管理画面に戻る</a>
@endsection