<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: "user")]
#[UniqueEntity('userEmail',
message: 'Cet email est déjà utilisé')]

class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id()]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id = null;

    #[ORM\Column (type: 'json')]
    private array $userRole = [];

    #[ORM\Column (unique: true)]
    private ?string $userEmail = null;

    private $passwordHasher;

    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $userCoversNumber;

    #[ORM\Column(type: "json", nullable: false)]
    private ?array $userFoodAllergies;

    /**
     * @var string The hashed password
     *
     */
    #[ORM\Column(length: 180, unique: true)]
    private ?string $userPassword = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Bookings::class)]
    private Collection $Bookings;


    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
        $this->Bookings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->userEmail;
    }

    public function setUserIdentifier($userEmail)
    {
        $this->userEmail = $userEmail;
        
        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $userRole = $this->userRole;
        

        // guarantee every user at least has ROLE_USER
        $userRole[] = 'ROLE_USER';
        return array_unique($userRole);

    }

    public function setRoles(array $userRole): self
    {
        $this->userRole = $userRole;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->userPassword;
    }

    public function setPassword(?string $userPassword): self
    {
        $this->userPassword = $this->passwordHasher->hashPassword($this, $userPassword);

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
       // $this->userPassword = null;
    }

    
    public function getfoodAllergies()
    {
        return $this->userFoodAllergies;
    }


    public function setfoodAllergies($userFoodAllergies)
    {
        $this->userFoodAllergies = $userFoodAllergies;

        return $this;
    }


    public function getcoversNumber()
    {
        return $this->userCoversNumber;
    }


    public function setcoversNumber($userCoversNumber)
    {
        $this->userCoversNumber = $userCoversNumber;

        return $this;
    }

    /**
     * @return Collection<int, Bookings>
     */
    public function getBookings(): Collection
    {
        return $this->Bookings;
    }

    public function addBooking(Bookings $booking): self
    {
        if (!$this->Bookings->contains($booking)) {
            $this->Bookings->add($booking);
            $booking->setUser($this);
        }

        return $this;
    }

    public function removeBooking(Bookings $booking): self
    {
        if ($this->Bookings->removeElement($booking)) {
            // set the owning side to null (unless already changed)
            if ($booking->getUser () === $this) {
                $booking->setUser(null);
            }
        }

        return $this;
    }
}
