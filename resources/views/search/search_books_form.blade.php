<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>書籍検索</title>
</head>
<body>
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
