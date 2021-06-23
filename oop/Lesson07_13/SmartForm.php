<?php


namespace OOP\Lesson07_13;

use OOP\Lesson07_13\Form;
class SmartForm extends Form
{
    public $formInputs = [];

    public function __construct(){
        return $this->formInputs = $_REQUEST;
    }

}