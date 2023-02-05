<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: "FORMULA")]

class Formula
{
    #[ORM\Id()]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private int $FORMULA_id;

    #[ORM\Column(type: "float", nullable: false)]
    private float $FORMULA_price;

    #[ORM\Column(type: "string", nullable: true)]
    private string $FORMULA_description;

    #[ORM\ManyToOne(targetEntity:"app\Entity\Menus", inversedBy:"MENUS_formula")]
    private string $FORMULA_menu;

    public function getId(): int
    {
            return $this->FORMULA_id;
    }

    
    public function getFormulaPrice()
    {
            return $this->FORMULA_price;
    }

    public function setFormulaPrice($FORMULA_price)
    {
            $this->FORMULA_price = $FORMULA_price;

            return $this;
    }    
   
    
       
    public function getFormulaDescription()
    {
            return $this->FORMULA_description;
    }

    public function setFormulaDescription($FORMULA_description)
    {
            $this->FORMULA_description = $FORMULA_description;

            return $this;
    }    
 
    
    public function getFormulaMenu()
    {
            return $this->FORMULA_menu;
    }


    public function setFormulaMenu($FORMULA_menu)
    {
            $this->FORMULA_menu = new Collection();

            return $this;
    }
}