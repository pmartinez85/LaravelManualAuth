<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
Login form here!
<form>
    {{csrf_field()}}
    Nom: <input type="text" name="nom" value="" />
    Password. <input type="password" name="password" />


    <input type="submit" value="Enviar" />
    </form>
</body>
</html>