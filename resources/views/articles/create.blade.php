<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>論文詳細</h1>
    
    <h3>タイトル：{{ $article->title }}</h3>
    <p>{{ $article->body }}</p>
    
    <button onclick="location.href='/articles'">一覧へ戻る</button>


    </body>
</html>
