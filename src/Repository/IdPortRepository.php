<?php

namespace App\Repository;

use App\Entity\IdPort;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IdPort|null find($id, $lockMode = null, $lockVersion = null)
 * @method IdPort|null findOneBy(array $criteria, array $orderBy = null)
 * @method IdPort[]    findAll()
 * @method IdPort[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IdPortRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IdPort::class);
    }

    // /**
    //  * @return IdPort[] Returns an array of IdPort objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IdPort
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
