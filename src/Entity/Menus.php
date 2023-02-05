<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: "MENUS")]

class Menus
{
    #[ORM\Id()]
    #[ORM\Column(type: "string")]
    private string $MENUS_name;

    #[ORM\OneToMany(targetEntity:"App\Entity\Formula", mappedBy:"FORMULA_menus")]
    private string $MENUS_formula;

    #[ORM\Column(type: "string", nullable: false)]
    private string $MENUS_category_1;

    #[ORM\Column(type: "string", nullable: false)]
    private string $MENUS_category_2;

    #[ORM\Column(type: "string", nullable: false)]
    private string $MENUS_category_3;


    public function getMenuName()
    {
            return $this->MENUS_name;
    }

    public function setMenuName($MenuName)
    {
            $this->MENUS_name = $MenuName;

            return $this;
    }    


    public function getMenuFormula()
    {
            return $this->MENUS_formula;
    }

    public function setMenuFormula($MenuFormula)
    {
            $this->MENUS_formula = $MenuFormula;

            return $this;
    }  

    public function getMenuCategory1()
    {
            return $this->MENUS_category_1;
    }

    public function setMenuCategory1($MenuCategory1)
    {
            $this->MENUS_category_1 = $MenuCategory1;

            return $this;
    }  

    public function getMenuCategory2()
    {
            return $this->MENUS_category_2;
    }

    public function setMenuCategory2($MenuCategory2)
    {
            $this->MENUS_category_2 = $MenuCategory2;

            return $this;
    }  

    public function getMenuCategory3()
    {
            return $this->MENUS_category_3;
    }

    public function setMenuCategory3($MenuCategory3)
    {
            $this->MENUS_category_3 = $MenuCategory3;

            return $this;
    }  
}