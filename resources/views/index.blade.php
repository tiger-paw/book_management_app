@extends('layouts.app')
@section('title', 'menu')
@section('content')
{{-- flexboxで中央揃えにしているため、コンテンツ全体をdivタグで囲んでください --}}
<div>
    {{-- Menuタイトル部分 --}}
    <div class="text-center mb-4">
        <h1>Menu</h1>
    </div>

    {{-- リンクメニュー部分 --}}
    <div class="d-flex justify-content-center">
        @if ($isAdmin)
            <a href="{{ route('books.index') }}" class="btn btn-secondary mx-2">書籍一覧</a>
            <a href="/search_books_form" class="btn btn-secondary mx-2">書籍検索</a>
            <a href="{{ route('user_management.index') }}" class="btn btn-secondary mx-2">社員管理</a>
            <a href="{{ route('book_management.index') }}" class="btn btn-secondary mx-2">書籍管理</a>
        @else
            <a href="{{ route('books.index') }}" class="btn btn-secondary mx-2">書籍一覧</a>
            <a href="/search_books_form" class="btn btn-secondary mx-2">書籍検索</a>
        @endif
    </div>
</div>

@endsection
