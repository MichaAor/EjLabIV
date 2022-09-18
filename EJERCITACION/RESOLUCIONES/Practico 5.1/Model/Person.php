<?php namespace Model;

abstract class Person{

    private $firstName;
    private $lastName;
    private $dni;
    private $email;


    public function getFirstName(){
		return $this->firstName;
	}

	public function setFirstName($firstName){
		$this->firstName = $firstName;   
    }
    
    public function getLastName(){
		return $this->lastName;
	}

	public function setLastName($lastName){
		$this->lastName = $lastName;   
	}

	public function getDni(){
		return $this->dni;
	}

	public function setDni($dni){
		$this->dni = $dni;   
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;   
	}

}


?>