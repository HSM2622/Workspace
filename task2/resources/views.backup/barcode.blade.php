<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/upload" id="frm" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="uploadFile"/>
    <input type="submit" value="upload">
</form>
<form action="/select" id="select" method="GET">
    <label for="selectQuery">찾으려는 ID 입력해보세요</label>
    <input type="text" name="id">
    <input type="submit" value="확인">
</form>
<h>결과: {{$result}}</h>
<form action="/save" id="save" method="GET">
    <label for="insertQuery">history db에 저장하려는 내용을 입력해보세요</label>
    <input type="text" name="content">
    <input type="submit" value="확인">
</form>
</body>
</html>