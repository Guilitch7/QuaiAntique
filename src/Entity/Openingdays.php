<?php

namespace App\Entity;

use App\Repository\OpeningdaysRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OpeningdaysRepository::class)]
#[ORM\Table(name: "OPENINGDAYS")]

class Openingdays
{
    #[ORM\Id()]
    #[ORM\Column(type: "integer")]
    private int $OPENINGDAYSid;

    #[ORM\Column(type: "string", nullable: false)]
    private $OPENINGDAYSday;

    #[ORM\Column(type: "boolean")]
    private ?bool $OPENINGDAYSnotOpenLunch;

    #[ORM\Column(type: "datetime", nullable: false)]
    private ?DateTime $OPENINGDAYStimeslotlunch;

    #[ORM\Column(type: "datetime", nullable: false)]
    private ?DateTime $OPENINGDAYScloseslotlunch;

    #[ORM\Column(type: "boolean")]
    private ?bool $OPENINGDAYSnotOpenDinner;

    #[ORM\Column(type: "datetime", nullable: false)]
    private ?DateTime $OPENINGDAYStimeslotdinner;

    #[ORM\Column(type: "datetime", nullable: false)]
    private ?DateTime $OPENINGDAYScloseslotdinner;

    #[ORM\Column(type: "time")]
    private $slotLunch;

    #[ORM\Column(type: "integer", nullable: false)]
    private ?int $OPENINGDAYScoversPossible;


    public function getid()
    {
        return $this->OPENINGDAYSid;
    }


    public function setid($id)
    {
        $this->OPENINGDAYSid = $id;

        return $this;
    }


    public function getOPENINGDAYSday()
    {
            return $this->OPENINGDAYSday;
    }

    public function setOPENINGDAYSday($OPENINGDAYSday)
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


    public function getcloselunch()
    {
        return $this->OPENINGDAYScloseslotlunch;
    }


    public function setcloselunch($OPENINGDAYScloseslotlunch)
    {
        $this->OPENINGDAYScloseslotlunch = $OPENINGDAYScloseslotlunch;

        return $this;
    }


    public function getclosedinner()
    {
        return $this->OPENINGDAYScloseslotdinner;
    }

    public function setclosedinner($OPENINGDAYScloseslotdinner)
    {
        $this->OPENINGDAYScloseslotdinner = $OPENINGDAYScloseslotdinner;

        return $this;
    }

    public function getnotOpenLunch()
    {
        return $this->OPENINGDAYSnotOpenLunch;
    }


    public function setnotOpenLunch($OPENINGDAYSnotOpenLunch)
    {
        $this->OPENINGDAYSnotOpenLunch = $OPENINGDAYSnotOpenLunch;

        return $this;
    }

    public function getnotOpenDinner()
    {
        return $this->OPENINGDAYSnotOpenDinner;
    }


    public function setnotOpenDinner($OPENINGDAYSnotOpenDinner)
    {
        $this->OPENINGDAYSnotOpenDinner = $OPENINGDAYSnotOpenDinner;

        return $this;
    }

    public function getcoversPossible()
    {
        return $this->OPENINGDAYScoversPossible;
    }

    public function setcoversPossible($OPENINGDAYScoversPossible)
    {
        $this->OPENINGDAYScoversPossible = $OPENINGDAYScoversPossible;

        return $this;
    }


    public function getslotLunch()
    {
        return $this->slotLunch;
    }


    public function setslotLunch($slotLunch, $OPENINGDAYStimeslotlunch, $OPENINGDAYStimeslotdinner, $OPENINGDAYScloseslotlunch, $OPENINGDAYScloseslotdinner)
    {
        $OPENINGDAYStimeslotlunch->getOpenLunch;
        $LunchOpen = mktime($OPENINGDAYStimeslotlunch);
        $OPENINGDAYScloseslotlunch->getCloseLunch();
        $LunchClose = mktime($OPENINGDAYScloseslotlunch);

        $OPENINGDAYStimeslotdinner->getOpenDinner;
        $DinnerOpen = mktime($OPENINGDAYStimeslotdinner);
        $OPENINGDAYScloseslotdinner->getCloseDinner();
        $DinnerClose = mktime($OPENINGDAYScloseslotdinner);

        $OPENINGDAYSslotLunch = [];

        $i=0;
        while(($LunchClose-($LunchOpen+$i+3600))>0){
            array_push($daySlots,($LunchClose-($LunchOpen+$i+3600)));
            $i+=900;
        }
        $j=0;
        while(($DinnerClose-($DinnerOpen+$j+3600))>0){
            array_push($daySlots,($DinnerClose-($DinnerOpen+$j+3600)));
            $j+900;
        } 
        
        $this->slotLunch = $OPENINGDAYSslotLunch;

        return $this;
    }
}