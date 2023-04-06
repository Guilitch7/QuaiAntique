<?php

namespace App\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Boolean;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Validator\Constraints\Time;

#[ORM\Entity()]
#[ORM\Table(name: "BOOKINGS")]

class Bookings
{
    #[ORM\Id()]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private ?int $BOOKINGSLOTid;

    #[ORM\Column(type: "date", nullable: false)]
    private ?DateTime $BOOKINGSdatetime;

    #[ORM\Column(nullable: false)]
    private ?string $BOOKINGSday;

    #[ORM\Column(nullable: true)]
    private Time $slotLunch;

    #[ORM\Column(nullable: true)]
    private Time $slotDinner;

    #[ORM\Column(type: "string", nullable: false)]
    private ?string $BOOKINGSlastnameuser;

    #[ORM\Column(type: "integer", nullable: false)]
    private ?int $BOOKINGScoversnumber;

    #[ORM\Column(type: "string", nullable: false)]
    private ?string $BOOKINGSfoodallergies;

    public function getId(): int
    {
            return $this->BOOKINGSLOTid;
    }

    public function getBookSlotDate()
    {
            return $this->BOOKINGSdatetime;
    }

    public function setBookSlotDate($BOOKINGSdatetime)
    {
            $this->BOOKINGSdatetime = $BOOKINGSdatetime;

            return $this;
    }


    public function getBookSlotUser()
    {
            return $this->BOOKINGSlastnameuser;
    }

    public function setBookSlotUser($BOOKINGSlastnameuser)
    {
            $this->BOOKINGSlastnameuser = $BOOKINGSlastnameuser;

            return $this;
    }
    
    
    public function getBookSlotCovers()
    {
            return $this->BOOKINGScoversnumber;
    }

    public function setBookSlotCovers($BOOKINGScoversnumber)
    {
            $this->BOOKINGScoversnumber = $BOOKINGScoversnumber;

            return $this;
    }    
   
    
       
    public function getBookSlotAllergies()
    {
            return $this->BOOKINGSfoodallergies;
    }

    public function setBookSlotAllergies($BOOKINGSfoodallergies)
    {
            $this->BOOKINGSfoodallergies = $BOOKINGSfoodallergies;

            return $this;
    }    
 
    public function getday()
    {
        return $this->BOOKINGSday;
    }


    public function setday($BOOKINGSday)
    {
        $this->BOOKINGSday = $BOOKINGSday;

        return $this;
    }

    public function getSlotLunch()
    {
        return $this->slotLunch;
    }

    public function setSlotLunch($slotLunch)
    {
        $this->slotLunch = $slotLunch;

        return $this;
    }

    
    public function getSlotDinner()
    {
        return $this->slotDinner;
    }


    public function setSlotDinner($slotDinner)
    {
        $this->slotDinner = $slotDinner;

        return $this;
    }
}