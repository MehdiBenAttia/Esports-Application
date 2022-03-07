<?php

namespace App\Controller;


use App\Entity\Categorie;
use App\Entity\Jeux;
use App\Form\JeuxType;
use App\Repository\CategorieRepository;
use App\Repository\JeuxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class JeuxController extends AbstractController
{
    /**
     * @Route("/jeux", name="jeux")
     */
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'JeuxController',
        ]);
    }
    /**
     * @Route("/front", name="front")
     */
    public function front(): Response
    {
        return $this->render('front.html.twig');
    }


    /**
     * @Route("/home", name="home")
     */
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }


    /**
     * @param JeuxRepository $repository
     * @return Response
     * @route ("/Affiche", name="AfficheJ")
     */
    function Affiche(JeuxRepository $repository){
        //$repo= $this->getDoctrine()->getRepository(Classroom::class);
        $jeux= $repository->nbr();
        return $this->render('/jeux/Affiche.html.twig',['jeux'=>$jeux]);
    }

    /**
     * @param $id
     * @param JeuxRepository $rep
     * @route ("/Delete/{id}", name="d")
     */
    function Delete($id,JeuxRepository $rep){
        $jeux=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($jeux);
        $em->flush();
        return $this->redirectToRoute('AfficheJ');
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/Ajout", name="A")
     */

    function Ajout(Request $request){
        $jeux=new Jeux();
        $form=$this->createForm(JeuxType::class,$jeux);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($jeux);
            $em->flush();
            return $this->redirectToRoute('AfficheJ');
        }
        return $this->render('jeux/Ajout.html.twig',['f'=>$form->createView()]);
    }

    /**
     * @Route("/Update/{id}",name="U")
     */
    function Update(JeuxRepository $repository,$id,Request $request)
    {
        $jeux = $repository->find($id);
        $form = $this->createForm(JeuxType::class, $jeux);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheJ");
        }
        return $this->render('jeux/Update.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Modifier un jeu"
            ]);
    }

    /**
     * @route ("/choix_categorie/{id}", name="choix_categorie")
     */

    public function choix_categorie(CategorieRepository $categorieRepository, JeuxRepository $jeuxRepository , $id)
    {
        $categories = $categorieRepository->find($id);
        $jeux =$jeuxRepository->findAll();
        return $this->render('competition/choix_categorie.html.twig', [
            'categories' => $categories,
            'jeux'=>$jeux
        ]);
    }

    /**
     * @Route("/Allgames",name="Allgames")
     */




}
