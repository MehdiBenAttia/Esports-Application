<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    function find_reclam_by_level()
{
    $brigel=$this->getEntityManager()->getConnection();
    $sql='select reclamation.etat,reclamation.id,reclamation.nom_user,reclamation.message,reclamation.date,reclamation.email,categorie.catrec,categorie.level,reponses.rep
from categorie right JOIN reclamation on (categorie.id=reclamation.categorie_id) left JOIN reponses on (reponses.reclamation_id=reclamation.id) group by (reclamation.id)';
    ;
    $AntiRebic=$brigel->prepare($sql);
    return $AntiRebic->executeQuery()->fetchAllAssociative();

}
    function high()
    {
        $brigel=$this->getEntityManager()->getConnection();
        $sql='select reclamation.etat, reclamation.id,reclamation.nom_user,reclamation.message,reclamation.date,reclamation.email,categorie.catrec,categorie.level,reponses.rep
from categorie right JOIN reclamation on (categorie.id=reclamation.categorie_id) LEFT JOIN reponses on (reponses.reclamation_id=reclamation.id) where categorie.level like "high" group by (reclamation.id) ';
        ;
        $AntiRebic=$brigel->prepare($sql);
        return $AntiRebic->executeQuery()->fetchAllAssociative();

    }
    function med()
    {
        $brigel=$this->getEntityManager()->getConnection();
        $sql='select reclamation.etat,reclamation.id,reclamation.nom_user,reclamation.message,reclamation.date,reclamation.email,categorie.catrec,categorie.level,reponses.rep
from categorie right JOIN reclamation on (categorie.id=reclamation.categorie_id) LEFT JOIN reponses on (reponses.reclamation_id=reclamation.id) where categorie.level like "medium" group by (reclamation.id) ';
        ;
        $AntiRebic=$brigel->prepare($sql);
        return $AntiRebic->executeQuery()->fetchAllAssociative();

    }
    function low()
    {
        $brigel=$this->getEntityManager()->getConnection();
        $sql='select reclamation.etat, reclamation.id,reclamation.nom_user,reclamation.message,reclamation.date,reclamation.email,categorie.catrec,categorie.level,reponses.rep
from categorie right JOIN reclamation on (categorie.id=reclamation.categorie_id) LEFT JOIN reponses on (reponses.reclamation_id=reclamation.id) where categorie.level like "low" group by (reclamation.id) ';
        ;
        $AntiRebic=$brigel->prepare($sql);
        return $AntiRebic->executeQuery()->fetchAllAssociative();

    }

    // /**
    //  * @return Reclamation[] Returns an array of Reclamation objects
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
    public function findOneBySomeField($value): ?Reclamation
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
