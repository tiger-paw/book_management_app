<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍検索結果</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            width: 800px;
            margin: 10px auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>検索結果 - {{ $count }}件</h1>
    <a href="/search_books_form">検索ページに戻る</a>
    <p>キーワード[{{ $book_keyword }}]</p>
    <table class="table">
        <tr>
            <th>書籍</th>
            <th>著者名</th>
            {{-- <th>出版日</th> --}}
        </tr>
        @foreach($records as $record)
        <tr>
            <td><a href="{{ route('books.show', ['id' => $record->b_id]) }}">{{ $record->title }}</a></td>
            <td>{{ $record->author }}</td>
            {{-- <td>{{ $record->published_date }}</td> --}}
        </tr>
        @endforeach
    </table>
    <br>
    <hr>
    <!-- {{ $records->links() }} -->
    {{ $records->appends(Request::only('post_keyword'))->links() }}

    <a href="/">Topページに戻る</a>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>