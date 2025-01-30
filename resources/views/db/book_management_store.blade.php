<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍の新規登録</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<body>
    <h1>以下の書籍を登録しました</h1>
    <table class="table">
        <tr><th>書籍名</th><th>著者名</th><th>説明</th></tr>
        <tr>
            <td>{{$book_name}}</td>
            <td>{{$author_name}}</td>
            <td>{{$detail_item}}</td>
        </tr>
    </table>
    <br>
    <a href="/">書籍登録メニューに戻る</a>
</body>
</html>