<?php

namespace App\Entity;

use App\Repository\ClientsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: ClientsRepository::class)]
class Clients implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue (strategy:"AUTO")]
    #[ORM\Column]
    private ?int $CLIENTSid = null;

    private array $roles = [];

    #[ORM\Column]
    private ?string $CLIENTSemail = null;

    private $passwordHasher;

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

    public function setId(int $CLIENTSid): self
    {
        $this->CLIENTSid = $CLIENTSid;

        return $this;
    }


    public function getUserIdentifier(): string
    {
        return (string) $this->CLIENTSemail;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->CLIENTSpassword;
    }

    public function setPassword(string $CLIENTSpassword): self
    {
        $this->CLIENTSpassword = $this->passwordHasher->hashPassword($this, $CLIENTSpassword);

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    
}
