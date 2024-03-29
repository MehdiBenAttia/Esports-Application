<?php

namespace App\Controller;

use App\Entity\CategorieC;
use App\Form\CategoriecType;
use App\Repository\CategorieCRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CategorieCController extends AbstractController
{
//    /**
//     * @Route("/categorie/c", name="categorie_c")
//     */
//    public function index(): Response
//    {
//        return $this->render('categorie_c/index.html.twig', [
//            'controller_name' => 'CategorieCController',
//        ]);
//    }


    /**
     * @Route("/categorie", name="categorie")
     */
    public function index(): Response
    {
        return $this->render('categorie_c/index.html.twig', [
            'controller_name' => 'CategorieCController',
        ]);
    }

    /**
     * @param CategorieCRepository $repository
     * @return Response
     * @route ("/AfficheCateg", name="AfficheCateg")
     */
    function Affiche(CategorieCRepository $repository){
        //$repo= $this->getDoctrine()->getRepository(Classroom::class);
        $categorie= $repository->findAll();
        return $this->render('/categorie_c/AfficheCat.html.twig',['categorie'=>$categorie]);
    }

    /**
     * @param $id
     * @param CategorieCRepository $rep
     * @route ("/DeleteCateg/{id}", name="dcateg")
     */
    function Delete($id,CategorieCRepository $rep){
        $categorie=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($categorie);
        $em->flush();
        return $this->redirectToRoute('AfficheCateg');
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/AjoutCateg", name="Acateg")
     */

    function Ajout(Request $request){
        $categorie=new CategorieC();
        $form=$this->createForm(CategoriecType::class,$categorie);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('AfficheCateg');
        }
        return $this->render('categorie_c/AjoutCat.html.twig',['fcat'=>$form->createView()]);
    }

    /**
     * @Route("/UpdateCateg/{id}",name="Ucateg")
     */
    function Update(CategorieCRepository $repository,$id,Request $request)
    {
        $categorie = $repository->find($id);
        $form = $this->createForm(CategoriecType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheCat");
        }
        return $this->render('categorie_c/UpdateCat.html.twig',
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
        $categorie=new CategorieC();
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
        $user = $em->getRepository(CategorieC::class)->find($id);
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route ("/updateCategorieJSON/{id}", name="updateCategorieJSON")
     */
    public function updateCategorieJSON(Request $request,NormalizerInterface $normalizer,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $categorie=$em->getRepository(CategorieC::class)->find($id);
        $categorie->setNom($request->get('nom'));
        $em->flush();
        $jsonContent=$normalizer->normalize($categorie,'json', ['groups'=>'post:read']);
        return new Response("Information updated successfully".json_encode($jsonContent));;
    }
}
