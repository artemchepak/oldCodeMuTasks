<?php

$str = 'var_test_text';

$arrToUpperCase = array_map('ucfirst', explode('_', $str));

$newStr = lcfirst(implode('', $arrToUpperCase));

echo $newStr;