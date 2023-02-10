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
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;



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

    function Ajout(Request $req, SessionInterface $session,AdresseRepository $adresseRepository,ProduitRepository $produitRepository, CommandeRepository $commandeRepository)
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
            $commande->setTotal($product->getPrix() * $quantite) ;
            $commande->setProduit($product);
            $commande->setIdLivreur(null);
            $commande->setQuantite($quantite);

//dd($commande);
            array_push($produits, $commande);
        }
        //dd($produits);
        $add=new Adresse();
        $fo = $this->createForm(AdresseType::class, $add);
        $fo->handleRequest($req);

        if ($fo->isSubmitted() && $fo->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($add);
            $entityManager->flush();
            if($add->getCodePromo()=='ETSPORTS'){
                for ($i = 0; $i < count($produits); $i++) {
                    $T=$produits[$i]->getTotal();
                    $produits[$i]->setAdresse($add);
                    $produits[$i]->setTotal($T*0.5);
                    $em->persist($produits[$i]);
                    $em->flush();
                    //dd($produits);
                 }
                $session->set("panier", []);
            }
               // $adresse = $adresseRepository->find($session->get('address'));
            else{
                for ($i = 0; $i < count($produits); $i++){
                    $produits[$i]->setAdresse($add);
                    $em->persist($produits[$i]);
                    $em->flush();
                    //dd($produits);
                }
                $session->set("panier", []);

            }
            return $this->redirectToRoute('affichfront');
        }



        //dd($dataPanier);
        $s=0;

        for($i=0;$i< count($dataPanier);$i++)
        {
            $s=$s+1;
        }
        return $this->render('front/affiche.html.twig', ['s','dataPanier' => $dataPanier, 'total' => $total ,'fo' =>$fo->createview()]);

    }


    /**
     * @param CommandeRepository $repository
     * @return Response
     * @Route ("/back/affichecommandeback",name="affichecommandeback")
     */
    function AfficheN(CommandeRepository $repository) //meme chose que metre 33 ligne
    {
        //$repo=$this->getDoctrine()->getRepository(ClassroomRepository::class);
        $commande = $repository->findAll();

        return $this->render('back/commande/afficheback.html.twig', ['c' => $commande]);

    }
    /**
     * @param CommandeRepository $repository
     * @return Response
     * @Route ("/back/affichecommandebackisn",name="affichecommandebackisn")
     */
    function AfficheT(CommandeRepository $repository) //meme chose que metre 33 ligne
    {
        //$repo=$this->getDoctrine()->getRepository(ClassroomRepository::class);
        $commande = $repository->isn();

        return $this->render('back/commande/afficheback.html.twig', ['c' => $commande]);

    }
    /**
     * @param CommandeRepository $repository
     * @return Response
     * @Route ("/back/affichecommandebackisnot",name="affichecommandebackisnot")
     */
    function Affiche(CommandeRepository $repository) //meme chose que metre 33 ligne
    {
        //$repo=$this->getDoctrine()->getRepository(ClassroomRepository::class);
        $commande = $repository->isnot();

        return $this->render('back/commande/afficheback.html.twig', ['c' => $commande]);

    }

    /**
     * @param $id
     * @param CommandeRepository $rep
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/back/supprimercommandeback/{id}", name="supprimercommandeback")
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
     * @Route ("/back/ajoutcommandeback",name="ajoutcommandeback")
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
        return $this->render('back/commande/ajoutback.html.twig', ['f' => $form->createView()]);
    }

    /**
     * @param Request $request
     * @param int $id
     * @param CommandeRepository $repository
     * @Route ("/back/modifiercommandeback/{id}",name="modifiercommandeback")
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

        return $this->render("back/commande/modifierback.html.twig", [
            "form_title" => "Modifier livreur",
            "fo" => $form->createView(),
        ]);
    }

    /**
     * @Route ("/back/detail/{id}/{produit}/{quantite}/{adresse}" ,name="D")
     */
    function detail($produit, $quantite, $id,$adresse, AdresseRepository $repository)
    {
        $ADD=$repository->find($adresse);
        return $this->render('back/commande/detail.html.twig', ['id' => $id, 'produit' => $produit, 'quantite' => $quantite,'ad'=>$ADD]);

    }

    /**
     * @Route ("/back/Imprimer/{id}/{adresse}" ,name="imprimer")
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
        $html = $this->renderView('back/commande/imprimer.html.twig',
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

    /**
     * @Route("/commande/{idcommande}",name="commande")
     */
    public function commandeid(Request $request, $idcommande, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Commande::class)->find($idcommande);
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'bawez']);

        return new Response(json_encode($jsonContent));
    }
    /**
     *
     * @route ("/addCommandeJSON/new",name="addCommandeJSON")
     */
    public function addCommande(Request $request,NormalizerInterface $Normalizer,AdresseRepository $repository)
    {
        $em=$this->getDoctrine()->getManager();
        $commande=new Commande();
       $commande->setProduit($request->get('Produit'));
        $commande->setQuantite($request->get('Quantite'));
        $commande->setTotal($request->get('Total'));
        $commande->setDate(new \DateTime("now"));

        $adr = $repository->find('10');

       $commande->setIdLivreur(null);
       $commande->setAdresse($adr);
        $em->persist($commande);
        $em->flush();
        $jsonContent=$Normalizer->normalize($commande,'json',['groups'=>'bawez']);
        return new Response(json_encode($jsonContent));;

    }
    /**
     * @Route ("/updateCommandeJSON", name="updateCommandeJSON")
     */
    public function updateCommandeJSON(Request $request,NormalizerInterface $normalizer,AdresseRepository $repository)
    {
        $em=$this->getDoctrine()->getManager();
        $commande=$em->getRepository(Commande::class)->find($request->get("idcommande"));
        $commande->setProduit($request->get('Produit'));
        $commande->setQuantite($request->get('Quantite'));
        $commande->setTotal($request->get('Total'));
        $commande->setDate(new \DateTime("now"));
        $commande->setIdLivreur(null);
        $adr = $repository->find('10');

        $commande->setAdresse($adr);
        $em->flush();
        $jsonContent=$normalizer->normalize($commande,'json', ['groups'=>'bawez']);
        return new Response("Information updated successfully".json_encode($jsonContent));;
    }

    /**
     * @Route ("/showCommandeJSON", name="showCommandeJSON")
     */
    public function showCommandeJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Commande::class)->findAll();
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'bawez']);
        dump($jsonContent);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route ("/deleteCommandeJSON", name="deleteCommandeJSON")
     */
    public function deleteCommandeJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Commande::class)->find($request->get("idcommande"));
        $em->remove($user);
        $em->flush();
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'bawez']);
        return new Response(json_encode($jsonContent));
    }

}
