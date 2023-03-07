<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: "FORMULA")]

class Formula
{
    #[ORM\Id()]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private ?int $FORMULAid;

    #[ORM\Column(type: "float", nullable: false)]
    private ?float $FORMULAprice;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $FORMULAdescription;

    #[ORM\ManyToOne(targetEntity: Menus::class, inversedBy: 'MENUSformulas')]
    #[ORM\JoinColumn(nullable: false)]
    private $FORMULAmenu;

    public function getId()
    {
            return $this->FORMULAid;
    }

    
    public function getFormulaPrice()
    {
            return $this->FORMULAprice;
    }

    public function setFormulaPrice($FORMULAprice)
    {
            $this->FORMULAprice = $FORMULAprice;

            return $this;
    }    
   
    
       
    public function getFormulaDescription()
    {
            return $this->FORMULAdescription;
    }

    public function setFormulaDescription($FORMULAdescription)
    {
            $this->FORMULAdescription = $FORMULAdescription;

            return $this;
    }    
 
    
    public function getFormulaMenu()
    {
            return $this->FORMULAmenu;
    }


    public function setFormulaMenu($FORMULAmenu)
    {
            $this->FORMULAmenu = $FORMULAmenu;

            return $this;
    }
}