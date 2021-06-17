<?php

$str = '123456';

echo (intval($str[0]) + intval($str[1]) + intval($str[2])) === (intval($str[3]) + intval($str[4]) + intval($str[5])) ? 'да' : 'нет';