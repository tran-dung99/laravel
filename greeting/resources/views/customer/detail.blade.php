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
<h1>{{$customer->name}}</h1>
<p>email: {{$customer->email}}</p>
<p>address: {{$customer->address}}</p>
<a href="{{route("customers")}}">Quay lại trang chủ</a>
</body>
</html>
