<?php

$date = '2013-12-31';

$arr = explode('-', $date);

$date = implode('.', array_reverse($arr));

echo $date;