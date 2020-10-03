<?php

namespace App\Repository;

use App\Entity\CategoriesDeServices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategoriesDeServices|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoriesDeServices|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoriesDeServices[]    findAll()
 * @method CategoriesDeServices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoriesDeServicesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoriesDeServices::class);
    }

    // /**
    //  * @return CategoriesDeServices[] Returns an array of CategoriesDeServices objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategoriesDeServices
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
