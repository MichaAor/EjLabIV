<?php
require_once("Config/Autoload.php");
use Config\Autoload as Autoload;

use Model\Cruiser as Cruiser;
use Model\BattleShip as BattleShip;
use Model\Airplane as Airplane;

Autoload::Start();

    $c = new Cruiser("Barquito",15,100,5000);
    $a = new Airplane("Plane",1233,15);
    $b = new BattleShip("Barcote",28,50,'Torpedos');

$transportList = array();
array_push($transportList,$c);
array_push($transportList,$a);
array_push($transportList,$b);

foreach($transportList as $transport){
    echo '===============================================================';
    echo '<pre>';
    echo (string) $transport;
    echo '</pre>';
}
?>