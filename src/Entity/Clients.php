<?php

namespace App\Entity;

use App\Repository\ClientsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: ClientsRepository::class)]
#[ORM\Table(name: "CLIENTS")]
#[UniqueEntity('CLIENTSemail')]
class Clients implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue (strategy:"AUTO")]
    #[ORM\Column]
    private ?int $CLIENTSid = null;

    #[ORM\Column (type: 'json')]
    private array $CLIENTSrole = [];

    #[ORM\Column (unique: true)]
    private ?string $CLIENTSemail = null;

    private $passwordHasher;

    private ?string $CLIENTSconfirm = null;

    #[ORM\Column(type: "integer", nullable: true)]
    private int $CLIENTScoversNumber;

    #[ORM\Column(type: "string", nullable: false)]
    private ?string $CLIENTSfoodAllergies;

    /**
     * @var string The hashed password
     *
     */
    #[ORM\Column(length: 180, unique: true)]
    private ?string $CLIENTSpassword = null;


    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function getId(): ?int
    {
        return $this->CLIENTSid;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->CLIENTSemail;
    }

    public function setUserIdentifier($CLIENTSemail)
    {
        $this->CLIENTSemail = $CLIENTSemail;
        
        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $CLIENTSrole = $this->CLIENTSrole;
        $CLIENTSrole[] = 'ROLE_USER';

        return array_unique($CLIENTSrole);
    }

    public function setRoles(array $CLIENTSrole): self
    {
        $this->CLIENTSrole = $CLIENTSrole;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->CLIENTSpassword;
    }

    public function setPassword(?string $CLIENTSpassword): self
    {
        $this->CLIENTSpassword = $this->passwordHasher->hashPassword($this, $CLIENTSpassword);

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
       // $this->CLIENTSpassword = null;
    }

    
    public function getfoodAllergies()
    {
        return $this->CLIENTSfoodAllergies;
    }


    public function setfoodAllergies($CLIENTSfoodAllergies)
    {
        $this->CLIENTSfoodAllergies = $CLIENTSfoodAllergies;

        return $this;
    }


    public function getcoversNumber()
    {
        return $this->CLIENTScoversNumber;
    }


    public function setcoversNumber($CLIENTScoversNumber)
    {
        $this->CLIENTScoversNumber = $CLIENTScoversNumber;

        return $this;
    }

    
    public function getconfirm()
    {
        return $this->CLIENTSconfirm;
    }

    
    public function setconfirm($CLIENTSconfirm)
    {
        $this->CLIENTSconfirm = $CLIENTSconfirm;

        return $this;
    }
}
