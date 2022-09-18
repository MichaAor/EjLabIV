<?php 
namespace process;

require_once("../config/autoload.php");

use config\autoload as Autoload;

use repositories\BeerRepository as BeerRepository;
use model\Beer as Beer;
use repositories\IBeers as IBeer;

Autoload::Start();

if($_POST){
	$beerCode = $_POST["btnRemove"];
	
	$repository = new BeerRepository();
	$repository->delete($beerCode);

	echo "<script> alert('Se ha eliminado correctamente la Cerveza seleccionada!');";  
	echo "window.location = '../list.php'; </script>";
}

 ?>