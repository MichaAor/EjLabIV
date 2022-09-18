<?php namespace Model;

use Model\Ship as Ship;

class BattleShip extends Ship{

    private $armament;

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