<?php

namespace App\Controller;

use App\Entity\Livreur;
use App\Form\LivreurType;
use App\Repository\LivreurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LivreurController extends AbstractController
{
    /**
     * @Route("/livreur", name="livreur")
     */
    public function index(): Response
    {
        return $this->render('livreur/index.html.twig', [
            'controller_name' => 'LivreurController',
        ]);
    }

    /**
     * @param LivreurRepository $repository
     * @return Response
     * @Route("/affichelivreur",name="affichelivreur")
     */
    function Affiche(LivreurRepository $repository) //meme chose que metre 33 ligne
    {
        //$repo=$this->getDoctrine()->getRepository(ClassroomRepository::class);
        $livreur=$repository->findAll();
        return $this->render('/livreur/affiche.html.twig',['c'=>$livreur]);

    }

    /**
     * @param $id
     * @param LivreurRepository $rep
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerlivreur/{id}", name="supprimerlivreur")
     */
    function Delete($id,LivreurRepository $rep)
    {
        $livreur=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($livreur);
        $em->flush();
        return $this->redirectToRoute('affichelivreur');

    }

    /**
     * @param Request $request
     * @param Response
     * @Route ("/ajouterlivreur", name="ajouterlivreur")
     */
    function Ajout(Request $request){
        $livraison=new Livreur();
        $form=$this->createForm(LivreurType::class,$livraison);
            $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($livraison);
            $em->flush();
            return $this->redirectToRoute('affichelivreur');

        }
        return $this->render('livreur/ajout.html.twig',['f'=>$form->createView()]);

    }

    /**
     * @param Request $request
     * @param int $id
     * @param LivreurRepository $repository
     * @return Response
     * @Route ("/modifierlivreur/{id}",name="modifierlivreur")
     */
    public function modify(Request $request, int $id,LivreurRepository $repository): Response
    {
        //$entityManager = $this->getDoctrine()->getManager();
        $livraison=$repository->find($id);
        //$classroom = $entityManager->getRepository(Classroom::class)->find($id);
        $form = $this->createForm(LivreurType::class, $livraison);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('affichelivreur');

        }

        return $this->render("livreur/modifier.html.twig", [
            "form_title" => "Modifier livreur",
            "fo" => $form->createView(),
        ]);
    }
}
