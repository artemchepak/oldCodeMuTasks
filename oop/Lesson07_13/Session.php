<?php


namespace OOP\Lesson07_13;


class Session
{
    public function __construct(){
        session_start();
    }
    public function set($key, $value){
        $_SESSION[$key] = $value;
    }
    public function get($key){
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }
    public function del($key){
        unset($_SESSION[$key]);
    }
    public function check($key){
        return isset($_SESSION[$key]) ? true : false;
    }
    public function __destruct()
    {
        session_write_close();
    }
}