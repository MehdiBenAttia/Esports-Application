<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
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
     * @param ProduitRepository $repository
     * @Route ("/Afficher", name="affich")
     */
    public function Affiche(ProduitRepository  $repository)
    {
        $produit=$repository->findAll();
        return $this->render('produit/affiche.html.twig',['produit'=>$produit]);

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
}
