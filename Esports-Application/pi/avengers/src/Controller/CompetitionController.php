<?php

namespace App\Controller;

use App\Entity\CategorieC;
use App\Entity\Competition;
use App\Form\CompetitionType;
use App\Repository\CategorieCRepository;
use App\Repository\CompetitionRepository;
use App\Repository\JeuxRepository;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Endroid\QrCode\Builder\BuilderInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Validator\Constraints\DateTime;
use Twig_Extensions_Extension_Date;

class CompetitionController extends AbstractController
{

    /**
     * @param CompetitionRepository $repository
     * @return Response
     * @route ("/tournament", name="tournament")
     */
    function Tournament(CompetitionRepository $repository , CategorieCRepository $categorieRepository){
        $now= new \DateTime('now');
        //$repo= $this->getDoctrine()->getRepository(Classroom::class);
        $categories = $categorieRepository->findAll();
        $jeux = $repository->findAll();
        $compet=$repository->findAll();
//        foreach ($compet as $c){
//            $diff[]= $c->getDatefin()->diff($now);
//        }
//        dump($diff);
//        die();
        $rdvs = [];
        foreach ($compet as $event)
        {
            $rdvs[]=[
                'title'=>$event->getNom(),
                'start'=>$event->getDatedeb()->format("Y-m-d"),
                'end'=>$event->getDatefin()->format("Y-m-d"),
                'backgroundColor'=> '#0ec51',
                'borderColor'=> 'green',
                'textColor' => 'black'
            ];
        }
        $data = json_encode($rdvs);
        return $this->render('/competition/competition.html.twig',compact('data' , 'categories' , 'jeux'));
    }

    /**
     * @param CompetitionRepository $repository
     * @return Response
     * @route ("/AfficheC", name="AfficheC")
     */
    function Affiche(CompetitionRepository $repository){
        //$repo= $this->getDoctrine()->getRepository(Classroom::class);
        $competition= $repository->findAll();
        $compet=$repository->findAll();

        $rdvs = [];

        foreach ($compet as $event)
        {
            $rdvs[]=[
                'title'=>$event->getNom(),
                'start'=>$event->getDatedeb()->format("Y-m-d"),
                'end'=>$event->getDatefin()->format("Y-m-d"),
                'backgroundColor'=> '#0ec51',
                'borderColor'=> 'green',
                'textColor' => 'black'
            ];
        }

        $data = json_encode($rdvs);
        return $this->render('/competition/AfficheC.html.twig',compact('competition','data'));
    }

    /**
     * @param CompetitionRepository $repository
     * @return Response
     * @route ("/croissant", name="croissant")
     */
    function croissant(CompetitionRepository $repository){
        //$repo= $this->getDoctrine()->getRepository(Classroom::class);
        $competition= $repository->trie_croissant_datedeb();
        $compet=$repository->findAll();

        $rdvs = [];

        foreach ($compet as $event)
        {
            $rdvs[]=[
                'title'=>$event->getNom(),
                'start'=>$event->getDatedeb()->format("Y-m-d"),
                'end'=>$event->getDatefin()->format("Y-m-d"),
                'backgroundColor'=> '#0ec51',
                'borderColor'=> 'green',
                'textColor' => 'black'
            ];
        }

        $data = json_encode($rdvs);
        return $this->render('/competition/AfficheC.html.twig',compact('competition','data'));
    }

    /**
     * @param CompetitionRepository $repository
     * @return Response
     * @route ("/decroissant", name="decroissant")
     */
    function decroissant(CompetitionRepository $repository){
        //$repo= $this->getDoctrine()->getRepository(Classroom::class);
        $competition= $repository->trie_decroissant_datedeb();
        $compet=$repository->findAll();

        $rdvs = [];

        foreach ($compet as $event)
        {
            $rdvs[]=[
                'title'=>$event->getNom(),
                'start'=>$event->getDatedeb()->format("Y-m-d"),
                'end'=>$event->getDatefin()->format("Y-m-d"),
                'backgroundColor'=> '#0ec51',
                'borderColor'=> 'green',
                'textColor' => 'black'
            ];
        }

        $data = json_encode($rdvs);
        return $this->render('/competition/AfficheC.html.twig',compact('competition','data'));
    }


    /**
     * @param CompetitionRepository $repository
     * @return Response
     * @route ("/croissantF", name="croissantF")
     */
    function croissantF(CompetitionRepository $repository){
        //$repo= $this->getDoctrine()->getRepository(Classroom::class);
        $competition= $repository->trie_croissant_datefin();
        $compet=$repository->findAll();

        $rdvs = [];

        foreach ($compet as $event)
        {
            $rdvs[]=[
                'title'=>$event->getNom(),
                'start'=>$event->getDatedeb()->format("Y-m-d"),
                'end'=>$event->getDatefin()->format("Y-m-d"),
                'backgroundColor'=> '#0ec51',
                'borderColor'=> 'green',
                'textColor' => 'black'
            ];
        }

        $data = json_encode($rdvs);
        return $this->render('/competition/AfficheC.html.twig',compact('competition','data'));
    }

    /**
     * @param CompetitionRepository $repository
     * @return Response
     * @route ("/decroissantF", name="decroissantF")
     */
    function decroissantF(CompetitionRepository $repository){
        //$repo= $this->getDoctrine()->getRepository(Classroom::class);
        $competition= $repository->trie_decroissant_datefin();
        $compet=$repository->findAll();

        $rdvs = [];

        foreach ($compet as $event)
        {
            $rdvs[]=[
                'title'=>$event->getNom(),
                'start'=>$event->getDatedeb()->format("Y-m-d"),
                'end'=>$event->getDatefin()->format("Y-m-d"),
                'backgroundColor'=> '#0ec51',
                'borderColor'=> 'green',
                'textColor' => 'black'
            ];
        }

        $data = json_encode($rdvs);
        return $this->render('/competition/AfficheC.html.twig',compact('competition','data'));
    }



    /**
     * @param CompetitionRepository $repository
     * @return Response
     * @route ("/croissantN", name="croissantN")
     */
    function croissantN(CompetitionRepository $repository){
        //$repo= $this->getDoctrine()->getRepository(Classroom::class);
        $competition= $repository->trie_croissant_nom();
        $compet=$repository->findAll();

        $rdvs = [];

        foreach ($compet as $event)
        {
            $rdvs[]=[
                'title'=>$event->getNom(),
                'start'=>$event->getDatedeb()->format("Y-m-d"),
                'end'=>$event->getDatefin()->format("Y-m-d"),
                'backgroundColor'=> '#0ec51',
                'borderColor'=> 'green',
                'textColor' => 'black'
            ];
        }

        $data = json_encode($rdvs);
        return $this->render('/competition/AfficheC.html.twig',compact('competition','data'));
    }

    /**
     * @param CompetitionRepository $repository
     * @return Response
     * @route ("/decroissantN", name="decroissantN")
     */
    function decroissantN(CompetitionRepository $repository){
        //$repo= $this->getDoctrine()->getRepository(Classroom::class);
        $competition= $repository->trie_decroissant_nom();
        $compet=$repository->findAll();

        $rdvs = [];

        foreach ($compet as $event)
        {
            $rdvs[]=[
                'title'=>$event->getNom(),
                'start'=>$event->getDatedeb()->format("Y-m-d"),
                'end'=>$event->getDatefin()->format("Y-m-d"),
                'backgroundColor'=> '#0ec51',
                'borderColor'=> 'green',
                'textColor' => 'black'
            ];
        }

        $data = json_encode($rdvs);
        return $this->render('/competition/AfficheC.html.twig',compact('competition','data'));
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
     * @route ("/games", name="games")
     */

    public function games(Request $request, PaginatorInterface $paginator, JeuxRepository $jeuxRepository )
    {
        $articles=$jeuxRepository->findAll();
        $jeux=$paginator->paginate(
            $articles,
            $request->query->getInt('page',1),
            2
        );


        return $this->render('competition/games.html.twig', [
            'jeux'=>$jeux
        ]);
    }


    /**
     * @route ("/competition_detail/{id}", name="detail")
     */

    public function detail(CompetitionRepository $repo, JeuxRepository $repoJeux, $id)
    {
        $com = $repo->find($id);
        $jeux =$repoJeux->findAll();
        return $this->render('competition/detail.html.twig', [
            'competition' => $com,
            'jeux'=>$jeux,

        ]);
    }


    /**
     * @Route("/CompetitionM",name="allcompetitions")
     */
    public function displayCompetitions (Request $request, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Competition::class)->findAll();
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'post:read']);
        dump($jsonContent);
        return new Response(json_encode($jsonContent));
    }


    public function __construct(BuilderInterface $customQrCodeBuilder)
    {
        $result = $customQrCodeBuilder
            ->size(400)
            ->margin(20)
            ->build();
    }


}
