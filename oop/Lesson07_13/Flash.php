<?php


namespace OOP\Lesson07_13;

use OOP\Lesson07_13\Session;
class Flash
{
    private $session;

    public function __construct(){
        return $this->session = new Session();
    }

    public function setMessage($key, $value){
        return $this->session->set($key, $value);
    }

    public function getMessage($key){
        return $this->session->get($key);
    }
}