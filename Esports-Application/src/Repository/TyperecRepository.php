<?php

namespace App\Repository;

use App\Entity\Typerec;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Typerec|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typerec|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typerec[]    findAll()
 * @method Typerec[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TyperecRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Typerec::class);
    }

    // /**
    //  * @return Typerec[] Returns an array of Typerec objects
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
    public function findOneBySomeField($value): ?Typerec
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
