<?php

namespace App\Entity;

use App\Repository\OpeningdaysRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\Validator\Constraints\Time;

#[ORM\Entity(repositoryClass: OpeningdaysRepository::class)]
#[ORM\Table(name: "OPENINGDAYS")]

class Openingdays
{
    #[ORM\Id()]
    #[ORM\Column(type: "integer")]
    private int $OPENINGDAYSid;

    #[ORM\Column(type: "string", nullable: false)]
    private string $OPENINGDAYSday;

    #[ORM\Column(type: "boolean")]
    private ?bool $OPENINGDAYSnotOpenLunch;

    #[ORM\Column(type: "datetime", nullable: false)]
    private ?DateTime $OPENINGDAYStimeslotlunch;

    #[ORM\Column(type: "datetime", nullable: false)]
    private ?DateTime $OPENINGDAYScloseslotlunch;

    #[ORM\ManyToOne(inversedBy: 'slotLunch')]
    private ?Bookings $slotLunch = null;

    #[ORM\ManyToOne(inversedBy: 'slotDinner')]
    private ?Bookings $slotDinner = null;

    #[ORM\Column(type: "boolean")]
    private ?bool $OPENINGDAYSnotOpenDinner;

    #[ORM\Column(type: "datetime", nullable: false)]
    private ?DateTime $OPENINGDAYStimeslotdinner;

    #[ORM\Column(type: "datetime", nullable: false)]
    private ?DateTime $OPENINGDAYScloseslotdinner;

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


    public function getday()
    {
            return $this->OPENINGDAYSday;
    }

    public function setday($OPENINGDAYSday)
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

    public function getSlotLunch(): ?time
    {
        return $this->slotLunch;
    }


    public function setSlotLunch($slotLunch)
    {
        $this->slotLunch = $slotLunch;

        return $this;
    }


    public function getSlotDinner(): ?time
    {
        return $this->slotDinner;
    }


    public function setSlotDinner($slotDinner)
    {
        $this->slotDinner = $slotDinner;

        return $this;
    }
}