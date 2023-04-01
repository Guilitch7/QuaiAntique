<?php

namespace App\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private ?int $BOOKINGSLOTid;

    #[ORM\Column(type: "date", nullable: false)]
    private ?DateTime $BOOKINGSdatetime;

    #[ORM\Column(nullable: false)]
    private ?string $BOOKINGSday;

    #[ORM\OneToMany(mappedBy: 'slotLunch', targetEntity: Openingdays::class)]
    private Collection $slotLunch;

    #[ORM\OneToMany(mappedBy: 'slotDinner', targetEntity: Openingdays::class)]
    private Collection $slotDinner;

    public function __construct()
    {
        $this->slotLunch = new ArrayCollection();
        $this->slotDinner = new ArrayCollection();
    }

    #[ORM\Column(type: "string", nullable: false)]
    private ?string $BOOKINGSlastnameuser;

    #[ORM\Column(type: "integer", nullable: false)]
    private ?int $BOOKINGScoversnumber;

    #[ORM\Column(type: "string", nullable: false)]
    private ?string $BOOKINGSfoodallergies;

    public function getId(): int
    {
            return $this->BOOKINGSLOTid;
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
 
 
    /**
     * @return Collection<int, slotLunch>
     */
    public function getslotLunch(): Collection
    {
        return $this->slotLunch;
    }


    public function addslotLunch(Openingdays $slotLunch): self
    {
        if (!$this->slotLunch->contains($slotLunch)) {
            $this->slotLunch->add($slotLunch);
            $slotLunch->setslotLunch($this);
        }

        return $this;
    }

    public function removeslotLunch(Openingdays $slotLunch): void
    {
        if ($this->slotLunch->removeElement($slotLunch)) {
            // set the owning side to null (unless already changed)
            if ($slotLunch->getslotLunch() === $this) {
                $slotLunch->setslotLunch(null);
            }
        }
    }

    /**
     * @return Collection<int, slotDinner>
     */
    public function getslotDinner(): Collection
    {
        return $this->slotDinner;
    }


    public function addslotDinner(Openingdays $slotDinner): self
    {
        if (!$this->slotDinner->contains($slotDinner)) {
            $this->slotDinner->add($slotDinner);
            $slotDinner->setslotDinner($this);
        }

        return $this;
    }

    public function removeslotDinner(Openingdays $slotDinner): void
    {
        if ($this->slotDinner->removeElement($slotDinner)) {
            // set the owning side to null (unless already changed)
            if ($slotDinner->getslotDinner() === $this) {
                $slotDinner->setslotDinner(null);
            }
        }
    }


    public function getday()
    {
        return $this->BOOKINGSday;
    }


    public function setday($BOOKINGSday)
    {
        $this->BOOKINGSday = $BOOKINGSday;

        return $this;
    }
}