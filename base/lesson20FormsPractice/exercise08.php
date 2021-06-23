<?php

function setInput($type, $name, $value){
    if(isset($_REQUEST[$name])) {
        $value = $_REQUEST[$name];
    }

    echo "<input type=\"$type\" name=\"$name\" value=\"$value\">";
}

setInput('text', 'name', '1');