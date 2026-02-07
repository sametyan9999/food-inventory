<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>食材管理アプリ</title>
</head>
<body>
<p><a href="{{ route('items.create') }}">＋ 食材を追加</a></p>
<h1>食材一覧</h1>

<ul>
@foreach($items as $item)
    <li>
        {{ $item->name }}
        / 在庫: {{ $item->in_stock ? 'あり' : 'なし' }}
        / 期限: {{ $item->expires_at ? $item->expires_at->format('Y-m-d') : 'なし' }}
    </li>
@endforeach
</ul>
</body>
</html>