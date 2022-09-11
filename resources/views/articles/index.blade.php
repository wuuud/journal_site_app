<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>一覧</title>
</head>

<body>
    <h1>論文一覧</h1>
    
    @foreach ($articles as $article)
        <p>
            {{-- URL article1等で出力される --}}
            <a href="/articles/{{ $article->id }}">
                {{ $article->title }}
            </a>
        </p>
    @endforeach
    <button onclick="location.href='/articles/create'">
        新規論文投稿
    </button>
</body>

</html>
