<?php

function getDigitsSum($number){
    return array_sum(str_split($number));
}

for ($i = 1; $i <= 2021; $i++){
    if (getDigitsSum($i) === 13){
        echo $i . '<br>';
    }
}