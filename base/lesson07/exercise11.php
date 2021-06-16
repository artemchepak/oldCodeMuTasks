<?php

$str = 'http://something.com';

echo substr($str, 0, 7) === 'http://' ? 'да' : 'нет';