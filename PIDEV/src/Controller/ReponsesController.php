<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reponses;
use App\Form\ReclamationType;
use App\Form\ReponsesType;
use App\Repository\ReclamationRepository;
use App\Repository\ReponsesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReponsesController extends AbstractController
{
    /**
     * @Route("/reponses", name="reponses")
     */
    public function index(): Response
    {
        return $this->render('reponses/index.html.twig', [
            'controller_name' => 'ReponsesController',
        ]);
    }

    /**
     * @param ReponsesRepository $repository
     * @return Response
     * @route ("/Afficherep", name="AfficheRep")
     */
    function Affiche(ReponsesRepository $repository){
        $reponse= $repository->yeaah();
        return $this->render('/reponses/AfficheRep.html.twig',['reponse'=>$reponse]);
    }

    /**
     * @param $id
     * @param ReponsesRepository $rep
     * @route ("/Delete/{id}", name="d")
     */
    function Delete($id,ReponsesRepository $rep){
        $reponse=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reponse);
        $em->flush();
        return $this->redirectToRoute('AfficheRep');
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/Ajoutrep/{id}", name="Arep")
     */

    function Ajout(Request $request,ReclamationRepository $repository,$id){
        $reponses=new Reponses() ;
        $reponses->setDate(new \DateTime("now"));
$rec=$repository->find($id);
$reponses->setReclamation($rec);
        $form=$this->createForm(ReponsesType::class,$reponses);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($reponses);
            $em->flush();
            return $this->redirectToRoute('AfficheRep');
        }
        return $this->render('reponses/AjoutRep.html.twig',['f'=>$form->createView()]);
    }







    /**
     * @Route("/Update/{id}",name="U")
     */
    function Update(ReponsesRepository $repository,$id,Request $request)
    {
        $reponse = $repository->find($id);
        $reponse->setDate(new \DateTime("now"));
        $form = $this->createForm(ReponsesType::class, $reponse);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheRep");
        }
        return $this->render('reponses/UpdateRep.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Update the response"
            ]);
    }
}
