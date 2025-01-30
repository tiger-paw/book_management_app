@extends('layouts.app')
@section('title', '社員管理')
@section('content')
    <div class="d-flex justify-content-end">
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
    </div>
    <br>
    <h1>以下の書籍を登録しました</h1>
    <table class="table">
        <tr><th>書籍名</th><th>著者名</th><th>説明</th></tr>
        <tr>
            <td>{{$book_name}}</td>
            <td>{{$author_name}}</td>
            <td>{{$detail_item}}</td>
        </tr>
    </table>
    <br>
    <a href="{{ route('book_management.index') }}" class="btn btn-primary">書籍管理画面に戻る</a>
@endsection