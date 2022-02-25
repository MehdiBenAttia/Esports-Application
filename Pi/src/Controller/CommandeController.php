<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Produit;

use App\Entity\Commande;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class CommandeController extends AbstractController
{
    /**
     * @Route("/commande", name="commande")
     */
    public function index(): Response
    {
        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
        ]);
    }

    /**
     * @param Request $request
     * @param SessionInterface $session
     * @return Response
     * @Route ("/Ajoutcommande",name="Ajoutcommande",methods={"GET","POST"})
     */
    function Ajout(Request $request, SessionInterface $session, ProduitRepository $produitRepository, CommandeRepository $commandeRepository)
    {
        $panier = $session->get("panier", []);
        $dataPanier = [];
        $total = 0;
        $produits = [];
        $em = $this->getDoctrine()->getManager();
        //dd($panier);
        foreach ($panier as $id => $quantite) {
            $product = $produitRepository->find($id);
            $dataPanier[] = [
                "produit" => $product,
                "quantite" => $quantite
            ];
            $total += $product->getPrix() * $quantite;

            $commande = new Commande();
            $commande->setTotal($total);
            $commande->setProduit($product);
            $commande->setIdLivreur(null);
            $commande->setQuantite($quantite);

            array_push($produits, $commande);
        }
        //dd($produits);

        for ($i = 0; $i < count($produits); $i++) {

            $em->persist($produits[$i]);
            $em->flush();

        }


        //dd($dataPanier);


        /*$form=$this->createForm(CommandeType::class,$commande);
        $form->add('payer',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid())
        {
            for ($i = 0; $i < count($dataPanier ); $i++) {

                $commande->setProduit($dataPanier [$i]['produit']->getNom());
                $commande->setQuantite($dataPanier [$i]['quantite']);

                $commande->setTotal($total);}
            $em=$this->getDoctrine()->getManager();
            $em->persist($commande);
            $em->flush();
            return $this->redirectToRoute('afficheproduit1');

        }*/
        return $this->render('commande/affiche.html.twig', ['dataPanier' => $dataPanier, 'total' => $total]);

    }


    /**
     * @param CommandeRepository $repository
     * @return Response
     * @Route ("/affichecommandeback",name="affichecommandeback")
     */
    function Affiche(CommandeRepository $repository) //meme chose que metre 33 ligne
    {
        //$repo=$this->getDoctrine()->getRepository(ClassroomRepository::class);
        $livreur = $repository->findAll();
        return $this->render('/commande/afficheback.html.twig', ['c' => $livreur]);

    }

    /**
     * @param $id
     * @param CommandeRepository $rep
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimercommandeback/{id}", name="supprimercommandeback")
     */
    function Delete($id, CommandeRepository $rep)
    {
        $livreur = $rep->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($livreur);
        $em->flush();
        return $this->redirectToRoute('affichecommandeback');

    }

    /**
     * @param Request $request
     * @param Response
     * @Route ("/ajoutcommandeback",name="ajoutcommandeback")
     */
    function Ajoutcommandeback(Request $request)
    {
        $Commande = new Commande();
        $form = $this->createForm(CommandeType::class, $Commande);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Commande);
            $em->flush();
            return $this->redirectToRoute('affichecommandeback');
        }
        return $this->render('commande/ajoutback.html.twig', ['f' => $form->createView()]);
    }

    /**
     * @param Request $request
     * @param int $id
     * @param CommandeRepository $repository
     * @Route ("/modifiercommandeback/{id}",name="modifiercommandeback")
     */
    public function modify(Request $request, int $id, CommandeRepository $repository)
    {
        //$entityManager = $this->getDoctrine()->getManager();
        $commande = $repository->find($id);
        //$classroom = $entityManager->getRepository(Classroom::class)->find($id);
        $form = $this->createForm(CommandeType::class, $commande);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('affichecommandeback');

        }

        return $this->render("commande/modifierback.html.twig", [
            "form_title" => "Modifier livreur",
            "fo" => $form->createView(),
        ]);
    }

    /**
     * @Route ("/detail/{id}/{produit}/{quantite}" ,name="D")
     */
    function detail($produit, $quantite, $id)
    {
        return $this->render('commande/detail.html.twig', ['id' => $id, 'produit' => $produit, 'quantite' => $quantite]);

    }
}
