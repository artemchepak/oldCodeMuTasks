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
    <input type="text" name="date" placeholder="Введите дату в формате дд.мм.гггг">
    <input type="submit">
</form>

</body>
</html>

<?php
if (isset($_REQUEST['date'])) {
    $date = strip_tags(trim($_REQUEST['date']));
    $arr = explode('.', $date);
    $sec = mktime(0, 0, 0, $arr[1], $arr[0], $arr[2]);
    $week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    echo $week[date('w', $sec)];
}
