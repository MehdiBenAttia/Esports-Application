<?php

namespace App\Repository;

use App\Entity\CategorieC;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategorieC|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategorieC|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategorieC[]    findAll()
 * @method CategorieC[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieCRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategorieC::class);
    }

    // /**
    //  * @return CategorieC[] Returns an array of CategorieC objects
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
    public function findOneBySomeField($value): ?CategorieC
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    */
    public function findOneByNomXX($value): ?CategorieC
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.nom = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }
}
