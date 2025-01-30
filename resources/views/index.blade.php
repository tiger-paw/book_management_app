@extends('layouts.app')
@section('title', 'menu')
@section('content')
    {{-- Menuタイトル部分 --}}
    <div class="text-center mb-4">
        <h1>Menu</h1>
    </div>

    {{-- リンクメニュー部分 --}}
    <div class="d-flex justify-content-center">
        @if ($isAdmin)
            <a href="{{ route('books.index') }}" class="btn btn-outline-primary btn-lg mx-2">書籍一覧</a>
            <a href="/search_books_form" class="btn btn-outline-primary btn-lg mx-2">書籍検索</a>
            <a href="{{ route('user_management.index') }}" class="btn btn-outline-primary btn-lg mx-2">社員管理</a>
            <a href="{{ route('book_management.index') }}" class="btn btn-outline-primary btn-lg mx-2">書籍管理</a>
        @else
            <a href="{{ route('books.index') }}" class="btn btn-outline-primary mx-2">書籍一覧</a>
            <a href="/search_books_form" class="btn btn-outline-primary mx-2">書籍検索</a>
        @endif
    </div>
@endsection
