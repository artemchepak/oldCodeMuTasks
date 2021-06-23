<?php

function getDigitsSum($number){
    return array_sum(str_split($number));
}

echo getDigitsSum(123);