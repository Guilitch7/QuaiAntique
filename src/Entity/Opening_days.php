<?php

namespace App\Entity;

use DateTime;
use Doctrine\DBAL\Types\DateType;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: "OPENINGDAYS")]

class Dishes
{
    #[ORM\Id()]    
    #[ORM\Column(type: "string", nullable: false)]
    private string $OPENINGDAYSday;

    #[ORM\Column(type: "time", nullable: false)]
    private string $OPENINGDAYSopeningtimelunch;

    #[ORM\Column(type: "time", nullable: false)]
    private string $OPENINGDAYSclosingtimelunch;

    #[ORM\Column(type: "time", nullable: false)]
    private string $OPENINGDAYSopeningtimediner;

    #[ORM\Column(type: "time", nullable: false)]
    private string $OPENINGDAYSclosingtimediner;

    public function getDay()
    {
            return $this->OPENINGDAYSday;
    }

    public function setDay($OPENINGDAYSday)
    {
            $this->OPENINGDAYSday = $OPENINGDAYSday;

            return $this;
    }


    public function getOpenLunch()
    {
            return $this->OPENINGDAYSopeningtimelunch;
    }

    public function setOpenLunch($OPENINGDAYSopeningtimelunch)
    {
            $this->OPENINGDAYSopeningtimelunch = $OPENINGDAYSopeningtimelunch;

            return $this;
    }
    
    
    public function getCloseLunch()
    {
            return $this->OPENINGDAYSclosingtimelunch;
    }

    public function setCloseLunch($OPENINGDAYSclosingtimelunch)
    {
            $this->OPENINGDAYSclosingtimelunch = $OPENINGDAYSclosingtimelunch;

            return $this;
    }    
   
    
       
    public function getOpenDiner()
    {
            return $this->OPENINGDAYSopeningtimediner;
    }

    public function setOpenDiner($OPENINGDAYSopeningtimediner)
    {
            $this->OPENINGDAYSopeningtimediner = $OPENINGDAYSopeningtimediner;

            return $this;
    }    
 


    public function getCloseDiner()
    {
            return $this->OPENINGDAYSclosingtimediner;
    }


    public function setCloseDiner($OPENINGDAYSclosingtimediner)
    {
            $this->OPENINGDAYSclosingtimediner = $OPENINGDAYSclosingtimediner;

            return $this;
    }


}