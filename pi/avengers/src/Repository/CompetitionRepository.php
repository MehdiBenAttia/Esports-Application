<?php

namespace App\Repository;

use App\Entity\Competition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Competition|null find($id, $lockMode = null, $lockVersion = null)
 * @method Competition|null findOneBy(array $criteria, array $orderBy = null)
 * @method Competition[]    findAll()
 * @method Competition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompetitionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Competition::class);
    }

    public function findCompetitionbyname($name)
    {
        return $this->createQueryBuilder('competition')
                    ->where('competition.nom LIKE :nom')
                    ->setParameter('nom','%'.$name.'%')
                    ->getQuery()
                    ->getResult();
    }

    public function trie_croissant_datedeb()
    {
        return $this->createQueryBuilder('competition')
           ->orderBy('competition.datedeb','ASC')
            ->getQuery()
            ->getResult();
    }

    public function trie_decroissant_datedeb()
    {
        return $this->createQueryBuilder('competition')
            ->orderBy('competition.datedeb','DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @route ("/choix_categorie/{id}", name="choix_categorie")
     */

    public function choix_categorie(CategorieRepository $categorieRepository , $id)
    {
        $categories = $categorieRepository->find($id);
        return $this->render('competition/choix_categorie.html.twig', [
            'categories'=>$categories
        ]);
    }
}
