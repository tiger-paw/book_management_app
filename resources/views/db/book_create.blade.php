<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍の新規登録</title>
    <<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">>
    <style>body {width:800px; margin: 0 auto}</style>
</head>
<body>
    <h1>書籍の新規登録</h1>
    <form action="/db/book_store" method="post">
        @csrf 
        <div class="mb-3">
            <label for="book_name" ckass="form-label">書籍名</label>
            <input type="text" class="orm-control" name="book_name" id="book_name" required>
        </div>
        <div class="mb-3">
            <label for="author_name" ckass="form-label">著者名</label>
            <input type="text" class="orm-control" name="author_name" id="author_name" required>
        </div>
        <div class="mb-3">
            <label for="detail_item" ckass="form-label">説明(詳細)</label>
            <textarea class="form-control" name="detail_item" id="detail_item" required></textarea>
        </div>
        <input type="submit" value="確認" class="btn btn-primary">
    </form>  
    
    </body>
</html>