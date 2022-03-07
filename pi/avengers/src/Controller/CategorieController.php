<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

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
     * @route ("/AfficheCat", name="AfficheCat")
     */
    function Affiche(CategorieRepository $repository){
        //$repo= $this->getDoctrine()->getRepository(Classroom::class);
        $categorie= $repository->findAll();
        return $this->render('/categorie/AfficheCat.html.twig',['categorie'=>$categorie]);
    }

    /**
     * @param $id
     * @param CategorieRepository $rep
     * @route ("/DeleteCat/{id}", name="dcat")
     */
    function Delete($id,CategorieRepository $rep){
        $categorie=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($categorie);
        $em->flush();
        return $this->redirectToRoute('AfficheCat');
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/AjoutCat", name="Acat")
     */

    function Ajout(Request $request){
        $categorie=new Categorie();
        $form=$this->createForm(CategorieType::class,$categorie);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('AfficheCat');
        }
        return $this->render('categorie/AjoutCat.html.twig',['fcat'=>$form->createView()]);
    }

    /**
     * @Route("/UpdateCat/{id}",name="Ucat")
     */
    function Update(CategorieRepository $repository,$id,Request $request)
    {
        $categorie = $repository->find($id);
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheCat");
        }
        return $this->render('categorie/UpdateCat.html.twig',
            [
                'fcat' => $form->createView(),
                "form_title" => "Modifier une catégorie"
            ]);
    }

    /**
     *
     * @route ("/addcatJSON/new",name="addcat")
     */
    public function addpcat(Request $request,NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $categorie=new Categorie();
        $categorie->setNom($request->get('nom'));
        $em->persist($categorie);
        $em->flush();
        $jsonContent=$Normalizer->normalize($categorie,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));;
    }

    /**
     * @Route("/Categorie/{id}",name="allcat")
     */
    public function catid(Request $request, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Categorie::class)->find($id);
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route ("/updateCategorieJSON/{id}", name="updateCategorieJSON")
     */
    public function updateCategorieJSON(Request $request,NormalizerInterface $normalizer,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $categorie=$em->getRepository(Categorie::class)->find($id);
        $categorie->setNom($request->get('nom'));
        $em->flush();
        $jsonContent=$normalizer->normalize($categorie,'json', ['groups'=>'post:read']);
        return new Response("Information updated successfully".json_encode($jsonContent));;
    }

}
