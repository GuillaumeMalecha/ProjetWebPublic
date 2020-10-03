<?php

namespace App\Repository;

use App\Entity\Localité;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Localité|null find($id, $lockMode = null, $lockVersion = null)
 * @method Localité|null findOneBy(array $criteria, array $orderBy = null)
 * @method Localité[]    findAll()
 * @method Localité[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocalitéRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Localité::class);
    }

    // /**
    //  * @return Localité[] Returns an array of Localité objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Localité
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
