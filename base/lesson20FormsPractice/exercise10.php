<?php

function setCheckbox($name){
    if(isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
        $value = 'checked';
    } else {
        $value = '';
    }

    return '<input type="hidden" name="'.$name.'" value="0">
		<input type="checkbox" name="'.$name.'" value="1">';
}

echo setCheckbox('checkbox');