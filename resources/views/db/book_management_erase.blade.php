@extends('layouts.app')
@section('title', '書籍管理')
@section('content')
    <div class="d-flex justify-content-end">
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
    </div>
    <br>
    @if (isset($record))
        <h1>削除する書籍の確認</h1>
        <br>
        <p>以下の書籍を削除します</p>
        <form action="/db/book_management_delete" method="post">
            @csrf
            <input type="hidden" name="b_id" value="{{ $record->b_id }}" readonly>
            <p>書籍番号：{{ $record->b_id }}
            <p>
            <p>書籍名：<input type="text" name="b_title" value="{{ $record->title }}" readonly></p>
            <p>著者名：<input type="text" name="b_author" value="{{ $record->author }}" readonly></p>
            <input type="submit" value="削除" class="btn btn-danger">

            <a href="/db/book_management_erase" class="btn btn-secondary">戻る</a>
        </form>
    @else
        <h1>書籍の削除</h1>
        <p>書籍一覧から削除したい書籍の番号を選択してください</p>
        <ul class="breadcrumb">
            <a href="/db/book_management_index" class="btn btn-secondary mx-2">書籍一覧表示</a>
        </ul>
        <br>
        <form action="/db/book_management_erase" method="post">
            @csrf
            書籍番号：<input type="number" name="b_id" class="orm-control" required>
            <input type="submit" value="確認" class="btn btn-primary">
        </form>
        <br>
        <a href="{{ route('book_management.index') }}" class="btn btn-secondary">戻る</a>
    @endif
@endsection
