<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity()]
#[ORM\Table(name: "DISHES")]
#[Vich\Uploadable]

class Dishes
{
    #[ORM\Id()]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private int $DISHESid;

    #[ORM\Column(type: "string", nullable: false)]
    private string $DISHESname;

    #[ORM\Column(type: "float", nullable: false)]
    private float $DISHESprice;

    #[ORM\Column(type: "string", nullable: false)]
    private string $DISHEScategory;

    #[ORM\Column(type: "string", nullable: true)]
    private string $DISHEStype;

    #[ORM\Column(type: "string")]
    private ?string $DISHESdescription;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $DISHESphoto = null;

    #[ORM\Column(type: "boolean", nullable: true)]
    private string $DISHESmenusexpress;

    #[ORM\Column(type: "boolean", nullable: true)]
    private string $DISHESmenusmontagnard;

   

 
    public function getDISHESid()
    {
        return $this->DISHESid;
    }


    public function setDISHESid($id)
    {
        $this->DISHESid = $id;

        return $this;
    }


    public function getDISHESname()
    {
        return $this->DISHESname;
    }


    public function setDISHESname($DISHESname)
    {
        $this->DISHESname = $DISHESname;

        return $this;
    }


   
    public function getDISHESprice()
    {
        return $this->DISHESprice;
    }

    
    public function setDISHESprice($DISHESprice)
    {
        $this->DISHESprice = $DISHESprice;

        return $this;
    }

   
    public function getDISHEScategory()
    {
        return $this->DISHEScategory;
    }

  
    public function setDISHEScategory($DISHEScategory)
    {
        $this->DISHEScategory = $DISHEScategory;

        return $this;
    }

   
    public function getDISHEStype()
    {
        return $this->DISHEStype;
    }

  
    public function setDISHEStype($DISHEStype)
    {
        $this->DISHEStype = $DISHEStype;

        return $this;
    }

  
    public function getDISHESdescription()
    {
        return $this->DISHESdescription;
    }

  
    public function setDISHESdescription($DISHESdescription)
    {
        $this->DISHESdescription = $DISHESdescription;

        return $this;
    }

   
    public function getDISHESphoto(): ?string
    {
        return $this->DISHESphoto;
    }

  
    public function setDISHESphoto(? string $DISHESphoto): void
    {
        $this->DISHESphoto = $DISHESphoto;
    }

  
    public function getDISHESmenusexpress(): ?bool
    {
        return $this->DISHESmenusexpress;
    }

 
    public function setDISHESmenusexpress(bool $DISHESmenusexpress): self
    {
        $this->DISHESmenusexpress = $DISHESmenusexpress;

        return $this;
    }

 
    public function getDISHESmenusmontagnard(): ?bool
    {
        return $this->DISHESmenusmontagnard;
    }

  
    public function setDISHESmenusmontagnard(bool $DISHESmenusmontagnard): self
    {
        $this->DISHESmenusmontagnard = $DISHESmenusmontagnard;

        return $this;
    }
}