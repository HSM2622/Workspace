<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/store" id="store" method="POST">
{{ csrf_field() }}
    <label for="title">제목</label>
    <input type="text" name="title">
    <label for="body">내용</label>
    <input type="text" name="body">
    <input type="submit" value="확인">
</form>
</body>
</html>