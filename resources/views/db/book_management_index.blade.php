
@extends('layouts.app')
@section('title', '書籍管理')
@section('content')
<br>
<div class="d-flex justify-content-end">
    <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
</div>
    <h1>書籍表示</h1>
    <a href="/db/book_management_erase" class="btn btn-primary">戻る</a>
    <br>
    <table class="table">
        <tr>
            <th>書籍番号</th>
            <th>書籍名</th>
            <th>著者名</th>
        </tr>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->b_id }}</td>
            <td>{{ $record->title }}</td>
            <td>{{ $record->author }}</td>
        </tr>
        @endforeach
    </table>
    <a href="/db/book_management_erase" class="btn btn-primary">戻る</a>
@endsection