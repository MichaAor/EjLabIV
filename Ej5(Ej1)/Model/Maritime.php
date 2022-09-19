<?php namespace model;

use model\Transport as Transport;

abstract class Maritime extends Transport{

    private $maxKnots ;

    public function getMaxKnots(){
        return $this->maxKnots;
    }

    public function setMaxKnots($maxKnots){
        $this->maxKnots = $maxKnots;
    }
}

?>