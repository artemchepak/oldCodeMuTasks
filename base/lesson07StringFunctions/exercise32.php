<?php

$str = '1234567890';

$result = implode('-', str_split($str, 2));

echo $result;