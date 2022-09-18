<?php
namespace Model;

     class Client extends Person{
        private $username;
        private $password;

        public function __construct($id,$firstName,$lastName,$dni,$email,$username,$password){ 
            $this->$id = $id;
            $this->$firstName = $firstName;
            $this->$lastName = $lastName;
            $this->$dni = $dni;
            $this->$email = $email;
            $this->username = $username;
            $this->password = $password;    
        }


        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        return $this;
        }

        public function getFistName(){
            return $this->fistName;
        }
        public function setFistName($fistName){
            $this->fistName = $fistName;
        return $this;
        }

        public function getLastName(){
            return $this->lastName;
        }
        public function setLastName($lastName){
            $this->lastName = $lastName;
        return $this;
        }

        public function getDni(){
            return $this->dni;
        }
        public function setDni($dni){
            $this->dni = $dni;
        return $this;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        return $this;
        }

        public function getUsername(){
            return $this->username;
        }
        public function setUsername($username){
            $this->username = $username;
        return $this;
        }

        public function getPassword(){
            return $this->password;
        }
        public function setPassword($password){
            $this->password = $password;
        return $this;
        }
    }
?>