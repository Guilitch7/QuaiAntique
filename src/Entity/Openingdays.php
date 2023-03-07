<?php

namespace App\Entity;

use App\Repository\OpeningdaysRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OpeningdaysRepository::class)]
#[ORM\Table(name: "OPENINGDAYS")]

class Openingdays
{
    #[ORM\Id()]    
    #[ORM\Column(type: "string", nullable: false)]
    private string $OPENINGDAYSday;

    #[ORM\Column(type: "time", nullable: false)]
    private string $OPENINGDAYStimeslotlunch;

    #[ORM\Column(type: "time", nullable: false)]
    private string $OPENINGDAYStimeslotdinner;

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
            return $this->OPENINGDAYStimeslotlunch;
    }

    public function setOpenLunch($OPENINGDAYStimeslotlunch)
    {
            $this->OPENINGDAYStimeslotlunch = $OPENINGDAYStimeslotlunch;

            return $this;
    }
    
        
    public function getOpenDinner()
    {
            return $this->OPENINGDAYStimeslotdinner;
    }

    public function setOpenDinner($OPENINGDAYStimeslotdinner)
    {
            $this->OPENINGDAYStimeslotdinner = $OPENINGDAYStimeslotdinner;

            return $this;
    }    

}