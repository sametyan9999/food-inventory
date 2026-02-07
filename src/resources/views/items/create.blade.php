<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>食材追加</title>
</head>
<body>
<h1>食材を追加</h1>

@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif

<form method="POST" action="{{ route('items.store') }}">
  @csrf

  <div>
    <label>食材名</label><br>
    <input type="text" name="name" value="{{ old('name') }}" required>
  </div>

  <div>
    <label>在庫</label><br>
    <select name="in_stock" required>
      <option value="1" {{ old('in_stock', '1') == '1' ? 'selected' : '' }}>あり</option>
      <option value="0" {{ old('in_stock') == '0' ? 'selected' : '' }}>なし</option>
    </select>
  </div>

  <div>
    <label>賞味期限</label><br>
    <input type="date" name="expires_at" value="{{ old('expires_at') }}">
  </div>

  <div>
    <label>メモ</label><br>
    <textarea name="note">{{ old('note') }}</textarea>
  </div>

  <button type="submit">登録</button>
</form>

<p><a href="{{ route('items.index') }}">一覧に戻る</a></p>
</body>
</html>