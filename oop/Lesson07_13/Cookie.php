<?php


namespace OOP\Lesson07_13;


class Cookie
{
    public function set($name, $value){
        return setcookie($name, $value, time()+3600);
    }
    public function get($name){
        return isset($_COOKIE["$name"]) ? $_COOKIE["$name"] : null;
    }
    public function del($name){
        return setcookie($name, '', time()-3600);
    }
}