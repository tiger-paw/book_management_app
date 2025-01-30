@extends('layouts.app')
@section('title', '書籍管理')
@section('content')
    <div class="d-flex justify-content-end">
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
    </div>
    <br>
    <h1>書籍の新規登録</h1>
    <br>
    <form action="/db/book_management_store" method="post">
        @csrf
        <div class="mb-3">
            <label for="book_name" ckass="form-label">書籍名：</label>
            <input type="text" class="orm-control" name="book_name" id="book_name" required>
        </div>
        <div class="mb-3">
            <label for="author_name" ckass="form-label">著者名：</label>
            <input type="text" class="orm-control" name="author_name" id="author_name" required>
        </div>
        <div class="mb-3">
            <label for="detail_item" ckass="form-label">説明(詳細)</label>
            <textarea class="form-control" name="detail_item" id="detail_item" required></textarea>
        </div>
        <br>
        <p>上記の書籍を登録しますか?</p>
        <input type="submit" value="登録" class="btn btn-primary">
        <a href="{{ route('book_management.index') }}" class="btn btn-secondary">戻る</a>
    </form>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection
