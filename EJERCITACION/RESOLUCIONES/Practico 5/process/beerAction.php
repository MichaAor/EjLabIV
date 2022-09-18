<?php 
namespace process;

require_once("../config/autoload.php");

use config\autoload as Autoload;

use repositories\BeerRepository as BeerRepository;
use model\Beer as Beer;
use repositories\IBeers as IBeer;

Autoload::Start();

if($_POST){
	$newBeer = new Beer($_POST['code'],$_POST['name'],$_POST['description'],$_POST['type']);
	$repository = new BeerRepository();
	$repository->add($newBeer);

	echo "<script> alert('Birra agregada con Exito!');";  
	echo "window.location = '../list.php'; </script>";
}

 ?>