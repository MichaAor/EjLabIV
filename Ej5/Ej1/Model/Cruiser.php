<?php namespace Model;

use Model\Ship as Ship;

class Cruiser extends Ship{

    private $capacity;

    public function __construct($name,$maxKnots,$propelQuantity,$capacity){
        $this->setName($name);
        $this->setMaxKnots($maxKnots);
        $this->setPropelQuantity($propelQuantity);
        $this->setCapacity($capacity);
    }

    public function getCapacity(){
        return $this->capacity;
    }

    public function setCapacity($capacity){
        $this->capacity = $capacity;
    }

    public function __toString()
    {
        $base = 'Name => '.$this->getName() .' - Max Knots => '. $this->getMaxKnots() .' - PropelQuantity => '. $this->getPropelQuantity();

        return (string) $base .'- Capacity =>'. $this->getCapacity();
    }
}

?>