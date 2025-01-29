@extends('layouts.app')
@section('title', 'menu')
@section('content')

    @if($isAdmin)
        <a href="{{ route('books.index') }}" class="btn btn-secondary">書籍一覧</a>
        <a href="/search_books_form" class="btn btn-secondary">書籍検索</a>
        <a href="{{ route('user_management.index') }}" class="btn btn-secondary">社員管理</a>
        <a href="{{ route('book_management.index') }}" class="btn btn-secondary">書籍管理</a>
    @else
        <a href="{{ route('books.index') }}" class="btn btn-secondary">書籍一覧</a>
        <a href="/search_books_form" class="btn btn-secondary">書籍検索</a>
    @endif

@endsection
