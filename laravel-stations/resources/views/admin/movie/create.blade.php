<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="store.blade.php" method="POST">
        <p>映画タイトル:<input type="text" name="title" id=""></p>
        <p>画像URL:<input type="text" name="image_url" id=""></p>
        <p>公開年:<input type="text" name="published_year" id=""></p>
        <p>
            公開中かどうか:<input type="checkbox" name="is_showing" id="">
        </p>
        <p>概要:<input type="text" name="description" id=""></p>
    </form>
</body>
</html>