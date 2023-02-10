<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use App\Repository\CategorieRepository;
use App\Repository\ReviewRepository;
use App\Form\ReviewType;
use App\Entity\Panier;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Snappy\Pdf;



use App\Entity\Review;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Annotation\Ignore;
use Symfony\component\Serializer\Annotation\Groups;


class ProduitController extends Controller
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    /**
     * @Route("/front", name="front")
     */
    public function indexe(): Response
    {
        return $this->render('basefront.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    /**
     * @param ProduitRepository $repository
     * @Route ("back/Afficher", name="affich")
     */
    public function Affiche(ProduitRepository  $repository, Request $request)
    {
        $produit=$repository->normal();


        return $this->render('back/produit/affiche.html.twig',['produit'=>$produit]);

    }


    /**
     *@route("/pdf",name="PDF")
     */
   // public function indexAction(ProduitRepository  $repository)
   /* {
        $produit=$repository->normal();
        $html = $this->renderView('produit/affiche.html.twig', array(
            'title' => 'Hello World !'
        ));

        $filename = 'myFirstSnappyPDF';

        return new Response(
            ($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"',
            )
        );
    }
*/

    /**
     * @param ProduitRepository $repository
     * @Route ("back//DESC", name="DESC")
     */
    public function desc(ProduitRepository  $repository, Request $request)
    {


        $produit=$repository->kbir();
        return $this->render('back/produit/affiche.html.twig',['produit'=>$produit]);

    }


    /**
     * @param ProduitRepository $repository
     * @Route ("back//ASC", name="ASC")
     */
    public function asc(ProduitRepository  $repository, Request $request)
    {


        $produit=$repository->sghir();
        return $this->render('back/produit/affiche.html.twig',['produit'=>$produit]);

    }


    /**
     * @param ProduitRepository $repository
     * @param CategorieRepository  $repository

     * @return Response
     * @Route ("/Afficherfront", name="affichfront")
     */
    public function Affichefront(ProduitRepository  $repository, CategorieRepository  $rep,SessionInterface $session, ProduitRepository $productsRepository)
    {
        $produit=$repository->findAll();

        $panier = $session->get("panier", []);

        // On "fabrique" les données
        $dataPanier = [];
        $total = 0;
        $s=0;
        foreach($panier as $id => $quantite){
            $product = $productsRepository->find($id);
            $dataPanier[] = [
                "produit" => $product,
                "quantite" => $quantite
            ];
            $total += $product->getPrix() * $quantite;
        }
        for($i=0;$i< count($dataPanier);$i++)
        {
            $s=$s+1;
        }

        $categorie=$rep->findAll();
        return $this->render('front/afficherfront.html.twig',
            ['produit'=>$produit,
            'categorie'=>$categorie,
                "dataPanier"=>$dataPanier,
                "total"=>$total
                ,"s"=>$s]
        );

    }



    /**
     * @param ProduitRepository $repository
     * @Route ("/Afficherfrontdetailproduit/{id}", name="affichfrontdetail")
     */
    public function Affichefrontdetail(ProduitRepository  $repository,$id, Request $requeste, ReviewRepository $rep)
    {
        $produit=$repository->find($id);

        $user1 = $this->get('security.token_storage')->getToken()->getUser();
      //  dd($user1);


        $review=new Review();
        $review->setUsername($user1->getNom());


$review->setProduit($produit);
        $form=$this->createForm(ReviewType::class,$review);
        $form->handleRequest($requeste);

        if($form->isSubmitted() && $form->isValid())
        {

            $em=$this->getDoctrine()->getManager();
          //  dd($review);
            $em->persist($review);
            $em->flush();
            return $this->redirectToRoute('affichfront');


        }
        return $this->render('front/detail.html.twig',[
            'produit'=>$produit ,
            'f'=>$form->createView()
        ]);








    }

    /**
     * @Route ("/Imprimer/{id}" ,name="imp")
     */
    public function pdf($id,ProduitRepository $adresseRepository)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $produit=$adresseRepository->find($id);


        $html = $this->renderView('front/imp.html.twig',
            ['produit' => $produit
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
     * @param $id
     * @param ProduitRepository $rep
     * @route ("/DeleteP/{id}", name="dP")
     */
    function Delete($id,ProduitRepository $rep){
        $produit=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();
        return $this->redirectToRoute('affich');
    }
    /**
     * @param Request $request
     * @return Response
     * @route ("/Ajout", name="A")
     */

    function Ajout(Request $request){
        $produit=new Produit();
        $form=$this->createForm(ProduitType::class,$produit);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('affich');
        }
        return $this->render('back/produit/ajout.html.twig',['f'=>$form->createView()]);
    }
    /**
     * @Route("produit/Update/{id}",name="UP")
     */
    function Update( ProduitRepository $repository,$id,Request $request)
    {
        $produit = $repository->find($id);
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("affich");
        }
        return $this->render('back/produit/update.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Modifier un produit"
            ]);
    }







    /**
     * @Route("/searchproduitajax", name="ajaxproduit")
     */
    public function searchajax(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $requestString=$request->get('searchValue');
        $jeux = $repository->findCompetitionbyname($requestString);


        return $this->render('front/ajax.html.twig', [
            'produit'=>$jeux

        ]);

    }
    /**
     *
     * @route ("/addPRODJSON/new",name="addPRODJSON")
     */
    public function addgames(Request $request,NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $produit=new Produit();
        $repcat=$em->getRepository(Categorie::class)->findOneBy(array('nom_categ' =>$request->get('categorie')));
        $produit->setNom($request->get('nom'));
        $produit->setMarque($request->get('marque'));
        $produit->setPrix($request->get('prix'));
        $produit->setType($request->get('type'));
        $produit->setReference($request->get('reference'));
        $produit->setUpdatedAt(new \DateTime('now'));
        $produit->setCategorie($repcat);

        $em->persist($produit);
        $em->flush();
        $jsonContent=$Normalizer->normalize($produit,'json',['groups'=>'teste']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/PROD/{id}",name="PROD")
     */
    public function catid(Request $request, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(Produit::class)->find($id);
        $jsonContent = $Normalizer->normalize($produit, 'json', ['groups'=>'teste']);

        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route ("/updatePRODJSON", name="updatePRODJSON")
     */
    public function updateGamesJSON(Request $request,NormalizerInterface $normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository(Produit::class)->find($request->get("id"));
        $produit->setNom($request->get('nom'));
        $produit->setMarque($request->get('marque'));
        $produit->setPrix($request->get('prix'));
        $produit->setType($request->get('type'));
        $produit->setReference($request->get('reference'));
        $produit->setUpdatedAt(new \DateTime('now'));
        $em->flush();
        $jsonContent=$normalizer->normalize($produit,'json', ['groups'=>'teste']);
        return new Response("Information updated successfully".json_encode($jsonContent));;
    }

    /**
     * @Route ("/showPRODJSON", name="showPRODJSON")
     */
    public function showGamesJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(Produit::class)->findAll();
      //  dd($produit);
        $jsonContent = $Normalizer->normalize($produit, 'json', ['groups'=>'teste']);
        /* $noms = [];
         foreach ($jeux as $user) {
             if (empty($user->getCategorie())) {
                 $nom = null;
             } else {
                 $nom = $user->getCategorie()->__toString();
             }
             array_push($noms, $nom);
         }
         $jsonContent = $Normalizer->normalize(['jeu' => $jeux, 'nom' => $noms], 'json', ['groups' => 'post:read']);*/
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route ("/deletePRODJSON", name="deletePRODJSON")
     */
    public function deleteGamesJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(Produit::class)->find($request->get("id"));
        $em->remove($produit);
        $em->flush();
        $jsonContent = $Normalizer->normalize($produit, 'json', ['groups'=>'teste']);
        return new Response(json_encode($jsonContent));
    }








}
