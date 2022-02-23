<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Form\ReponsesType;
use App\Repository\CategorieRepository;
use App\Repository\ReponsesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
     * @return Response
     * @route ("/Affichercat", name="Affichec")
     */
    function Affiche(CategorieRepository $repository){
        $categorie= $repository->findAll();
        return $this->render('/categorie/Affichec.html.twig',['categorie'=>$categorie]);
    }

    /**
     * @param $id
     * @param CategorieRepository $rep
     * @route ("/Deletec/{id}", name="dc")
     */
    function Delete($id,CategorieRepository $rep){
        $categorie=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($categorie);
        $em->flush();
        return $this->redirectToRoute('Affichec');
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/Ajoutc", name="Ac")
     */
    function Ajout(Request $request){
        $categorie=new Categorie() ;
        $categorie->setDate(new \DateTime("now"));

        $form=$this->createForm(CategorieType::class,$categorie);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('Affichec');
        }
        return $this->render('categorie/Ajoutc.html.twig',['f'=>$form->createView()]);
    }

    /**
     * @Route("/Updatec/{id}",name="Uc")
     */
    function Update(CategorieRepository $repository,$id,Request $request)
    {
        $categorie = $repository->find($id);
        $categorie->setDate(new \DateTime("now"));
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("Affichec");
        }
        return $this->render('categorie/Updatec.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Update the category"
            ]);
    }
}
