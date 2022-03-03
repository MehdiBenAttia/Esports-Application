<?php

namespace App\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;

use App\Entity\Adresse;
use App\Entity\Livreur;
use App\Entity\Panier;
use App\Entity\Produit;

use App\Entity\Commande;
use App\Form\AdresseType;
use App\Form\CommandeType;
use App\Repository\AdresseRepository;
use App\Repository\CommandeRepository;
use App\Repository\LivreurRepository;
use App\Repository\ProduitRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
    function Ajout(Request $request, SessionInterface $session,AdresseRepository $adresseRepository,ProduitRepository $produitRepository, CommandeRepository $commandeRepository)
    {
        $panier = $session->get("panier", []);
        $dataPanier = [];
        $total = 0;
         $produits =[];
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
            $commande->setTotal($product->getPrix() * $quantite);
            $commande->setProduit($product);
            $commande->setIdLivreur(null);
            $commande->setQuantite($quantite);

//dd($commande);
            array_push($produits, $commande);
        }
        //dd($produits);


        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            for ($i = 0; $i < count($produits); $i++) {
                $adresse = $adresseRepository->find($session->get('address'));
                $produits[$i]->setAdresse($adresse);
                $em->persist($produits[$i]);
                $em->flush();

            }
            return $this->redirectToRoute('afficheproduit');
        }


        //dd($dataPanier);



        return $this->render('commande/affiche.html.twig', ['dataPanier' => $dataPanier, 'total' => $total ,'f'=>$form->createView()]);

    }


    /**
     * @param CommandeRepository $repository
     * @return Response
     * @Route ("/affichecommandeback",name="affichecommandeback")
     */
    function Affiche(CommandeRepository $repository) //meme chose que metre 33 ligne
    {
        //$repo=$this->getDoctrine()->getRepository(ClassroomRepository::class);
        $commande = $repository->findAll();
        return $this->render('/commande/afficheback.html.twig', ['c' => $commande]);

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
        $form->add('Produit');
        $form->add('Quantite');
        $form->add('total');
        $form->add('Id_livreur',EntityType::class,[
        'class'=>Livreur::class,
        'choice_label'=>'Nom',
    ]);



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
        $form->add('Produit');
        $form->add('Quantite');
        $form->add('total');
        $form->add('Id_livreur',EntityType::class,[
            'class'=>Livreur::class,
            'choice_label'=>'Nom',
        ]);

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
     * @Route ("/detail/{id}/{produit}/{quantite}/{adresse}" ,name="D")
     */
    function detail($produit, $quantite, $id,$adresse, AdresseRepository $repository)
    {
        $ADD=$repository->find($adresse);
        return $this->render('commande/detail.html.twig', ['id' => $id, 'produit' => $produit, 'quantite' => $quantite,'ad'=>$ADD]);

    }

    /**
     * @Route ("/Imprimer/{id}/{adresse}" ,name="imprimer")
     */
    public function pdf($id,$adresse,AdresseRepository $adresseRepository,CommandeRepository $commandeRepository)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $ADD=$adresseRepository->find($adresse);
        $commande = $commandeRepository->find($id);
        //dd($adresse);
        // dd($commande);


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('commande/imprimer.html.twig',
            ['commande' => $commande,'adresse'=>$ADD
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }

}
