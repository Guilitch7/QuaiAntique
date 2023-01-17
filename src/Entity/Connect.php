<?php

namespace App\Entity;

class Connect
{
        private string $email;
        private string $password;
        
        public function getEmail()
        {
                return $this->email;
        }

  
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }


        public function getPassword()
        {
                return $this->password;
        }


        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }
}

