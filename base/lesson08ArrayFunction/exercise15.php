<?php

$arr = [1, 2, 3, 4, 5];

array_splice($arr, 1, 0, [2, 3, 4]);

var_dump($arr);