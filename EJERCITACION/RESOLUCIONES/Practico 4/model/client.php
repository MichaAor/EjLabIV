<?php 
namespace model;

class Client extends Person{

	private $userName;
	private $password;

	function __construct($firstName, $lastName, $dni, $email, $userName, $password, $id = ""){

		parent::__construct($firstName, $lastName, $dni, $email,$id);
		$this->userName = $userName;
		$this->password = $password;

	}
	public function getUserName(){
		return $this->userName;
	}
	public function getPassword(){
		return $this->password;
	}
	public function setUserName($userName){
		$this->userName = $userName;
	}
	public function setPassword($password){
		$this->password = $password;
	}
}

 ?>