<?php

$str = '<i>html</i>, <b>php</b>, <strong>js</strong>';

echo strip_tags($str, '<b><i>');