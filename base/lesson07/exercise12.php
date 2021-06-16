<?php

$str = 'http://something.com';

echo substr($str, 0, 7) === 'http://' || substr($str, 0, 8) === 'https://' ? 'да' : 'нет';