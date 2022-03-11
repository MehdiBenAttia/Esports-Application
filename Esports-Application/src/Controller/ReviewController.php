<?php

namespace App\Controller;

use App\Entity\Review;
use App\Form\ReviewType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Annotation\Ignore;

class ReviewController extends AbstractController
{
    /**
     * @Route("/review", name="app_review")
     */
    public function index(): Response
    {
        return $this->render('review/index.html.twig', [
            'controller_name' => 'ReviewController',
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/ajoutrev", name="Arev")
     */

    function Ajouterreview(Request $request){
        $review=new Review();
        $form=$this->createForm(ReviewType::class,$review);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($review);
            $em->flush();
            return $this->redirectToRoute('affichcat');
        }
        return $this->render('review/ajout.html.twig',['e'=>$form->createView()]);
    }
}
