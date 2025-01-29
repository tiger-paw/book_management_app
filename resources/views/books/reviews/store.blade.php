@extends('layouts.app')
@section('title', 'レビューの新規投稿完了')
@section('content')

    <h1>レビューの新規投稿完了</h1>
    <p>レビューの投稿が完了しました。</p>
    <a href="{{ route('books.show', $bookId) }}" class="btn btn-primary">書籍詳細へ戻る</a>
@endsection