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
    <input type="text" name="name" placeholder="Введите свое имя" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>"><br>
    <textarea name="message">
        <?php if (isset($_GET['message'])) echo $_GET['message']; ?>
    </textarea><br>
    <input type="submit" name="submit" value="Отправить">
</form>

</body>
</html>


<?php

if (!empty($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    $message = $_REQUEST['message'];
}