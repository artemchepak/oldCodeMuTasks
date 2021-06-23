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
    <input type="text" name="name" placeholder="Введите свое имя"><br>
    <input type="text" name="age" placeholder="Введите свой возраст"><br>
    <textarea name="message"></textarea><br>
    <input type="submit" name="submit" value="Отправить">
</form>

</body>
</html>


<?php

if (isset($_REQUEST['submit'])) {
    $name = strip_tags($_REQUEST['name']);
    $age = strip_tags($_REQUEST['age']);
    $message = strip_tags($_REQUEST['message']);
    echo "Привет, $name, $age <br> твое сообщение: $message";
}