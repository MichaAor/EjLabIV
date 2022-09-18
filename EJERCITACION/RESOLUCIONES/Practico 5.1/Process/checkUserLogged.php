<?php namespace Process;

use Config\Autoload as Autoload;
use Model\Client as Client;

Autoload::Start();

session_start();

if(isset($_SESSION["loggedUser"])){
     $loggedUser = $_SESSION["loggedUser"];
}
else{
     echo "<script> if(confirm('Su tiempo de sesion ha expirado, vuelva a loguearse!'));";  
     echo "window.location = 'index.php'; </script>";
}

?>