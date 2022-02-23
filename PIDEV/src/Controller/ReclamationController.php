<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use App\Repository\ReponsesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;




class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="reclamation")
     */
    public function index(): Response
    {
        return $this->render('basic_back.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }
    /**
     * @Route("/front", name="front")
     */
    public function front(): Response
    {
        return $this->render('front.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }

    /**
     * @param ReclamationRepository $repository
     * @return Response
     * @route ("/Afficherrec", name="AfficheR")
     */
    function Affiche(ReclamationRepository $repository){
        $reclamation= $repository->findAll();
        return $this->render('/reclamation/Affiche.html.twig',['reclamation'=>$reclamation]);
    }


    /**
     * @param $id
     * @param ReclamationRepository $rep
     * @route ("/Deleter/{id}", name="de")
     */
    function Delete($id,ReclamationRepository $rep){
        $reclam=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reclam);
        $em->flush();
        return $this->redirectToRoute('AfficheR');
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/Ajoutrec", name="Arec")
     */

    function Ajout(Request $request){
        $reclamation=new Reclamation();
        $reclamation->setDate(new \DateTime("now"));
        $form=$this->createForm(ReclamationType::class,$reclamation);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('AfficheR');
        }
        return $this->render('reclamation/Ajout.html.twig',['f'=>$form->createView()]);
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/Ajoutfront", name="Ajoutfront")
     */

    function Ajoutfront(Request $request){
        $reclamation=new Reclamation();
        $reclamation->setDate(new \DateTime("now"));
        $form=$this->createForm(ReclamationType::class,$reclamation);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('Ajoutfront');
        }
        return $this->render('reclamation/ajoutfront.html.twig',['f'=>$form->createView()]);
    }




    /**
     * @Route("/Updater/{id}",name="Up")
     */
    function Update(ReclamationRepository $repository,$id,Request $request)
    {
        $reclamation = $repository->find($id);
        $reclamation->setDate(new \DateTime("now"));
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheR");
        }
        return $this->render('reclamation/Update.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Update the complaint"
            ]);
    }
}
