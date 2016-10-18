<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="{{csrf_token()}}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Login form here!
<form action="/login" method="POST">
    {{csrf_field()}}
    Usuari : <input type="text" name="user">
    Password : <input type="text" name="pass">
        <input type="submit" value="Accepta">


</form>
</body>
</html>