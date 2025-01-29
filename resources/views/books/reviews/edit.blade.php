<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>レビュー編集フォーム</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h1>レビュー編集</h1>
    <form action="{{ route('reviews.update.check', ['bookId' => $book->b_id, 'reviewId' => $review->r_id]) }}" method="POST">
    @csrf
        <br>
        <label for="rating" class="form-label">評価：以下の選択肢から一つ選択してください　</label>
        @for ($i = 1; $i <= 5; $i++)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="rating{{ $i }}" value="{{ $i }}" required {{ $i == $review->rating ? 'checked' : '' }}>
                <label class="form-check-label" for="rating{{ $i }}">{{ $i }}</label>
            </div>
        @endfor
        <br>
        <label for="comment" class="form-label">コメント</label>
        <textarea class="form-control" name="comment" required>{{ $review->comment }}</textarea>
        <br>
        <input type="submit" value="確認" class="btn btn-primary">
    </form>
    <a href="{{ route('books.show', $review->b_id) }}">戻る</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>