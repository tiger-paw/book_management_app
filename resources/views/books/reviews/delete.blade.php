@extends('layouts.app')
@section('title', 'レビューの削除完了')
@section('content')

    <h1>レビュー削除完了</h1>
    <p>レビューの削除が完了しました。</p>
    <a href="{{ route('books.show', $bookId) }}">書籍詳細へ戻る</a>

@endsection