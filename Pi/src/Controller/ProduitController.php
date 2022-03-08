<?php

namespace App\Controller;
use App\Entity\Commande;

use App\Entity\Panier;
use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    /**
     * @param ProduitRepository $repository
     * @return Response
     * @route("/affiche/produit" ,name="afficheproduit")
     */
    function Affiche(ProduitRepository $repository) //meme chose que metre 33 ligne
    {
        //$repo=$this->getDoctrine()->getRepository(ClassroomRepository::class);
        $produit=$repository->findAll();
        return $this->render('/produit/affiche.html.twig',['c'=>$produit]);

    }

}


