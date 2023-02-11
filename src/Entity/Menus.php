<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: "MENUS")]

class Menus
{
    #[ORM\Id()]
    #[ORM\Column(type: "string")]
    private string $MENUSname;

    #[ORM\OneToMany(targetEntity:"App\Entity\Formula", mappedBy:"FORMULAmenu")]
    private $MENUSformula;

    #[ORM\Column(type: "string", nullable: false)]
    private string $MENUScategory1;

    #[ORM\Column(type: "string", nullable: false)]
    private string $MENUScategory2;

    #[ORM\Column(type: "string", nullable: false)]
    private string $MENUScategory3;


    public function getMenuName()
    {
            return $this->MENUSname;
    }

    public function setMenuName($MenuName)
    {
            $this->MENUSname = $MenuName;

            return $this;
    }    


    public function getMenuFormula()
    {
            return $this->MENUSformula;
    }

    public function setMenuFormula($MenuFormula)
    {
        $this->MENUSformula = $MenuFormula;

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
}