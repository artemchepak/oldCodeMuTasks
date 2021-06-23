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
    <p>Сколько Вам лет?</p>
    <p>менее 20<input type="radio" name="php" value="1"></p>
    <p>20-25<input type="radio" name="php" value="2"></p>
    <p>26-30<input type="radio" name="php" value="3"></p>
    <p>более 30<input type="radio" name="php" value="4"></p>
    <input type="submit">
</form>

</body>
</html>

<?php

if (isset($_REQUEST['php'])) {
    $age = $_REQUEST['php'];
    switch ($age) {
        case 1:
            echo "Вам менее 20 лет";
            break;
        case 2:
            echo "Вам от 20 до 25 лет";
            break;
        case 3:
            echo "Вам от 25 до 30 лет";
            break;
        case 4:
            echo "Вам более 30 лет";
            break;
    }
}