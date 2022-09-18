<?php namespace Model;

class Item{
	
//Atributes
	private $code;
	private	$name;
	private	$description;
	private $quantity;
	private $price;

//Access Properties
	function getCode(){
		return $this->code;
	}

	function setCode($code){
		$this->code = $code;
	}
	  function getName(){
		return $this->name;
	}

	  function setName($name){
		$this->name = $name;   
	}

	function getDescription(){
		return $this->description;
	}

	  function setDescription($description){
		$this->description = $description;   
	}

	  function getQuantity(){
		return $this->quantity;
	}

	  function setQuantity($quantity){
		$this->quantity = $quantity;   
	}

	  function getPrice(){
		return $this->price;
	}

	  function setPrice($price){
		$this->price = $price;
	}

	//METHODSS 
	function getSubTotal(){
		$subtotal = 0.0;
		$desc = 0.0;
		if($this->quantity >= 1){
			$subtotal = ($this->price * $this->quantity);
		}
			
		return $subtotal;
	}

	// function getTotal(){
	// 	$total = 0.0;
	// 	if($this->quantity >= 1){
	// 		$total = $this->price * $this->quantity;
	// 	}
		
	// 	return $total;
	// }
}

?>