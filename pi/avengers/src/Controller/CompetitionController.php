<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Competition;
use App\Form\CompetitionType;
use App\Repository\CategorieRepository;
use App\Repository\CompetitionRepository;
use App\Repository\JeuxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CompetitionController extends AbstractController
{
    /**
     * @Route("/competition", name="competition")
     */
    public function index(): Response
    {
        return $this->render('competition/index.html.twig', [
            'controller_name' => 'CompetitionController',
        ]);
    }

    /**
     * @param CompetitionRepository $repository
     * @return Response
     * @route ("/tournament", name="tournament")
     */
    function Tournament(CompetitionRepository $repository , CategorieRepository $categorieRepository){
        //$repo= $this->getDoctrine()->getRepository(Classroom::class);
        $categories = $categorieRepository->findAll();
        $jeux = $repository->findAll();
        return $this->render('/competition/competition.html.twig',[
            'categories'=>$categories ,
            'jeux'=>$jeux
        ]);
    }

    /**
     * @param CompetitionRepository $repository
     * @return Response
     * @route ("/AfficheC", name="AfficheC")
     */
    function Affiche(CompetitionRepository $repository){
        //$repo= $this->getDoctrine()->getRepository(Classroom::class);
        $competition= $repository->findAll();
        return $this->render('/competition/AfficheC.html.twig',['competition'=>$competition]);
    }

    /**
     * @param $id
     * @param CompetitionRepository $rep
     * @route ("/DeleteC/{id}", name="dc")
     */
    function Delete($id,CompetitionRepository $rep){
        $competition=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($competition);
        $em->flush();
        return $this->redirectToRoute('AfficheC');
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/AjoutC", name="Ac")
     */

    function Ajout(Request $request){
        $competition=new Competition();
        $form=$this->createForm(CompetitionType::class,$competition);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($competition);
            $em->flush();
            return $this->redirectToRoute('AfficheC');
        }
        return $this->render('competition/AjoutC.html.twig',['fc'=>$form->createView()]);
    }

    /**
     * @Route("/UpdateC/{id}",name="Uc")
     */
    function Update(CompetitionRepository $repository,$id,Request $request)
    {
        $competition = $repository->find($id);
        $form = $this->createForm(CompetitionType::class, $competition);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheC");
        }
        return $this->render('competition/UpdateC.html.twig',
            [
                'fc' => $form->createView(),
                "form_title" => "Modifier une compétition"
            ]);
    }

    /**
     * @Route("/searchcompetitionajax", name="ajaxcompetition")
     */
    public function searchajax(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Competition::class);
        $requestString=$request->get('searchValue');
        $jeux = $repository->findCompetitionbyname($requestString);

        return $this->render('competition/ajax.html.twig', [
            "jeux"=>$jeux,
        ]);

    }

    /**
     * @route ("/competition_detail", name="competition_detail")
     */

    public function detail(CompetitionRepository $competitionRepository, JeuxRepository $jeuxRepository )
    {
        $competition = $competitionRepository->findAll();
        $jeux=$jeuxRepository->findAll();
        return $this->render('competition/details.html.twig', [
            'competition' => $competition,
            'jeux'=>$jeux
        ]);
    }


}
