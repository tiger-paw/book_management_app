
@extends('layouts.app')
@section('title', '書籍管理')
@section('content')
<h1>書籍管理画面</h1>
    <p>行いたい処理を選択してください</p>
    <nav aria-label="breadcrumb">
    <ul class="breadcrumb">
        <a href="/db/book_management_create" class="btn btn-outline-primary btn-lg mx-2">書籍登録</a>
        <a href="/db/book_management_erase" class="btn btn-outline-primary btn-lg mx-2">書籍削除</a>
    </ul>
    <div class="d-flex justify-content-end">
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
    </div>
@endsection