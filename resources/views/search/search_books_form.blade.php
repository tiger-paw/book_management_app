@extends('layouts.app')
@section('title', '書籍検索')
@section('content')
    <h1>書籍検索</h1>
    <p>キーワード（書籍名・著者名）</p>
    <form action="/search_books_result" method="get">
        @csrf
        <div>
            <input type="text" name="book_keyword" required>
        </div>
        <div>
            <input type="submit" value="検索">
        </div>
    </form>
</body>
</html>
@endsection