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

<form action="" method="GET">
    <p>html<input type="checkbox" name="lang[]" value="html"></p>
    <p>css<input type="checkbox" name="lang[]" value="css"></p>
    <p>php<input type="checkbox" name="lang[]" value="php"></p>
    <p>javascript<input type="checkbox" name="lang[]" value="javascript"></p>
    <input type="submit">
</form>

</body>
</html>

<?php

	if(isset($_REQUEST['lang']))
	{
		echo 'Вы знаете: ' . implode(',', $_REQUEST['lang']);
	}