<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Boolean;
use phpDocumentor\Reflection\Types\Integer;

#[ORM\Entity()]
#[ORM\Table(name: "BOOKING_SLOT")]

class Dishes
{
    #[ORM\Id()]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private Integer $BOOKING_SLOT_id;

    #[ORM\Column(type: "datetime", nullable: false)]
    private DateTime $BOOKING_SLOT_date_time;

    #[ORM\Column(type: "string", nullable: false)]
    private String $BOOKING_SLOT_last_name_user;

    #[ORM\Column(type: "integer", nullable: false)]
    private Integer $BOOKING_SLOT_covers_number;

    #[ORM\Column(type: "string", nullable: false)]
    private string $BOOKING_SLOT_food_allergies;

    #[ORM\Column(type: "boolean")]
    private Boolean $BOOKING_SLOT_booked;

    public function getId(): integer
    {
            return $this->BOOKING_SLOT_id;
    }

    public function getBookSlotDate()
    {
            return $this->BOOKING_SLOT_date_time;
    }

    public function setBookSlotDate($BOOKING_SLOT_date_time)
    {
            $this->BOOKING_SLOT_date_time = $BOOKING_SLOT_date_time;

            return $this;
    }


    public function getBookSlotUser()
    {
            return $this->BOOKING_SLOT_last_name_user;
    }

    public function setBookSlotUser($BOOKING_SLOT_last_name_user)
    {
            $this->BOOKING_SLOT_last_name_user = $BOOKING_SLOT_last_name_user;

            return $this;
    }
    
    
    public function getBookSlotCovers()
    {
            return $this->BOOKING_SLOT_covers_number;
    }

    public function setBookSlotCovers($BOOKING_SLOT_covers_number)
    {
            $this->BOOKING_SLOT_covers_number = $BOOKING_SLOT_covers_number;

            return $this;
    }    
   
    
       
    public function getBookSlotAllergies()
    {
            return $this->BOOKING_SLOT_food_allergies;
    }

    public function setBookSlotAllergies($BOOKING_SLOT_food_allergies)
    {
            $this->BOOKING_SLOT_food_allergies = $BOOKING_SLOT_food_allergies;

            return $this;
    }    
 


    public function getBookSlotBooked()
    {
            return $this->BOOKING_SLOT_booked;
    }


    public function setBookSlotBooked($BOOKING_SLOT_booked)
    {
            $this->BOOKING_SLOT_booked = $BOOKING_SLOT_booked;

            return $this;
    }

}