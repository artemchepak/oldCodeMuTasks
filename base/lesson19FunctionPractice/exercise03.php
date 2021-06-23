<?php

function func($number)
{
    $result = array_sum(str_split($number));
    if ($result <= 9){
        return $result;
    } else {
        echo $result . '<br>';
        return func($result);
    }
}

echo func(1235874118489449849856549879785649874);