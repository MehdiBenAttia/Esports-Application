<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Doctrine_Query;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\Query;


/**
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    function  findmain()
    {
        $conn = $this->getEntityManager()
            ->getConnection();
        $sql='


select categorie.nom_categ, produit.nom,produit.marque,produit.prix,produit.type,produit.image
     ,produit.categorie_id,produit.id from categorie
    JOIN produit on (categorie.id=produit.categorie_id) ;
  ';
        $stmt = $conn->prepare($sql);
        return $stmt->executeQuery()->fetchAllAssociative();

    }



    function  kbir()
    {
        $conn = $this->getEntityManager()
            ->getConnection();
        $sql='


select  produit.reference,produit.id,produit.nom,produit.marque,produit.prix,produit.type,produit.image
     ,produit.categorie_id,categorie.nom_categ,ROUND(AVG(review.note_produit),1) as e  from review RIGHT join   
     produit on (review.produit_id=produit.id) inner join categorie on (produit.categorie_id=categorie.id) group by (produit.id)  order by produit.prix DESC 
  ';
        $stmt = $conn->prepare($sql);
        return $stmt->executeQuery()->fetchAllAssociative();

    }
    function  sghir()
    {
        $conn = $this->getEntityManager()
            ->getConnection();
        $sql='


select  produit.reference,produit.id,produit.nom,produit.marque,produit.prix,produit.type,produit.image
     ,produit.categorie_id,categorie.nom_categ,ROUND(AVG(review.note_produit),1) as e  from review RIGHT join   
     produit on (review.produit_id=produit.id) inner join categorie on (produit.categorie_id=categorie.id) group by (produit.id)  order by produit.prix ASC 
  ';
        $stmt = $conn->prepare($sql);
        return $stmt->executeQuery()->fetchAllAssociative();

    }
    function  normal()
    {
        $conn = $this->getEntityManager()
            ->getConnection();
        $sql='


select  produit.reference,produit.id,produit.nom,produit.marque,produit.prix,produit.type,produit.image
     ,produit.categorie_id,categorie.nom_categ,ROUND(AVG(review.note_produit),1) as e  from review RIGHT join   
     produit on (review.produit_id=produit.id) inner join categorie on (produit.categorie_id=categorie.id) group by (produit.id);
  ';
        $stmt = $conn->prepare($sql);
        return $stmt->executeQuery()->fetchAllAssociative();

    }




    public function findEntitiesByString($str){

        return $this->getEntityManager()
            ->createQuery(
                'SELECT p
                FROM App:Produit p
                WHERE p.nom LIKE :str'
            )
            ->setParameter('str', '%'.$str.'%')
            ->getResult();
    }

    public function findCompetitionbyname($name)
    {
        return $this->createQueryBuilder('produit')


            ->where('produit.nom LIKE :nom')
            ->orWhere('produit.marque like :nom')

            ->setParameter('nom','%'.$name.'%')

            ->getQuery()
            ->getResult();




    }

    public function findbyprice($price)
    {
        return $this->createQueryBuilder('produit')
            ->setParameter('max', $price)


            ->getQuery()
            ->getResult();




    }


    function  detail()
    {
        $conn = $this->getEntityManager()
            ->getConnection();
        $sql='


select  review.note_produit,review.avis
      from 
     review inner join produit on (review.produit_id=produit.id) 
  ';
        $stmt = $conn->prepare($sql);
        return $stmt->executeQuery()->fetchAllAssociative();

    }
    function  calculcom()
    {
        $conn = $this->getEntityManager()
            ->getConnection();
        $sql='


        

select categorie.nom_categ, produit.nom,produit.image,produit.prix,produit.marque,produit.id, produit.categorie_id, 
       COUNT(review.produit_id) as f from categorie INNER JOIN  
    produit on (categorie.id=produit.categorie_id) LEFT JOIN review on (produit.id=review.produit_id) GROUP by (produit.id) 

  ';
        $stmt = $conn->prepare($sql);
        return $stmt->executeQuery()->fetchAllAssociative();


    }





    // /**
    //  * @return Produit[] Returns an array of Produit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Produit
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
