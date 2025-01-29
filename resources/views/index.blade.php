@extends('layouts.app')
@section('title', 'menu')
@section('content')

    <h1>Menu</h1>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">書籍一覧</a>
        <a href="" class="btn btn-secondary">書籍検索</a>
        <a href="{{ route('user_management.index') }}" class="btn btn-secondary">社員管理</a>
        <a href="/book_management_index" class="btn btn-secondary">書籍管理</a>
        
@endsection