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

<form action="" method="get">
    <input type="text" name="login" placeholder="Введите логин"><br>
    <input type="password" name="password" placeholder="Введите пароль"><br>
    <input type="submit" name="submit" value="Отправить">
</form>

</body>
</html>

<?php
if (isset($_REQUEST['submit'])) {
    $login = 'user';
    $pass = 'qwe123';
    $formLogin = trim($_REQUEST['login']);
    $formPass = trim($_REQUEST['password']);
    if ($login == $formLogin and $pass == $formPass) {
        echo 'Доступ разрешен!';
    } else {
        echo 'Доступ запрещен!';
    }
}