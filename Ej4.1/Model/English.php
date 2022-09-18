<?php namespace Models;

require_once('Greet.php');

use Models\Greet as Greet;

class English extends Greet{
    
    public function greet(){
        $this->setMessage("Hello, have a great day!");

        include_once("greeting.php");
    }
    
    public function sayGoodbye(){
        $this->setMessage("Bye, see you later!");

        include_once("greeting.php");
    }
}

?>