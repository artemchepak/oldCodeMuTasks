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
    <input type="text" name="date" placeholder="Укажите дату в формате 2025-12-31T12:13:59"><br>
    <input type="submit">
</form>

</body>
</html>

<?php

if (isset($_REQUEST['date'])) {
    echo date('H:i:s d.m.Y', strtotime($_REQUEST['date']));
}