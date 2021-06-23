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
    <input type="text" name="year" placeholder="Введите год">
    <input type="submit">
</form>

</body>
</html>

<?php
if (isset($_REQUEST['year'])) {
    $year = trim(strip_tags($_REQUEST['year']));
    if (strlen($year) == 4) {
        if (date('L', mktime(0, 0, 0, 1, 1, $year))) {
            echo 'Высокосный';
        } else {
            echo 'Не высокосный';
        }
    } else {
        echo 'Введите год в формате "2021"';
    }
}
