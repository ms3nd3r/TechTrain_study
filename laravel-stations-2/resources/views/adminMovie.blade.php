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
        @if (session('flash_message'))
            <div class="flash_message">
                {{ session('flash_message') }}
            </div>
        @endif
        <tr>
            <th>ID</th>
            <th>映画タイトル</th>
            <th>画像URL</th>
            <th>公開年</th>
            <th>上映中かどうか</th>
            <th>概要</th>
            <th>登録日時</th>
            <th>更新日時</th>
        </tr>
    @foreach ($movies as $movie)
        <tr>
            <th>{{ $movie->id }}</th>
            <th>{{ $movie->title }}</th>
            <th>{{ $movie->image_url }}</th>
            <th>{{ $movie->published_year }}</th>
            <th>
                @if ( $movie->is_showing == 1)
                     上映中 
                @else
                     上映予定 
                @endif
            </th>
            <th>{{ $movie->description}}</th>
            <th>{{ $movie->created_at }}</th>
            <th>{{ $movie->updated_at }}</th>
        </tr>        
    @endforeach
    </table>
</body>
</html>