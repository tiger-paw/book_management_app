@extends('layouts.app')
@section('title', '書籍管理')
@section('content')
    <div class="d-flex justify-content-end">
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
    </div>
    <br>
    <h1>以下の書籍を登録しました</h1>
    <table class="table text-center table-striped table-secondary">
        <tr><th>書籍名</th><th>著者名</th><th>出版日</th><th>ISBN</th></tr>
        <tr>
            <td>{{$book_name}}</td>
            <td>{{$author_name}}</td>
            <td>{{$published_date}}</td>
            <td>{{$isbn}}</td>
        </tr>
        <br><br><br>
    </table>
    <br>
    <table class="table text-center table-striped table-secondary">
        <tr>
            <th><strong>説明 (詳細)</strong></th>
        </tr>
        <tr>
            <td><div style="word-wrap: break-word;">{{$detail_item}}</div></td>
        </tr>
    </table>
    <br>
    <a href="{{ route('book_management.index') }}" class="btn btn-primary">書籍管理画面に戻る</a>
@endsection
