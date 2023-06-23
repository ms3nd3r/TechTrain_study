<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
</head>
<body>
    <table>
        <tr>
            <th>タイトル</th>
            <th>画像</th>
        </tr>
    @foreach ($movies as $movie)
        <tr>
            <th>{{ $movie->title }}</th>
            <th>{{ $movie->image_url }}</th>
        </tr>        
    @endforeach
    </table>
</body>
</html>