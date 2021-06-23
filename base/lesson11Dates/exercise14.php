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
    <input type="text" name="date" placeholder="Введите дату в формате 2025-12-31">
    <input type="submit">
</form>

</body>
</html>

<?php
if (isset($_REQUEST['date'])) {
    $date = explode('-', trim(strip_tags($_REQUEST['date'])));
    $sec = mktime(0, 0, 0, $date[1], $date[2], $date[0]);
    $month = [
        1 => 'jan',
        'feb',
        'mar',
        'apr',
        'may',
        'jun',
        'jul',
        'aug',
        'sep',
        'oct',
        'nov',
        'dec'];
    echo $month[date('n', $sec)];
}
