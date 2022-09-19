<?php namespace Model;

class User{
    private $username;
    private $password;
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($username, $password, $firstName, $lastName, $email){
        $this->username = $username;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }
    
    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function getEmail(){
        return $this->email;
    }

    public function __toString(){
        $base = 'UserName => '.$this->getUsername() .
        ' - Password => '. $this->getPassword() .
        ' - First Name => '. $this->getFirstName() .
        ' - Last Name => '. $this->getLastName() .
        ' - Email => '. $this->getEmail();
        return (string)$base;
    }
}
?>