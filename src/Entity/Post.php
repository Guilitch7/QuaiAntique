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
        private int $CLIENTSid;

        #[ORM\Column(type: "string", nullable: false, length: 255)]
        private string $CLIENTSemail;

        #[ORM\Column(type: "string", nullable: false)]
        private string $CLIENTSpassword;
        private string $confirmPassword;

        #[ORM\Column(type: "integer", nullable: true)]
        private int $CLIENTScovers_number;

        #[ORM\Column(type: "string", nullable: false)]
        private string $CLIENTSfood_allergies;

        public function getId(): int
        {
                return $this->CLIENTSid;
        }

        public function getConvives()
        {
                return $this->CLIENTScovers_number;
        }

        public function setConvives($CLIENTScovers_number)
        {
                $this->CLIENTScovers_number = $CLIENTScovers_number;

                return $this;
        }

   
        public function getAllergies()
        {
                return $this->CLIENTSfood_allergies;
        }

    
        public function setAllergies($CLIENTSfood_allergies)
        {
                $this->CLIENTSfood_allergies = $CLIENTSfood_allergies;

                return $this;
        }


        public function getEmail()
        {
                return $this->CLIENTSemail;
        }

  
        public function setEmail($CLIENTSemail)
        {
                $this->CLIENTSemail = $CLIENTSemail;

                return $this;
        }


        public function getPassword()
        {
                return $this->CLIENTSpassword;
        }


        public function setPassword($CLIENTSpassword)
        {
                $this->CLIENTSpassword = $CLIENTSpassword;

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

