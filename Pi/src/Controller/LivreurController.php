<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Livreur;
use App\Form\LivreurType;
use App\Repository\CommandeRepository;
use App\Repository\LivreurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


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
     * @return RedirectResponse
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
    /**
     * @Route("/liv/{id}",name="liv")
     */
    public function livid(Request $request, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Livreur::class)->find($id);
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }
    /**
     *
     * @route ("/addlivJSON/new",name="addliv")
     */
    public function addliv(Request $request,NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $livreur=new Livreur();
        $livreur->setNom($request->get('nom'));
        $livreur->setEmail($request->get('email'));
        $livreur->setPrenom($request->get('prenom'));
        $livreur->setTel($request->get('tel'));



        $em->persist($livreur);
        $em->flush();
        $jsonContent=$Normalizer->normalize($livreur,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));;




    }
}
