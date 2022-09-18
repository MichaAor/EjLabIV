<?php namespace Process;

require('..\Config\Autoload.php');

use Config\Autoload as Autoload;

Autoload::Start();

use Model\Client as Client;
use Repository\UserRepository as UserRepository;

if($_POST){

    if(isset($_POST["username"]) && isset($_POST["password"])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];        

        $userRepository = new UserRepository();
        $user = $userRepository->GetByUserName($username);

        if($user != null && ($password == $user->getPassword()))
        {
            session_start();

            $loggedUser = new Client();
            $loggedUser->setUserName($username);
            $loggedUser->setPassword($password);

            $loggedUser->setFirstName("Cosme");
            $loggedUser->setLastName("Fulanito");
            $loggedUser->setDni(12312312);
            $loggedUser->setEmail("cosme.fulanito@utn.com");


            $_SESSION["loggedUser"] = $loggedUser;

            header("location: ../add-bill.php");
        }
        else{
            echo "<script> if(confirm('Datos incorrectos, vuelva a intentarlo !'));";  
            echo "window.location = '../index.php'; </script>";
        }
    }
    else{
        echo "<script> if(confirm('Hubo un problema al procesar los datos, vuelva a intentarlo !'));";  
        echo "window.location = '../index.php'; </script>";
    }
}
else{
    echo "<script> if(confirm('No es posible procesar informacion si no es por metodo POST !'));";  
    echo "window.location = '../index.php'; </script>";
}

?>