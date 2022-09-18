<?php 
namespace repositories;

use model\Beer as Beer;

interface IBeers{
	function add(Beer $newBeer);
	function delete($name);
	function getAll();
 
}
?>
