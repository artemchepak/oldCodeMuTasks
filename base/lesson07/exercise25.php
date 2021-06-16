<?php

$str = 'aaa aaa aaa .. aaa aaa';

$doubleDotIndex = strpos($str, '..');

echo empty($doubleDotIndex) ? 'нет' : 'есть';