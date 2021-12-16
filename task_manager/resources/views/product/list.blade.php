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
<a href="{{route("product.create")}}">Create</a>
<table border="1px solid green">
    <thead>
    <tr>
    <th>name</th>
    <th>origin</th>
    <th>price</th>
    <th>function</th>
    </tr>
    </thead>
    <tbody>
    <?php if(!empty($users)){
    foreach ($users as $user): ?>
    <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->origin}}</td>
    <td>{{$user->price}}</td>
    <td>{{$user->function}}</td>
        <td><a href="{{route("product.delete",$user->id)}}">Delete</a></td>
        <td><a href="{{route("product.detail",$user->id)}}">Detail</a></td>
    </tr>
    <?php endforeach;} ?>
    </tbody>
</table>
</body>
</html>
