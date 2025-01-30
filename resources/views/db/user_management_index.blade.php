@extends('layouts.app')
@section('title', '社員管理')
@section('content')
<div class="d-flex justify-content-end">
    <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
</div>
<div>
    <h1>社員表示</h1>
    <table class="table text-center table-striped table-secondary">
        <tr>
            <th>社員番号</th>
            <th>社員名</th>
            <th>部署ID</th>
            <th>社員コード</th>
        </tr>
        @foreach ($records as $record)
            <tr>
                <td>{{ $record->u_id }}</td>
                <td>{{ $record->u_name }}</td>
                <td>{{ $record->d_id }}</td>
                <td>{{ $record->user_code }}</td>
            </tr>
        @endforeach
    </table>
    <br>
    {{ $records->links() }}
    <a href="{{ route('user_management.index') }}" class="btn btn-primary">社員管理画面に戻る</a>
</div>
@endsection
