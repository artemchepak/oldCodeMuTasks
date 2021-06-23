<?php

function cut($string, $length = 10){
    return substr($string, 0, $length);
}

echo cut('may be by following functions will be easier to extract the needed sub parts from a string');