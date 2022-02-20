<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Form\ProduitType;
use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
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
     * @param CategorieRepository $repository
     * @Route ("/Affichercat", name="affichcat")
     */
    public function Affiche(CategorieRepository  $repository)
    {
        $categorie=$repository->affich_produit_nbr();
        return $this->render('categorie/affichcat.html.twig',['categorie'=>$categorie]);

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
     * @route ("/Ajoutcat", name="Acat")
     */

    function Ajout(Request $request){
        $categorie=new Categorie();
        $form=$this->createForm(CategorieType::class,$categorie);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('affichcat');
        }
        return $this->render('categorie/ajoutcat.html.twig',['f'=>$form->createView()]);
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
        return $this->render('categorie/updatecat.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Modifier un type"
            ]);
    }

}
