@extends('layouts.app')
@section('title', '書籍検索')
@section('content')
    <div class="d-flex justify-content-end">
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
    </div>
    <br>
    <h1>書籍検索</h1>
    <p>キーワード（書籍名・著者名）</p>
    <form action="/search_books_result" method="get">
        @csrf
        <div>
            <input type="text" name="book_keyword" required>
        </div>
        <div>
            <br>
            <input type="submit" class="btn btn-primary" value="検索">
        </div>
    </form>
</body>
</html>
@endsection