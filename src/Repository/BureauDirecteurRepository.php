<?php

namespace App\Repository;

use App\Entity\BureauDirecteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method BureauDirecteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method BureauDirecteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method BureauDirecteur[]    findAll()
 * @method BureauDirecteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BureauDirecteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BureauDirecteur::class);
    }

    // /**
    //  * @return BureauDirecteur[] Returns an array of BureauDirecteur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BureauDirecteur
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
