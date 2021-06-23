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

<form action="" method="post">
    <input type="text" name="firstDate" placeholder="Введите первую дату"><br>
    <input type="text" name="secondDate" placeholder="Введите вторую дату"><br>
    <input type="submit" value="Сравнить даты">
</form>

</body>
</html>

<?php

if (isset($_REQUEST['firstDate']) and isset($_REQUEST['secondDate'])) {
    $firstDate = explode('-', strip_tags(trim($_REQUEST['firstDate'])));
    $secondDate = explode('-', strip_tags(trim($_REQUEST['secondDate'])));
    $firstDateSec = mktime(0, 0, 0, $firstDate[1], $firstDate[2], $firstDate[0]);
    $secondDateSec = mktime(0, 0, 0, $secondDate[1], $secondDate[2], $secondDate[0]);
    if ($firstDateSec > $secondDateSec) {
        echo date('Y-m-d', $firstDateSec);
    } else {
        echo date('Y-m-d', $secondDateSec);
    }
}