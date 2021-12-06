<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form  method="post" action="{{route('car.store')}}">
    @csrf
    @method('POST')
    <input name="name" type="text">
    <input name="brand" type="text">
    <input name="price" type="number">
    <input type="submit" value="Сохранить">

</form>
</body>
</html>
