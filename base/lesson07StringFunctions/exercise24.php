<?php

$str = 'aaa aaa aaa aaa aaa';

echo strpos($str, ' ', strpos($str, ' ') + 1);