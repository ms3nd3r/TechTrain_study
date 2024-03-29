<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規登録画面</title>
</head>
<body>
    @if ($errors->any())  
        <ul>  
            @foreach ($errors->all() as $error)  
                <li>{{ $error }}</li>  
            @endforeach  
        </ul>  
    @endif 
    <form method="POST" action="/admin/movies/store">
        @csrf
        <table>
            <tr><th>映画タイトル</th><td><input type="text" name="title"></td></tr>
			<tr><th>画像URL</th><td><input type="text" name="image_url"></td></tr>
			<tr><th>公開年</th><td><input type="text" name="published_year"></td></tr>
			<tr>
				<th>公開中かどうか</th>
				<td>
                    <input type="checkbox" name="is_showing" value="1">公開中<br>
                </td>
			</tr>
			<tr><th>概要</th><td><textarea name="description"></textarea></td></tr>
            <tr><td><input type="submit" value="登録"></td><td><button type="reset" value="リセット">リセット</button></td></tr>
        </table>
    </form>
</body>
</html>