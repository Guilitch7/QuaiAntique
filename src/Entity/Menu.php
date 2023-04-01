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

    #[ORM\Column(length: 255)]
    private ?string $category1 = null;

    #[ORM\Column(length: 255)]
    private ?string $category2 = null;

    #[ORM\Column(length: 255)]
    private ?string $category3 = null;

    public function __construct()
    {
        $this->formule = new ArrayCollection();
    }
    public function __toString()
    {
        return $this->formule;
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

    public function getCategory1(): ?string
    {
        return $this->category1;
    }

    public function setCategory1(string $category1): self
    {
        $this->category1 = $category1;

        return $this;
    }

    public function getCategory2(): ?string
    {
        return $this->category2;
    }

    public function setCategory2(string $category2): self
    {
        $this->category2 = $category2;

        return $this;
    }

    public function getCategory3(): ?string
    {
        return $this->category3;
    }

    public function setCategory3(string $category3): self
    {
        $this->category3 = $category3;

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
            $formule->setName($this);
        }

        return $this;
    }

    public function removeFormula(Formule $formule): self
    {
        if ($this->formule->removeElement($formule)) {
            // set the owning side to null (unless already changed)
            if ($formule->getName() === $this) {
                $formule->setName(null);
            }
        }

        return $this;
    }


}
