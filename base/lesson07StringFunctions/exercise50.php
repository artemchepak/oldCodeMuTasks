<?php

$len = 100;
$str;

for ($i = 1; $i <= $len; $i++){
    $str .= chr(rand(97, 122));
}

echo $str;