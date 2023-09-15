<?php

namespace App\Repository;

use App\Entity\Dishes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @extends ServiceEntityRepository<Dishes>
 *
 * @method Dishes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dishes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dishes[]    findAll()
 * @method Dishes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DishesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dishes::class);
    }


    
    public function save(Dishes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dishes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    // appel en BDD pour présentation sur pas d'accueail des derniers enregistrements

    public function getLastDishesRegistered(string $category)
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d
            FROM App\Entity\Dishes d
            WHERE d.DISHEScategory = :category AND d.DISHESphoto IS NOT NULL
            ORDER BY d.DISHESid
            DESC'
        )
        ->setParameter("category", $category)
        ->setMaxResults(1);
        
        return $query -> getResult();
    }

    public function apiFindAll():array
    {
        $qb = $this->createQueryBuilder('b')
        ->select('b.DISHESid', 'b.DISHESname', 'b.DISHESprice', 'b.DISHESdescription', 'b.DISHESphoto')
        ->orderBy('b.DISHESname','ASC');

        $query = $qb->getQuery();
        return $query->execute();
    }
}
