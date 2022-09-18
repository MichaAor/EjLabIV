<?php namespace Model;

use Model\Ship as Ship;

class BattleShip extends Ship{

    private $armament;

    public function __construct($name,$maxKnots,$propelQuantity,$armament){
        $this->setName($name);
        $this->setMaxKnots($maxKnots);
        $this->setPropelQuantity($propelQuantity);
        $this->setArmament($armament);
    }

    public function getArmament(){
        return $this->armament;
    }

    public function setArmament($armament){
        $this->armament = $armament;
    }

    public function __toString()
    {
        $base = 'Name => '.$this->getName() .' - Max Knots => '. $this->getMaxKnots() .' - PropelQuantity => '. $this->getPropelQuantity();

        return (string)$base .'- Aramament=> '. $this->getArmament();
    }
}

?>