<?php 
namespace process;
require_once "../model/user.php";
use model\User as User;

$users = array();

$user1 = new User('SSoler', 'cosme1234', 'Sebastian', 'Soler', 'sebastian@utn.com');
$users[] = $user1;
$user2 = new User('AzarJ', 'alAzar123', 'Juan', 'Azar', 'juan_azar@utn.com');
$users[] = $user2;
$user3 = new User('Mari123', '123456Mari', 'Maria', 'Perez', 'mariap@utn.com');
$users[] = $user3;

$loggedUser = NULL;
if($_POST){
	
	foreach ($users as $key => $value) {
		if($_POST['userName'] == $value->getUserName()){
			if($_POST['password'] == $value->getPassword()){
				$loggedUser = $value;
			}
		}
	}
}
if($loggedUser != NULL){
	session_start();
	$_SESSION['loggedUser'] = $loggedUser;
	header("location:../welcome.php");
	
}else{
	echo "<script> if(confirm('Verifique que los datos ingresados sean correctos'));";
	echo "window.location = '../index.php';
		</script>";
}

	

 ?>