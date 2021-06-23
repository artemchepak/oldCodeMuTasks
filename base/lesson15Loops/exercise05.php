<?php

$str ='';

for ($i = 1; $i <=9; $i++){
    $newStr = '';

    for ($n = 1; $n <= $i; $n++){
        $newStr .= $i;
    }

    $str = $newStr;
    echo $str . '<br>';
}
