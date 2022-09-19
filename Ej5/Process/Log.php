<?php
require_once "../Model/User.php";

use Model\User as User;


if($_POST){
    $usList = array();
    $u = new User('SSoler','cosme1234','Sebastian','Soler','sebastian@utn.com');
    array_push($usList,$u);
    $u =new User('AzarJ','alAzar123','Juan','Azar ','juan_azar@utn.com');
    array_push($usList,$u);
    $u = new User('Mari123','123456Mari','Maria','Perez ','mariap@utn.com');
    array_push($usList,$u);

    // foreach($usList as $value){
    //     echo '===============================================================';
    //     echo '<pre>';
    //     echo (string) $value;
    //     echo '</pre>';
    // }

    $logged = NULL;

    foreach($usList as $key => $value){
        if($_POST['userName'] == $value->getUserName()){
			if($_POST['password'] == $value->getPassword()){
				$logged = $value;
			    }
		    }
        }
    }


    if($logged != NULL){
        session_start();
        $_SESSION['loggedUser'] = $loggedUser;
        header("location:../welcome.php");   
    }else{
        echo "<script> if(confirm('Verifique que los datos ingresados sean correctos'));";
        echo "window.location = '../index.php; </script>";
    }
?>