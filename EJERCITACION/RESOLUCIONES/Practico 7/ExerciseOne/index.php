<?php
    require_once("Player.php");

    define("DB_HOST", "localhost");
    define("DB_NAME", "players");
    define("DB_USER", "root");
    define("DB_PASS", "");

    $playerList = array();

    $player1 = new Player();
    $player1->setPlayerCode("123");
    $player1->setFirstName("John");
    $player1->setLastName("Doe");
    $player1->setEmail("john@doe.com");
    $player1->setPlayedHours(25);

    $player2 = new Player();
    $player2->setPlayerCode("456");
    $player2->setFirstName("Martin");
    $player2->setLastName("Smith");
    $player2->setEmail("martin@smith.com");
    $player2->setPlayedHours(23.5);

    $player3 = new Player();
    $player3->setPlayerCode("789");
    $player3->setFirstName("Kevin");
    $player3->setLastName("Lindholm");
    $player3->setEmail("kevin@lindholm.com");
    $player3->setPlayedHours(56);

    array_push($playerList, $player1, $player2, $player3);

    try
    {
        //Creating PDO object
        $pdo = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /* ===== BEGIN INSERT STATEMENT ===== */
        $insertStatement = $pdo->prepare("INSERT INTO players (playerCode, firstName, lastName, email, playedHours)
                                    VALUES (:playerCode, :firstName, :lastName, :email, :playedHours)");
    
        foreach($playerList as $player)
        {
            $playerCode = $player->getPlayerCode();
            $firstName = $player->getFirstName();
            $lastName =  $player->getLastName();
            $email = $player->getEmail();
            $playedHours = $player->getPlayedHours();

            $insertStatement->bindParam(":playerCode", $playerCode);
            $insertStatement->bindParam(":firstName", $firstName);
            $insertStatement->bindParam(":lastName", $lastName);
            $insertStatement->bindParam(":email", $email);
            $insertStatement->bindParam(":playedHours", $playedHours);

            $insertStatement->execute();
        }
        /* ===== END INSERT STATEMENT ===== */
        
        
        /* ===== BEGIN SELECT STATEMENT ===== */
        $deleteStatement = $pdo->prepare("DELETE FROM players WHERE (playerCode = :playerCode)");

        $playerCode = "456";

        $deleteStatement->bindParam(":playerCode", $playerCode);

        $deleteStatement->execute();


        $selectStatement = $pdo->prepare("SELECT playerCode, firstName, lastName, email, playedHours FROM players");

        $selectStatement->execute();

        $result = $selectStatement->fetchAll();

        echo "Showing List:<br>";

        foreach($result as $row)
        {
            echo $row["playerCode"]." ".$row["firstName"]. " ".$row["lastName"]." ".$row["email"]." ".$row["playedHours"]."<br>";
        }
        /* ===== END SELECT STATEMENT ===== */

        /* ===== BEGIN REMOVE AND SELECT STATEMENT ===== */
        $selectStatement = $pdo->prepare("SELECT playerCode, firstName, lastName, email, playedHours FROM players");

        $selectStatement->execute();

        $result = $selectStatement->fetchAll();

        echo "Showing List:<br>";

        foreach($result as $row)
        {
            echo $row["playerCode"]." ".$row["firstName"]. " ".$row["lastName"]." ".$row["email"]." ".$row["playedHours"]."<br>";
        }
        /* ===== END REMOVE AND SELECT STATEMENT ===== */

        //* ===== BEGIN UPDATE STATEMENT ===== */
        $updateStatement = $pdo->prepare("UPDATE players SET playedHours = :playedHours WHERE (playerCode = :playerCode)");

        $playerCode = "789";
        $playedHours = "160";

        $updateStatement->bindParam(":playerCode", $playerCode);
        $updateStatement->bindParam(":playedHours", $playedHours);

        $updateStatement->execute();
        //* ===== END UPDATE STATEMENT ===== */
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
?>