<?php

$arr = [150, 203, 56, 23, 94, 236];

foreach ($arr as $item) {
    if (strpos($item, '3')){
        echo $item . '<br>';
    }
}