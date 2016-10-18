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
<div class="row">
    <div class="col-xs-2">
        <input type="text" class="form-control" placeholder=".col-xs-2">
    </div>
    <div class="col-xs-3">
        <input type="text" class="form-control" placeholder=".col-xs-3">
    </div>
    <div class="col-xs-4">
        <input type="text" class="form-control" placeholder=".col-xs-4">
    </div>
</div>
    </form>
</body>
</html>