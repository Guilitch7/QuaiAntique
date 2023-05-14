<?php

namespace App\Repository;

use App\Entity\Openingdays;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;


/**
 * @extends ServiceEntityRepository<Openingdays>
 *
 * @method Openingdays|null find($id, $lockMode = null, $lockVersion = null)
 * @method Openingdays|null findOneBy(array $criteria, array $orderBy = null)
 * @method Openingdays[]    findAll()
 * @method Openingdays[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OpeningdaysRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Openingdays::class);
    }

    public function save(Openingdays $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Openingdays $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
