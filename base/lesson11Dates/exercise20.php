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
    <input type="text" name="year" placeholder="Введите год"><br>
    <input type="submit">
</form>

</body>
</html>

<?php

if (isset($_REQUEST['year'])) {
    $year = $_REQUEST['year'];
    for ($i = 1; $i <= 12; $i++) {
        if (date('w', mktime(0, 0, 0, $i, 13, $year)) == 5) {
            $friday13[] = date('d-m-Y', mktime(0, 0, 0, $i, 13, $year));
        }
    }
    var_dump($friday13);
}


