@extends('layouts.app')
@section('title', 'menu')
@section('content')

    @if($isAdmin)
        <li><a href="{{ route('books.index') }}" class="btn btn-secondary">書籍一覧</a></li>
        <li><a href="/search_books_form" class="btn btn-secondary">書籍検索</a></li>
        <li><a href="{{ route('user_management.index') }}" class="btn btn-secondary">社員管理</a></li>
        <li><a href="{{ route('book_management.index') }}" class="btn btn-secondary">書籍管理</a></li>
    @else
        <li><a href="{{ route('books.index') }}" class="btn btn-secondary">書籍一覧</a></li>
        <li><a href="/search_books_form" class="btn btn-secondary">書籍検索</a></li>
    @endif
    </ul>

@endsection