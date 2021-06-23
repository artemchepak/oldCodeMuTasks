<?php

function luckyTicket(){
    $count= 0;
    for($i=1;$i<=999999;$i++){
        $str = (string)$i;
        if(strlen($str)<6){
            for($j=strlen($str);$j<6;$j++){
                $str='0'.$str;
            }
        }
        if($str[0]+$str[1]+$str[2] == $str[3]+$str[4]+$str[5]){
            echo $str . '<br>';
        }
    }
}
echo luckyTicket();