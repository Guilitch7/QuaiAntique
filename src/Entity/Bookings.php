<?php

namespace App\Entity;

use DateTime;
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
    private Integer $BOOKINGSid;

    #[ORM\Column(type: "datetime", nullable: false)]
    private DateTime $BOOKINGSdatetime;

    #[ORM\Column(type: "datetime", nullable: false)]
    private DateTime $BOOKINGStimeslot;

    #[ORM\Column(type: "string", nullable: false)]
    private String $BOOKINGSlastnameuser;

    #[ORM\Column(type: "integer", nullable: false)]
    private Integer $BOOKINGScoversnumber;

    #[ORM\Column(type: "string", nullable: false)]
    private string $BOOKINGSfoodallergies;

    #[ORM\Column(type: "boolean")]
    private Boolean $BOOKINGSbooked;

    public function getId(): integer
    {
            return $this->BOOKINGSid;
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
 


    public function getSlotBooked()
    {
            return $this->BOOKINGSbooked;
    }


    public function setSlotBooked($BOOKINGSLOTbooked)
    {
            $this->BOOKINGSbooked = $BOOKINGSLOTbooked;

            return $this;
    }



    public function getBOOKINGStimeslot()
    {
        return $this->BOOKINGStimeslot;
    }


    public function setBOOKINGStimeslot($BOOKINGStimeslot)
    {
        $this->BOOKINGStimeslot = $BOOKINGStimeslot;

        return $this;
    }
}