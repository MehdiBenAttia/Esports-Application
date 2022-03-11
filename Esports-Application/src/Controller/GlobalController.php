<?php

namespace App\Controller;

use App\Repository\CompetitionRepository;
use App\Repository\JeuxRepository;
use App\Repository\PostRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GlobalController extends AbstractController
{
    /**
     * @Route("/", name="global")
     */
    public function index(JeuxRepository $repository , CompetitionRepository $repositorycom , ProduitRepository $rep,PostRepository $post): Response
    {
       $jeux= $repository->findAll();
        $produit=$rep->findAll();
        $post=$post->findAll();
        $jeu=$repository->findAll();

        return $this->render('main.html.twig', compact(  'produit','jeux','post','jeu'));
    }
}
