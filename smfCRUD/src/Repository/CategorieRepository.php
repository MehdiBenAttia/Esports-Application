<?php

namespace App\Repository;

use App\Entity\Categorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\AST\Join;
use Doctrine\ORM\Doctrine_Query;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\FetchMode;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

/**
 * @method Categorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categorie[]    findAll()
 * @method Categorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categorie::class);
    }
    public function affich_produit_nbr()
    {
        $conn = $this->getEntityManager()
            ->getConnection();
        $sql = '
          SELECT categorie.id,categorie.nom_categ,categorie.nom_fournisseur,categorie.mail_fournisseur,
 COUNT(produit.categorie_id) as f
 FROM categorie LEFT JOIN produit ON (categorie.id=produit.categorie_id)
 GROUP BY ( categorie.id) 
            ';
        $stmt = $conn->prepare($sql);
        return $stmt->executeQuery()->fetchAllAssociative();

    }




    // /**
    //  * @return Categorie[] Returns an array of Categorie objects
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
    public function findOneBySomeField($value): ?Categorie
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
