<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MenuRepository::class)]
class Menu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'menu', targetEntity: Formule::class)]
    private Collection $formule;

    #[ORM\OneToMany(mappedBy: 'menu', targetEntity: Dishes::class)]
    private Collection $dishes;

    public function __construct()
    {
        $this->formule = new ArrayCollection();
        $this->dishes = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Formule>
     */
    public function getFormule(): Collection
    {
        return $this->formule;
    }


    public function addFormule(Formule $formule): self
    {
        if (!$this->formule->contains($formule)) {
            $this->formule->add($formule);
            $formule->setName(null);
        }

        return $this;
    }

    public function removeFormule(Formule $formule): self
    {
        if ($this->formule->removeElement($formule)) {
            // set the owning side to null (unless already changed)
            if ($formule->getName() === $this) {
                $formule->setName(null);
            }
        }

        return $this;
    }


    /**
     * Get the value of dishes
     */ 
    public function getDishes(): Collection
    {
        return $this->dishes;
    }

    /**
     * Set the value of dishes
     *
     * @return  self
     */ 
    public function setDishes($dishes)
    {
        $this->dishes = $dishes;

        return $this;
    }

    public function __toString()
    {
        return $this->name; // Supposons que "name" est une propriété de l'objet Menu que vous souhaitez afficher.
    }

}
