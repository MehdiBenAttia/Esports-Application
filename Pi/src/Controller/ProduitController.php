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
    /**
     * @Route("/afficherpanier", name="afficherpanier")
     */
    public function afficherpanier(SessionInterface $session, ProduitRepository $productsRepository)
    {
        $panier = $session->get("panier", []);

        // On "fabrique" les données
        $dataPanier = [];
        $total = 0;

        foreach($panier as $id => $quantite){
            $product = $productsRepository->find($id);
            $dataPanier[] = [
                "produit" => $product,
                "quantite" => $quantite
            ];
            $total += $product->getPrix() * $quantite;
        }

        return $this->render('/panier/affiche.html.twig', compact("dataPanier", "total"));
    }
    /**
     * @Route("/panier/add/{id}", name="add_cart")
     */
    public function add(Produit $product, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $product->getId();

        if(!empty($panier[$id])){
            $panier[$id]++;
        }else{
            $panier[$id] = 1;
        }

        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("afficheproduit");
    }/**
 * @Route("/panier/addpanier/{id}", name="add_panier")
 */
    public function add_panier(Produit $product, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $product->getId();

        if(!empty($panier[$id])){
            $panier[$id]++;
        }else{
            $panier[$id] = 1;
        }

        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("afficherpanier");
    }
    /**
     * @Route("/supprimer/{id}", name="cart_remove")
     */
    public function remove($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);

        if (empty($panier[$id])) {

            unset($panier[$id]);

        }
        else  {
            $panier[$id]--;
        }


        $session->set('panier', $panier);

        return $this->redirectToRoute('afficherpanier');
    }
}


