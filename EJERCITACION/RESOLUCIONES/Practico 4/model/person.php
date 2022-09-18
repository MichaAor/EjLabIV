<?php 
namespace model;

	abstract class Person{
		private $id;
		private $firstName;
		private $lastName;
		private $dni;
		private $email;

		function __construct($firstName, $lastName, $dni, $email, $id = ""){

			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->dni = $dni;
			$this->email = $email;
			$this->id = $id;

		}
		public function getId(){
			return $this->id;
		}
		public function getFirstName(){
			return $this->firstName;
		}
		public function getLastName(){
			return $this->lastName;
		}
		public function getDni(){
			return $this->dni;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setId($id){
			$this->id = $id;
		}
		public function setFirstName($firstName){
			$this->firstName = $firstName;
		}
		public function setLastName($lastName){
			$this->lastName = $lastName;

		}
		public function setDni($dni){
			$this->dni = $dni;
		}
		public function setEmail($email){
			$this->email = $email;
		}

	}
 ?>