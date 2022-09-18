<?php 
namespace model;

	class Item{
		private $name;
		private $description;
		private $price;
		private $quantity;

		function __construct($name, $description, $price, $quantity){
			$this->name = $name;
			$this->description = $description;
			$this->price = $price;
			$this->quantity = $quantity;
		}
		public function getName(){
			return $this->name;
		}
		public function getDescription(){
			return $this->description;
		}
		public function getPrice(){
			return $this->price;
		}
		public function getQuantity(){
			return $this->quantity;
		}
		public function setName($name){
			$this->name = $name;
		}
		public function setDescription($description){
			$this->description = $description;
		}
		public function setPrice($price){
			$this->price = $price;
		}
		public function setQuantity($quantity){
			$this->quantity = $quantity;
		}
	}
 ?>