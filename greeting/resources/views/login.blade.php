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
<form action="/login" method="post">
    @csrf
    <h1>Đăng nhập</h1>
    <p>
    <input type="text" placeholder="Tên đăng nhập" name="userName">
    </p>
    <p>
    <input type="text" placeholder="Mật khẩu" name="password">
    </p>
    <button>Login</button>
</form>
</body>
</html>
