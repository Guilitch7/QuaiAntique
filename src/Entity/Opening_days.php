<?php

namespace App\Entity;

use DateTime;
use Doctrine\DBAL\Types\DateType;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: "OPENING_DAYS")]

class Dishes
{
    #[ORM\Id()]    
    #[ORM\Column(type: "string", nullable: false)]
    private string $OPENING_DAYS_day;

    #[ORM\Column(type: "time", nullable: false)]
    private string $OPENING_DAYS_opening_time_lunch;

    #[ORM\Column(type: "time", nullable: false)]
    private string $OPENING_DAYS_closing_time_lunch;

    #[ORM\Column(type: "time", nullable: false)]
    private string $OPENING_DAYS_opening_time_diner;

    #[ORM\Column(type: "time", nullable: false)]
    private string $OPENING_DAYS_closing_time_diner;

    public function getDay()
    {
            return $this->OPENING_DAYS_day;
    }

    public function setDay($OPENING_DAYS_day)
    {
            $this->OPENING_DAYS_day = $OPENING_DAYS_day;

            return $this;
    }


    public function getOpenLunch()
    {
            return $this->OPENING_DAYS_opening_time_lunch;
    }

    public function setOpenLunch($OPENING_DAYS_opening_time_lunch)
    {
            $this->OPENING_DAYS_opening_time_lunch = $OPENING_DAYS_opening_time_lunch;

            return $this;
    }
    
    
    public function getCloseLunch()
    {
            return $this->OPENING_DAYS_closing_time_lunch;
    }

    public function setCloseLunch($OPENING_DAYS_closing_time_lunch)
    {
            $this->OPENING_DAYS_closing_time_lunch = $OPENING_DAYS_closing_time_lunch;

            return $this;
    }    
   
    
       
    public function getOpenDiner()
    {
            return $this->OPENING_DAYS_opening_time_diner;
    }

    public function setOpenDiner($OPENING_DAYS_opening_time_diner)
    {
            $this->OPENING_DAYS_opening_time_diner = $OPENING_DAYS_opening_time_diner;

            return $this;
    }    
 


    public function getCloseDiner()
    {
            return $this->OPENING_DAYS_closing_time_diner;
    }


    public function setCloseDiner($OPENING_DAYS_closing_time_diner)
    {
            $this->OPENING_DAYS_closing_time_diner = $OPENING_DAYS_closing_time_diner;

            return $this;
    }


}