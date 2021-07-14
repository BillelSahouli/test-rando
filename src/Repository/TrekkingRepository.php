<?php

namespace App\Repository;

use App\Entity\Trekking;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Trekking|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trekking|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trekking[]    findAll()
 * @method Trekking[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrekkingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trekking::class);
    }

    // /**
    //  * @return Trekking[] Returns an array of Trekking objects
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
    public function findOneBySomeField($value): ?Trekking
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
