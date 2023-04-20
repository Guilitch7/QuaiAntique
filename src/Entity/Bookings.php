<?php

namespace App\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Boolean;
use phpDocumentor\Reflection\Types\Integer;

#[ORM\Entity()]
#[ORM\Table(name: "BOOKINGS")]

class Bookings
{
    #[ORM\Id()]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private ?int $BOOKINGSLOTid;

    #[ORM\Column(type: "date", nullable: false)]
    private ?DateTime $BOOKINGSLOTdatetime;

    #[ORM\Column(nullable: false)]
    private ?string $BOOKINGSday;

    #[ORM\Column(nullable: true)]
    private ?DateTime $slotLunch;

    #[ORM\Column(nullable: true)]
    private ?DateTime $slotDinner;

    #[ORM\Column(type: "string", nullable: false)]
    private ?string $BOOKINGSLOTlastnameuser;

    #[ORM\Column(type: "integer", nullable: false)]
    private ?int $BOOKINGSLOTcoversnumber;

    #[ORM\Column(type: "string", nullable: false)]
    private ?string $BOOKINGSLOTfoodallergies;

    public function getId(): int
    {
            return $this->BOOKINGSLOTid;
    }

    public function getBookSlotDate()
    {
            return $this->BOOKINGSLOTdatetime;
    }

    public function setBookSlotDate($BOOKINGSdatetime)
    {
            $this->BOOKINGSLOTdatetime = $BOOKINGSdatetime;

            return $this;
    }


    public function getBookSlotUser()
    {
            return $this->BOOKINGSLOTlastnameuser;
    }

    public function setBookSlotUser($BOOKINGSlastnameuser)
    {
            $this->BOOKINGSLOTlastnameuser = $BOOKINGSlastnameuser;

            return $this;
    }
    
    
    public function getBookSlotCovers()
    {
            return $this->BOOKINGSLOTcoversnumber;
    }

    public function setBookSlotCovers($BOOKINGScoversnumber)
    {
            $this->BOOKINGSLOTcoversnumber = $BOOKINGScoversnumber;

            return $this;
    }    
   
    
       
    public function getBookSlotAllergies()
    {
            return $this->BOOKINGSLOTfoodallergies;
    }

    public function setBookSlotAllergies($BOOKINGSfoodallergies)
    {
            $this->BOOKINGSLOTfoodallergies = $BOOKINGSfoodallergies;

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