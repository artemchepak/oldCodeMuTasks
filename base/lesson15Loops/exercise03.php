<?php

$str ='';

for ($i = 1; $i <=9; $i++){
    if ($str === '') {
        $str .= '-' . $i . '-';
    } else {
        $str .= $i . '-';
    }
}

echo $str;