<?php

$arr = ['10', '20', '30', '50', '235', '3000'];

foreach ($arr as $item) {
    if (intval($item[0]) === 1 || intval($item[0]) === 2 || intval($item[0]) === 5) {
        echo $item . '<br>';
    }
}