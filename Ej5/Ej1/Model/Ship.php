<?php namespace Model;

use Model\Maritime as Maritime;

abstract class Ship extends Maritime{

    private $propelQuantity;

    public function getPropelQuantity(){
        return $this->propelQuantity;
    }

    public function setPropelQuantity($propelQuantity){
        $this->propelQuantity = $propelQuantity;
    }
}

?>