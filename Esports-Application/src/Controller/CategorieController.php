<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Form\ProduitType;
use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Ob\HighchartsBundle\Highcharts\Highchart;

use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends Controller
{
    /**
     * @Route("/categorie", name="categorie")
     */
    public function index(): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }

    /**
     * @Route("/CategorieM",name="allcat")
     */
    public function catid(Request $request, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Categorie::class)->findAll();
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }





/**
*
* @route ("/addcatJSON/new",name="addcat")
*/
    public function addpcat(Request $request,NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $categorie=new Categorie();
        $categorie->setNomCateg($request->get('nom_categ'));
        $categorie->setMailFournisseur($request->get('mail_fournisseur'));
        $categorie->setNomFournisseur($request->get('nom_fournisseur'));


        $em->persist($categorie);
        $em->flush();
        $jsonContent=$Normalizer->normalize($categorie,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));;




    }


    /**
     * @Route ("/updatecatJSON/{id}", name="updatecatJSON")
     */
    public function updateCommentaireJSON(Request $request,NormalizerInterface $normalizer,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $categorie=$em->getRepository(Commentaire::class)->find($id);
        $categorie->setNomCateg($request->get('nom_categ'));
        $categorie->setMailFournisseur($request->get('mail_fournisseur'));
        $categorie->setNomFournisseur($request->get('nom_fournisseur'));

        $em->flush();
        $jsonContent=$normalizer->normalize($categorie,'json', ['groups'=>'post:read']);
        return new Response("Information updated successfully".json_encode($jsonContent));;
    }



    /**
     * @param CategorieRepository $repository
     * @Route ("back/Affichercat", name="affichcat")
     */
    public function Affiche(CategorieRepository  $repository,Request $request)

    {



        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('Browser market shares at a specific website in 2010');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
        $categories = $repository->findAll();
$data2=[];
        $categNom=[];
        $categCount=[];
        $somme=0;
        $compt[]=0;

        foreach($categories as $categorie){
            $categNom[] = $categorie->getNomCateg();
            $categCount[] = count($categorie->getProduits());

        }



        $i=0;


        foreach($categNom as $p)
        {

           /* $data2 = array(

                array( $categNom[0] , $categCount[0]),
                array( $categNom[1] , $categCount[1]),
                array( $categNom[2] , $categCount[2]),
                array( $categNom[3] , $categCount[3]),



                array( $categNom[$i] , $categCount[$i]),
            )
            ;*/


            array_push($data2,[$categNom[$i],$categCount[$i]]);
            $i++;




        }






        $ob->series(array(array('type' => 'pie','name' => 'Nombre de produits', 'data' => $data2)));


        $categorie=$repository->affich_produit_nbr();
        $allcategories = $this->get('knp_paginator')->paginate(
        // Doctrine Query, not results
            $categorie,
            // Define the page parameter
            $request->query->getInt('page', 1),
            3
        );
        return $this->render('back/affichcat.html.twig',['categorie'=>$allcategories, 'chart' => $ob]);

    }
    /**
     * @param ProduitRepository $repository
     * @Route ("/side", name="side")
     */
    public function Affichefronhome(ProduitRepository  $repository)
    {




        $produit=$repository->findAll();
        return $this->render('side.html.twig',['produit'=>$produit

]);

    }
    /**
     * @param $id
     * @param CategorieRepository $rep
     * @route ("/Deletecat/{id}", name="dcat")
     */
    function Delete($id,CategorieRepository $rep){
        $categorie=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($categorie);
        $em->flush();
        return $this->redirectToRoute('affichcat');
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("back/Ajoutcat", name="Acat")
     */

    function Ajout(Request $request)
    {





        $categorie=new Categorie();
        $form=$this->createForm(CategorieType::class,$categorie);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('affichcat');
        }
        return $this->render('back/ajoutcat.html.twig',[
            'f'=>$form->createView(),

        ]);
    }

    /**
     * @Route("categorie/Update/{id}",name="Upc")
     */
    function Update( CategorieRepository $repository,$id,Request $request)
    {
        $categorie = $repository->find($id);
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("affichcat");
        }
        return $this->render('back/updatecat.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Modifier un type"
            ]);
    }


}
