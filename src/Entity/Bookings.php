<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: "BOOKINGS")]

class Bookings
{
    #[ORM\Id()]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private ?int $BOOKINGSLOTid;

    #[ORM\Column(type: "date", nullable: false)]
    private ?Datetime $BOOKINGSLOTdatetime;

    #[ORM\Column(type: "string", nullable: false)]
    private ?string $service;

    #[ORM\Column(nullable: true)]
    private ?DateTime $slotLunch;

    #[ORM\Column(type: "string", nullable: false)]
    private ?string $BOOKINGSLOTlastnameuser;

    #[ORM\Column(type: "integer", nullable: false)]
    private ?int $BOOKINGSLOTcoversnumber;

    #[ORM\Column(type: "json", nullable: false)]
    private ?array $BOOKINGSLOTfoodallergies;

    #[ORM\ManyToOne(inversedBy: 'BOOKINGSLOTid')]
    private ?User $user;

    #[ORM\ManyToOne(inversedBy: 'id')]
    private ?Openingdays $openingdays;

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

    public function getSlotLunch()
    {
        return $this->slotLunch;
    }

    public function setSlotLunch($slotLunch)
    {
        $this->slotLunch = $slotLunch;

        return $this;
    }

    public function getService()
    {
        return $this->service;
    }

    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getOpeningdays(): ?Openingdays
    {
        return $this->openingdays;
    }

    public function setOpeningdays(?Openingdays $openingdays): self
    {
        $this->openingdays = $openingdays;

        return $this;
    }

    public function __toString()
    {
        return $this->user;
    }
}