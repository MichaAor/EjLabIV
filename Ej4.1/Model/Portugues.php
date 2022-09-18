<?php namespace Models;

require_once('Greet.php');

use Models\Greet as Greet;

class Portugues extends Greet{
    
    public function greet(){
        $this->setMessage("Olá, bom dia!");

        include_once("greeting.php");
    }
    
    public function sayGoodbye(){
        $this->setMessage("Tchau, ate logo!!");

        include_once("greeting.php");
    }
}

?>