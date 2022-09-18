<?php
require_once("Config/Autoload.php");

use Config\Autoload as Autoload;

use Model\Cruiser as Cruiser;
use Model\BattleShip as BattleShip;
use Model\Airplane as Airplane;

Autoload::Start();

//Instance
$transportList = array();

$cruiserOne = new Cruiser();
$cruiserOne->setCapacity(180);$cruiserOne->setPropelQuantity(4);$cruiserOne->setMaxKnots(200);$cruiserOne->setName("cruiserOne");
$cruiserTwo = new Cruiser();
$cruiserTwo->setCapacity(190);$cruiserTwo->setPropelQuantity(2);$cruiserTwo->setMaxKnots(150);$cruiserTwo->setName("cruiserTwo");

$battleShipOne = new BattleShip();
$battleShipOne->setArmament(20);$battleShipOne->setPropelQuantity(3);$battleShipOne->setMaxKnots(200);$battleShipOne->setName("battleShipOne");
$battleShipTwo = new BattleShip();
$battleShipTwo->setArmament(10);$battleShipTwo->setPropelQuantity(5);$battleShipTwo->setMaxKnots(220);$battleShipTwo->setName("battleShipTwo");

$airplaneOne = new Airplane();
$airplaneOne->setCapacity(35);$airplaneOne->setEngineQuantity(4);$airplaneOne->setName("airplaneOne");
$airplaneTwo = new Airplane();
$airplaneTwo->setCapacity(25);$airplaneTwo->setEngineQuantity(2);$airplaneTwo->setName("airplaneTwo");

array_push($transportList, $cruiserOne);array_push($transportList, $cruiserTwo);
array_push($transportList, $battleShipOne);array_push($transportList, $battleShipTwo);
array_push($transportList, $airplaneOne);array_push($transportList, $airplaneTwo);

foreach($transportList as $transport){
    echo '===============================================================';
    echo '<pre>';
    echo (string) $transport;
    echo '</pre>';
}

?>
<br>
<a href="../index.php"> Volver a inicio</a>