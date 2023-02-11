<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Boolean;
use phpDocumentor\Reflection\Types\Integer;

#[ORM\Entity()]
#[ORM\Table(name: "BOOKINGSLOT")]

class Bookingslot
{
    #[ORM\Id()]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private Integer $BOOKINGSLOTid;

    #[ORM\Column(type: "datetime", nullable: false)]
    private DateTime $BOOKINGSLOTdatetime;

    #[ORM\Column(type: "string", nullable: false)]
    private String $BOOKINGSLOTlastnameuser;

    #[ORM\Column(type: "integer", nullable: false)]
    private Integer $BOOKINGSLOTcoversnumber;

    #[ORM\Column(type: "string", nullable: false)]
    private string $BOOKINGSLOTfoodallergies;

    #[ORM\Column(type: "boolean")]
    private Boolean $BOOKINGSLOTbooked;

    public function getId(): integer
    {
            return $this->BOOKINGSLOTid;
    }

    public function getBookSlotDate()
    {
            return $this->BOOKINGSLOTdatetime;
    }

    public function setBookSlotDate($BOOKINGSLOTdatetime)
    {
            $this->BOOKINGSLOTdatetime = $BOOKINGSLOTdatetime;

            return $this;
    }


    public function getBookSlotUser()
    {
            return $this->BOOKINGSLOTlastnameuser;
    }

    public function setBookSlotUser($BOOKINGSLOTlastnameuser)
    {
            $this->BOOKINGSLOTlastnameuser = $BOOKINGSLOTlastnameuser;

            return $this;
    }
    
    
    public function getBookSlotCovers()
    {
            return $this->BOOKINGSLOTcoversnumber;
    }

    public function setBookSlotCovers($BOOKINGSLOTcoversnumber)
    {
            $this->BOOKINGSLOTcoversnumber = $BOOKINGSLOTcoversnumber;

            return $this;
    }    
   
    
       
    public function getBookSlotAllergies()
    {
            return $this->BOOKINGSLOTfoodallergies;
    }

    public function setBookSlotAllergies($BOOKINGSLOTfoodallergies)
    {
            $this->BOOKINGSLOTfoodallergies = $BOOKINGSLOTfoodallergies;

            return $this;
    }    
 


    public function getBookSlotBooked()
    {
            return $this->BOOKINGSLOTbooked;
    }


    public function setBookSlotBooked($BOOKINGSLOTbooked)
    {
            $this->BOOKINGSLOTbooked = $BOOKINGSLOTbooked;

            return $this;
    }

}