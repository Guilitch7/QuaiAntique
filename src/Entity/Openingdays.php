<?php

namespace App\Entity;

use App\Repository\OpeningdaysRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(mappedBy: 'openingdays', targetEntity: Bookings::class)]
    private Collection $bookings;

    public function __construct()
    {
        $this->bookings = new ArrayCollection();
    }


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

    /**
     * @return Collection<int, Bookings>
     */
    public function getBookings(): Collection
    {
        return $this->bookings;
    }

    public function addBooking(Bookings $booking): self
    {
        if (!$this->bookings->contains($booking)) {
            $this->bookings->add($booking);
            $booking->setOpeningdays($this);
        }

        return $this;
    }

    public function removeBooking(Bookings $booking): self
    {
        if ($this->bookings->removeElement($booking)) {
            if ($booking->getOpeningdays() === $this) {
                $booking->setOpeningdays(null);
            }
        }

        return $this;
    }
}