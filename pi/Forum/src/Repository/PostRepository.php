<?php

namespace App\Repository;

use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Post|null find($id, $lockMode = null, $lockVersion = null)
 * @method Post|null findOneBy(array $criteria, array $orderBy = null)
 * @method Post[]    findAll()
 * @method Post[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }

    function aff (){
        $conn=$this->getEntityManager()->getConnection();
        $sql='SELECT post.id,post.sujet,post.description,post.nbr_jaime,post.image,post.nom_user,post.date_p,post.communaute,count(commentaire.id) as co FROM post left JOIN commentaire ON (post.id=commentaire.post_id)GROUP BY post.id';
        $stmt=$conn->prepare($sql);
        return $stmt->executeQuery()->fetchAllAssociative();
    }
    function latest_posts (){
        $conn=$this->getEntityManager()->getConnection();
        $sql='SELECT post.id,post.sujet,post.description,post.nbr_jaime,post.image,post.nom_user,post.date_p,post.communaute,count(commentaire.id) as co FROM post left JOIN commentaire ON (post.id=commentaire.post_id)GROUP BY post.id ORDER BY post.date_p desc LIMIT 2';
        $stmt=$conn->prepare($sql);
        return $stmt->executeQuery()->fetchAllAssociative();
    }
    function count_po (){
        $conn=$this->getEntityManager()->getConnection();
        $sql='SELECT COUNT(id) AS copo FROM post';
        $stmt=$conn->prepare($sql);
        return $stmt->executeQuery()->fetchAllAssociative();
    }
    function tri_com_desc (){
        $conn=$this->getEntityManager()->getConnection();
        $sql='SELECT post.id,post.sujet,post.description,post.nbr_jaime,post.image,post.nom_user,post.date_p,post.communaute,count(commentaire.id) as co FROM post left JOIN commentaire ON (post.id=commentaire.post_id)GROUP BY post.id ORDER BY co DESC';
        $stmt=$conn->prepare($sql);
        return $stmt->executeQuery()->fetchAllAssociative();
    }
    function tri_com_asc (){
        $conn=$this->getEntityManager()->getConnection();
        $sql='SELECT post.id,post.sujet,post.description,post.nbr_jaime,post.image,post.nom_user,post.date_p,post.communaute,count(commentaire.id) as co FROM post left JOIN commentaire ON (post.id=commentaire.post_id)GROUP BY post.id ORDER BY co ASC';
        $stmt=$conn->prepare($sql);
        return $stmt->executeQuery()->fetchAllAssociative();
    }

    // /**
    //  * @return Post[] Returns an array of Post objects
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
    public function findOneBySomeField($value): ?Post
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
