<?php
    class Player
    {
        private $playerCode;
        private $firstName;
        private $lastName;
        private $email;
        private $playedHours;
    
        public function getPlayerCode()
        {
                return $this->playerCode;
        }

        public function setPlayerCode($playerCode)
        {
                $this->playerCode = $playerCode;
        }

        public function getFirstName()
        {
                return $this->firstName;
        }

        public function setFirstName($firstName)
        {
                $this->firstName = $firstName;
        }

        public function getLastName()
        {
                return $this->lastName;
        }

        public function setLastName($lastName)
        {
                $this->lastName = $lastName;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;
        }

        public function getPlayedHours()
        {
                return $this->playedHours;
        }

        public function setPlayedHours($playedHours)
        {
                $this->playedHours = $playedHours;
        }
    }
?>