<?php

function isNumberInRange($number){
    return $number > 0 && $number < 10 ? true : false;
}

echo isNumberInRange(5);