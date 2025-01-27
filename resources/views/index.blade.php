<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メニュー画面</title>
</head>
<body>
    <h1>メニュー</h1>
    <ul>
        @foreach ($menuItems as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>
</html>