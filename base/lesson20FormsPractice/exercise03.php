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
    <p>Вы знаете PHP?</p>
    <p>да<input type="radio" name="php" value="1" checked></p>
    <p>нет<input type="radio" name="php" value="0"></p>
    <input type="submit">
</form>

</body>
</html>

<?php

if (isset($_REQUEST['php'])) {
    echo $_REQUEST['php'] == 0 ? 'Вы не знаете PHP' : 'Вы знаете PHP' ;
}