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
    <input type="text" name="name" placeholder="Введите имя">
    <input type="checkbox" name="checkbox" value="1">
    <input type="submit" name="submit" value="Нажмите кнопку">
</form>

</body>
</html>

<?php

if (isset($_REQUEST['submit'])) {
    $name = strip_tags($_REQUEST['name']);
    $checkbox = strip_tags($_REQUEST['checkbox']);
    echo $checkbox == 1 ? "Привет, $name" : "Пока, $name" ;
}