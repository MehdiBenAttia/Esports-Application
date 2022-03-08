<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use App\Repository\CategorieRepository;
use App\Repository\ReviewRepository;
use App\Form\ReviewType;

use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Snappy\Pdf;



use App\Entity\Review;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
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
        return $this->render('basic_back.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    /**
     * @Route("/front", name="front")
     */
    public function indexe(): Response
    {
        return $this->render('front.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    /**
     * @param ProduitRepository $repository
     * @Route ("/Afficher", name="affich")
     */
    public function Affiche(ProduitRepository  $repository, Request $request)
    {
        $produit=$repository->normal();


        return $this->render('produit/affiche.html.twig',['produit'=>$produit]);

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
     * @Route ("/DESC", name="DESC")
     */
    public function desc(ProduitRepository  $repository, Request $request)
    {


        $produit=$repository->kbir();
        return $this->render('produit/affiche.html.twig',['produit'=>$produit]);

    }


    /**
     * @param ProduitRepository $repository
     * @Route ("/ASC", name="ASC")
     */
    public function asc(ProduitRepository  $repository, Request $request)
    {


        $produit=$repository->sghir();
        return $this->render('produit/affiche.html.twig',['produit'=>$produit]);

    }


    /**
     * @param ProduitRepository $repository
     * @param CategorieRepository  $repository

     * @return Response
     * @Route ("/Afficherfront", name="affichfront")
     */
    public function Affichefront(ProduitRepository  $repository, CategorieRepository  $rep)
    {
        $produit=$repository->findAll();

        $categorie=$rep->findAll();
        return $this->render('produit/afficherfront.html.twig',
            ['produit'=>$produit,
            'categorie'=>$categorie]
        );

    }
    /**
     * @route ("/choix_categorie/{id}", name="choix_categorie")
     */








    /**
     * @param ProduitRepository $repository
     * @Route ("/Afficherfrontdetail/{id}", name="affichfrontdetail")
     */
    public function Affichefrontdetail(ProduitRepository  $repository,$id, Request $requeste, ReviewRepository $rep)
    {
        $produit=$repository->find($id);



        $review=new Review();
$review->setProduit($produit);
        $form=$this->createForm(ReviewType::class,$review);
        $form->handleRequest($requeste);

        if($form->isSubmitted() && $form->isValid())
        {

            $em=$this->getDoctrine()->getManager();
            $em->persist($review);
            $em->flush();
            return $this->redirectToRoute('affichfront');


        }
        return $this->render('produit/detail.html.twig',[
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


        $html = $this->renderView('produit/imp.html.twig',
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
     * @route ("/Delete/{id}", name="d")
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
        return $this->render('produit/ajout.html.twig',['f'=>$form->createView()]);
    }
    /**
     * @Route("produit/Update/{id}",name="U")
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
        return $this->render('produit/update.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Modifier un produit"
            ]);
    }







    /**
     * @Route("/searchcompetitionajax", name="ajaxcompetition")
     */
    public function searchajax(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $requestString=$request->get('searchValue');
        $jeux = $repository->findCompetitionbyname($requestString);


        return $this->render('produit/ajax.html.twig', [
            'produit'=>$jeux

        ]);

    }







}
