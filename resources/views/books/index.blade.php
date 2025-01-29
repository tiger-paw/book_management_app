@extends('layouts.app')
@section('title', '書籍一覧')
@section('content')
    <h1>書籍一覧</h1>
    @if($books->isEmpty()) <!-- 書籍がなければ -->
        <p>書籍はありません。</p>
    @else
        <ul>
            @foreach($books as $book)
                <li>
                    <!-- 書籍名をクリックすると詳細ページに遷移 -->
                    <p>書籍名：<a href="{{ route('books.show', ['id' => $book->b_id]) }}">{{ $book->title }}</a> - 著者名：{{ $book->author }}</p>
                </li>
            @endforeach
        </ul>
        <!-- ページネーションリンク -->
        <div class="d-flex justify-content-center">
            {{ $books->links('pagination::simple-bootstrap-5') }}
        </div>
    @endif
    <!-- 戻るリンク -->
    <a href="{{ route('index') }}">メニューに戻る</a>
@endsection