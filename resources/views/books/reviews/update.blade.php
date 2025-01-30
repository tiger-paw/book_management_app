@extends('layouts.app')
@section('title', 'レビューの編集完了')
@section('content')
    <!-- 戻るリンク -->
    <div class="d-flex justify-content-end gap-2">
        <a href="{{ route('books.index') }}" class="btn btn-secondary">書籍一覧に戻る</a>
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
    </div>
    <br>
    <h1>レビュー更新完了</h1>
    <p>レビューの更新が完了しました。</p>
    <a href="{{ route('books.show', $review->b_id) }}" class="btn btn-primary">書籍詳細へ戻る</a>
@endsection