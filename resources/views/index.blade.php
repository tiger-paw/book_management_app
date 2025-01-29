@extends('layouts.app')
@section('title', 'menu')
@section('content')

    <h1>メニュー</h1>
    <ul>
        <li><a href="{{ route('books.index') }}">書籍一覧</a></li>
        <li>書籍検索</li>
        <li><a href="{{ route('user_management.index') }}">社員管理</a></li>
        <li>書籍管理</li>
    </ul>
@endsection