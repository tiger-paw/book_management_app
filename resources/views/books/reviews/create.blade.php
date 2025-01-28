<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規投稿フォーム</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h1>レビューの新規投稿フォーム</h1>
    <form action="{{ route('reviews.create.check', $bookId) }}" method="post">
        @csrf
        <br>
        <label for="rating" class="form-label">評価：以下の選択肢から一つ選択してください　</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rating" id="rating1" value="1" required>
            <label class="form-check-label" for="rating1">1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rating" id="rating2" value="2" required>
            <label class="form-check-label" for="rating2">2</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rating" id="rating3" value="3" required>
            <label class="form-check-label" for="rating3">3</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rating" id="rating4" value="4" required>
            <label class="form-check-label" for="rating4">4</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rating" id="rating5" value="5" required>
            <label class="form-check-label" for="rating5">5</label>
        </div>
        <br>
        <label for="comment" class="form-label">コメント</label>
        <textarea class="form-control" name="comment" id="comment" required></textarea>
        <br>
        <input type="submit" value="確認" class="btn btn-primary">
    </form>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>