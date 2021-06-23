<?php


namespace OOP\Lesson07_13;


class Form
{
    private function arrayToString($arr){
        $result = '';
        foreach ($arr as $key => $value){
            $result .= $key . '="' . $value . '" ';
        }
        return $result;
    }

    public function submit($arr)
    {
        $str = $this->arrayToString($arr);
        return "<input type=\"submit\" $str><br>";

    }

    public function input($arr)
    {
        $str = $this->arrayToString($arr);
        return "<input $str><br>";

    }

    public function password($arr)
    {
        $str = $this->arrayToString($arr);
        return "<input type=\"password\" $str><br>";

    }

    public function textarea($arr)
    {
        $value = '';

        if(array_key_exists('value', $arr)){
            $value = $arr['value'];
            unset($arr['value']);
        }

        $str = $this->arrayToString($arr);
        return "<textarea $str>$value</textarea><br>";

    }

    public function open($arr)
    {
        $str = $this->arrayToString($arr);
        return "<form $str>";

    }

    public function close()
    {
        return "</form>";

    }


}