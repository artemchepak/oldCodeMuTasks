<?php
    if(!isset($_REQUEST['age'])){
?>

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
            <input type="text" name="age" placeholder="Введите свой возраст">
            <input type="submit" value="Отправить">
        </form>

        </body>
        </html>

<?php
    }
?>

<?php
if (isset($_REQUEST['age'])) {
    $age = strip_tags($_REQUEST['age']);
    echo 'Ваш возраст: '.$age;
}
?>