<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\MenusRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MenusRepository::class)]
#[ORM\Table(name: "MENUS")]

class Menus
{
    #[ORM\Id()]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer", nullable: false)]
    private int $MENUSid;

    #[ORM\Column(type: "string", nullable: false)]
    private string $MENUSname;

    #[ORM\OneToMany(targetEntity: Formula::class, mappedBy: 'FORMULAmenu')]
    private $MENUSformulas;

    #[ORM\Column(type: "string", nullable: false)]
    private string $MENUScategory1;

    #[ORM\Column(type: "string", nullable: false)]
    private string $MENUScategory2;

    #[ORM\Column(type: "string", nullable: false)]
    private string $MENUScategory3;


    public function __construct() {
        $this->MENUSformulas = new ArrayCollection();
    }

    public function getMenuName()
    {
            return $this->MENUSname;
    }

    public function setMenuName($MenuName)
    {
            $this->MENUSname = $MenuName;

            return $this;
    }    

    /**
     * @return Collection|MenusFormulas[]
     */

    public function getMenusFormulas():?Collection
    {
            return $this->MENUSformulas;
    }

    public function setMenusFormulas($MenusFormulas)
    {
        $this->MENUSformulas = $MenusFormulas;

            return $this;
    }  

    public function getMenuCategory1()
    {
            return $this->MENUScategory1;
    }

    public function setMenuCategory1($MenuCategory1)
    {
            $this->MENUScategory1 = $MenuCategory1;

            return $this;
    }  

    public function getMenuCategory2()
    {
            return $this->MENUScategory2;
    }

    public function setMenuCategory2($MenuCategory2)
    {
            $this->MENUScategory2 = $MenuCategory2;

            return $this;
    }  

    public function getMenuCategory3()
    {
            return $this->MENUScategory3;
    }

    public function setMenuCategory3($MenuCategory3)
    {
            $this->MENUScategory3 = $MenuCategory3;

            return $this;
    }  

    public function getMenuId()
    {
        return $this->MENUSid;
    }
}