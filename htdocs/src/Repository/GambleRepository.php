<?php

namespace App\Repository;

use App\Entity\Gamble;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Gamble|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gamble|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gamble[]    findAll()
 * @method Gamble[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GambleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gamble::class);
    }

    // /**
    //  * @return Gamble[] Returns an array of Gamble objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Gamble
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
