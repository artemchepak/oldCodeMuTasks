<?php

$str = 'something.jpg';

echo substr($str, -4) === '.png' || substr($str, -4) === '.jpg'? 'да' : 'нет';