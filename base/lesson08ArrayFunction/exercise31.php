<?php

$arr = range('a', 'z');

shuffle($arr);

echo substr(implode('', $arr), 0, 6);