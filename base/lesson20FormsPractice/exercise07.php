<?php

function setInput($type, $name, $value){
    echo "<input type=\"$type\" name=\"$name\" value=\"$value\">";
}

setInput('text', 'name', '1');