<?php 
namespace model;

class Beer{
	
	private $code;
	private $name;
	private $description;
	private $type;

	function __construct($code, $name, $description, $type){
		$this->code = $code;
		$this->name = $name;
		$this->description = $description;
		$this->type = $type;
		
		
	}
	public function getCode(){
		return $this->code;

	}
	public function getName(){
		return $this->name;
	}
	public function getDescription(){
		return $this->description;
	}
	public function getType(){
		return $this->type;
	}
	public function setCode($code){
		$this->code = $code;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function setDescription($description){
		$this->description = $description;
	}
	public function setType($type){
		$this->type = $type;
	}
}
 ?>