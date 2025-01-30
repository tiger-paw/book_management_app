@extends('layouts.app')
@section('title', '書籍管理')
@section('content')
    <br>
    <div class="d-flex justify-content-end">
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
    </div>
    <br>
    <h1>以下の書籍を削除しました</h1>
    <table class="table text-center table-striped table-secondary">
        <tr>
            <th>書籍名</th>
            <th>著者名</th>
        </tr>
        <tr>
            <td>{{ $b_title }}</td>
            <td>{{ $b_author }}</td>
        </tr>
    </table>
    <br>
    <a href="{{ route('book_management.index') }}" class="btn btn-primary">書籍管理画面に戻る</a>
@endsection
