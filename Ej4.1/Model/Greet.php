<?php namespace Models;

abstract class Greet{

    private $message;

    function __construct(){

    }

    public function getMessage(){
        return $this->message;
    }
    
    public function setMessage($message){
        $this->message = $message;
    }

    public function other($message){
        $this->setMessage($message);

        include_once("greeting.php");
    }

    public abstract function greet();
    public abstract function sayGoodbye();
}

?>