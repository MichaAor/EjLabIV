<?php namespace Models;

require_once('Greet.php');

use Models\Greet as Greet;

class Spanish extends Greet{
    
    public function greet(){
        $this->setMessage("Hola Buenos Dias!");

        include_once("greeting.php");
    }
    
    public function sayGoodbye(){
        $this->setMessage("Adios, hasta luego!");

        include_once("greeting.php");
    }
}

?>