<?php

namespace App\Repository;

use App\Entity\Traversees;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Traversees|null find($id, $lockMode = null, $lockVersion = null)
 * @method Traversees|null findOneBy(array $criteria, array $orderBy = null)
 * @method Traversees[]    findAll()
 * @method Traversees[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TraverseesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Traversees::class);
    }

    // /**
    //  * @return Traversees[] Returns an array of Traversees objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Traversees
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
