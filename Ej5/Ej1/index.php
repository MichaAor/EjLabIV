<?php
    require_once "Config/Autoload.php";
    use Model\Cruiser as Cruiser;
    use Model\Airplane as Airplane;
    use Model\BattleShip as BattleShip;

    $c = new Cruiser("Barquito",15,100,5000);
    echo $c->__toString() . "<br>";
    $a = new Airplane("plane",1233,15);
    echo $a->__toString() . "<br>";
    $b = new BattleShip("Barquito",15,100,5000);
    echo $b->__toString();

    





?>