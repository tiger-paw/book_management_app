<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍の削除</title>
</head>
<body>
    <h1>書籍の削除</h1>
    @if(isset($record))
        <form action="/db/book_management_delete" method="post">

        </form>
    @else
        
    @endif
</body>
</html>