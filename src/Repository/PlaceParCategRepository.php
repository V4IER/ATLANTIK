<?php

namespace App\Repository;

use App\Entity\PlaceParCateg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PlaceParCateg|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlaceParCateg|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlaceParCateg[]    findAll()
 * @method PlaceParCateg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlaceParCategRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlaceParCateg::class);
    }

    // /**
    //  * @return PlaceParCateg[] Returns an array of PlaceParCateg objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PlaceParCateg
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
