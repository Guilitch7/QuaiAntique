<?php


namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
            $admin = new User($this->passwordHasher);

            $admin  ->setUserIdentifier('admin@antique.fr')
                    ->setRoles(['ROLE_ADMIN'])
                    ->setPassword('Antique20@23');

            $manager->persist($admin);

            $manager->flush();
    }
}