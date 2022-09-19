<?php namespace model;

use model\Aerial as Aerial;

class Airplane extends Aerial{

    private $capacity;

    public function __construct($name,$engineQuantity,$capacity)
    {
        $this->setName($name);
        $this->setEngineQuantity($engineQuantity);
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
        $base = (string) 'Name => '. $this->getName().' - EngineQuantity =>  '.$this->getEngineQuantity();

        return (string) $base .' - Capacity => '. $this->getCapacity();
    }
}

?>