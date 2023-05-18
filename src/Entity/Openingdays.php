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
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(type: "integer", nullable: false)]
    private ?int $orderDay = null;

    #[ORM\Column(type: "string", nullable: false)]
    private $OPENINGDAYSday;

    #[ORM\Column(type: "boolean")]
    private ?bool $OPENINGDAYSnotOpenLunch;

    #[ORM\Column(type: "datetime", nullable: false)]
    private ?DateTime $OPENINGDAYStimeslotlunch;

    #[ORM\Column(type: "datetime", nullable: false)]
    private ?DateTime $OPENINGDAYScloseslotlunch;

    #[ORM\Column(type: "datetime", nullable: false)]
    private ?DateTime $OPENINGDAYStimeslotdinner;

    #[ORM\Column(type: "datetime", nullable: false)]
    private ?DateTime $OPENINGDAYScloseslotdinner;

    #[ORM\Column(type: "integer", nullable: false)]
    private ?int $avaibilities;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getcoversPossible()
    {
        return $this->avaibilities;
    }

    public function setcoversPossible($avaibilities)
    {
        $this->avaibilities = $avaibilities;

        return $this;
    }

    public function __toString()
    {
        return gettype($this->getOpenLunch());
    }

    public function getOrderDay()
    {
        return $this->orderDay;
    }

    public function setOrderDay($orderDay)
    {
        $this->orderDay = $orderDay;

        return $this;
    }
}