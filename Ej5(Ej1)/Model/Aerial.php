<?php namespace model;

use model\Transport as Transport;

abstract class Aerial extends Transport{

    private $engineQuantity;

    public function getEngineQuantity(){
        return $this->engineQuantity;
    }

    public function setEngineQuantity($engineQuantity){
        $this->engineQuantity = $engineQuantity;
    }
}

?>