<?php

namespace App\Repository;

use App\Entity\Reply;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reply|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reply|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reply[]    findAll()
 * @method Reply[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReplyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reply::class);
    }
    function aff_re (){
        $conn=$this->getEntityManager()->getConnection();
        $sql='select commentaire.descriptionc,commentaire.nomuser,count(reply.commentaire_id) as core, reply.nom_user,reply.descriptionr,reply.date_r,reply.commentaire_id FROM commentaire INNER JOIN reply on (commentaire.id=reply.commentaire_id) GROUP by (commentaire.id)';
        $stmt=$conn->prepare($sql);
        return $stmt->executeQuery()->fetchAllAssociative();
    }

    // /**
    //  * @return Reply[] Returns an array of Reply objects
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
    public function findOneBySomeField($value): ?Reply
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
