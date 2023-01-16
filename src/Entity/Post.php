<?php

namespace App\Entity;

class Post
{
        private string $email;


        private string $password;
        private string $confirmPassword;
        private int $convives;
        private string $allergies;


        public function getConvives()
        {
                return $this->convives;
        }

        public function setConvives($convives)
        {
                $this->convives = $convives;

                return $this;
        }

   
        public function getAllergies()
        {
                return $this->allergies;
        }

    
        public function setAllergies($allergies)
        {
                $this->allergies = $allergies;

                return $this;
        }


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

        public function getConfirmPassword()
        {
                return $this->confirmPassword;
        }

        public function setConfirmPassword($confirmPassword)
        {
                $this->confirmPassword = $confirmPassword;

                return $this;
        }
}

