<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8];

while (count($arr) > 0){
    echo array_shift($arr);
    echo array_pop($arr);
}