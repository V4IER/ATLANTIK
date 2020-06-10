<?php

namespace App\Repository;

use App\Entity\DetailReserv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DetailReserv|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetailReserv|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetailReserv[]    findAll()
 * @method DetailReserv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetailReservRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetailReserv::class);
    }

    // /**
    //  * @return DetailReserv[] Returns an array of DetailReserv objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DetailReserv
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
