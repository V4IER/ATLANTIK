<?php

namespace App\Repository;

use App\Entity\ReservationEnLigne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReservationEnLigne|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationEnLigne|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationEnLigne[]    findAll()
 * @method ReservationEnLigne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationEnLigneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationEnLigne::class);
    }

    // /**
    //  * @return ReservationEnLigne[] Returns an array of ReservationEnLigne objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReservationEnLigne
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
