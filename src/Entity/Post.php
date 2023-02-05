<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: "CLIENTS")]

class Post
{
        #[ORM\Id()]
        #[ORM\GeneratedValue(strategy: "AUTO")]
        #[ORM\Column(type: "integer")]
        private int $CLIENTS_id;

        #[ORM\Column(type: "string", nullable: false, length: 255)]
        private string $CLIENTS_email;

        #[ORM\Column(type: "string", nullable: false)]
        private string $CLIENTS_password;
        private string $confirmPassword;

        #[ORM\Column(type: "integer", nullable: true)]
        private int $CLIENTS_covers_number;

        #[ORM\Column(type: "string", nullable: false)]
        private string $CLIENTS_food_allergies;

        public function getId(): int
        {
                return $this->CLIENTS_id;
        }

        public function getConvives()
        {
                return $this->CLIENTS_covers_number;
        }

        public function setConvives($CLIENTS_covers_number)
        {
                $this->CLIENTS_covers_number = $CLIENTS_covers_number;

                return $this;
        }

   
        public function getAllergies()
        {
                return $this->CLIENTS_food_allergies;
        }

    
        public function setAllergies($CLIENTS_food_allergies)
        {
                $this->CLIENTS_food_allergies = $CLIENTS_food_allergies;

                return $this;
        }


        public function getEmail()
        {
                return $this->CLIENTS_email;
        }

  
        public function setEmail($CLIENTS_email)
        {
                $this->CLIENTS_email = $CLIENTS_email;

                return $this;
        }


        public function getPassword()
        {
                return $this->CLIENTS_password;
        }


        public function setPassword($CLIENTS_password)
        {
                $this->CLIENTS_password = $CLIENTS_password;

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

