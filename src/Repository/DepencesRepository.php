<?php

namespace App\Repository;

use App\Entity\Depences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Depences|null find($id, $lockMode = null, $lockVersion = null)
 * @method Depences|null findOneBy(array $criteria, array $orderBy = null)
 * @method Depences[]    findAll()
 * @method Depences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Depences::class);
    }

    // /**
    //  * @return Depences[] Returns an array of Depences objects
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
    public function findOneBySomeField($value): ?Depences
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
