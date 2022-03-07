<?php

namespace App\Repository;

use App\Entity\Jeux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Jeux|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jeux|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jeux[]    findAll()
 * @method Jeux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JeuxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Jeux::class);
    }

    function  nbr()
    {
        $conn=$this->getEntityManager()->getConnection();
        $sql='SELECT jeux.id,jeux.nom,jeux.image,jeux.dates,categorie.nom as c ,count(competition.jeux_id) as f FROM 
                                                                                   competition RIGHT JOIN 
                                                                                       jeux on (competition.jeux_id=jeux.id) 
                                                                                       JOIN categorie 
                                                                                           on (categorie.id=jeux.categorie_id) GROUP by
                                                                                                (jeux.id); ';
        $stmt=$conn->prepare($sql);
        return $stmt->executeQuery()->fetchAllAssociative();
    }




    /**
     * @return Jeux[] Returns an array of Cities objects
     */
    public function findByName($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.nom like :query')
            ->setParameter('query', "%" . $value . "%")
            // ->orderBy('c.id', 'ASC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }
    // /**
    //  * @return Jeux[] Returns an array of Jeux objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Jeux
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

//    public function findEntitiesByString($str){
//        return $this->getEntityManager()
//            ->createQuery(
//                'SELECT e
//                FROM AppBundle:Jeux e
//                WHERE e.foo LIKE :str'
//            )
//            ->setParameter('str', '%'.$str.'%')
//            ->getResult();
//    }
}
