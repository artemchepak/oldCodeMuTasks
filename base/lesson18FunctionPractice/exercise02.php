<?php

function func($amount, $firstNoun, $secondNoun, $thirdNoun){
    if ($amount === 1) {
        return $amount . ' ' . $firstNoun;
    } elseif ($amount < 5) {
        return $amount . ' ' . $secondNoun;
    } else {
        return $amount . ' ' . $thirdNoun;
    }
}

echo func(6, 'яблоко', 'яблока', 'яблок');