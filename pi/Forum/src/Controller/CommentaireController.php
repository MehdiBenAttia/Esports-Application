<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentaireController extends AbstractController
{
    /**
     * @Route("/commentaire", name="commentaire")
     */
    public function index(): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'controller_name' => 'CommentaireController',
        ]);
    }
    /**
     * @param CommentaireRepository $repository
     * @return Response
     * @route ("/Afficheco", name="AfficheCom")
     */
    function Affiche(CommentaireRepository $repository)
    {
        $classroom= $repository->findAll();
        return $this->render('commentaire/affichec.html.twig',['cc'=>$classroom]);
    }
    /**
     * @param $id
     * @param CommentaireRepository $rep
     * @route ("/Deletecom/{id}", name="dc")
     */
    function Delete($id,CommentaireRepository $rep){
        $classroom=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($classroom);
        $em->flush();
        return $this->redirectToRoute('AfficheCom');
    }
    /**


     * @return Response
     * @route ("/Ajoutcoback/{id}", name="Acob")
     */
    function Ajoutcoback(PostRepository $rep ,Request $request,$id){

        $classroom= $rep->find($id);


        $commentaire=new Commentaire();
        $commentaire->setPost($classroom);

        $commentaire->setDatec(new \DateTime("now"));
        $commentaire->getNomuser("admin_commentaire");
        $form=$this->createForm(CommentaireType::class,$commentaire);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();
            return $this->redirectToRoute('AfficheC');
        }
        return $this->render('commentaire/ajout.html.twig',['ff'=>$form->createView()]);
    }

    /**
     * @Route("Update/{id}",name="Uco")
     */
    function Update( CommentaireRepository $repository,$id,Request $request)
    {
        $P = $repository->find($id);
        $form = $this->createForm(CommentaireType::class, $P);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheCom");
        }
        return $this->render('commentaire/updatec.html.twig',
            [
                'ff' => $form->createView(),
                "form_title" => "Modifier un commentaire"
            ]);
    }
    /**
     * @param CommentaireRepository $repository
     * @return Response
     * @route ("/Affichecofro", name="AfficheComfro")
     */
    function Affichecofront(CommentaireRepository $repository)
    {
        $classroom= $repository->findAll();
        return $this->render('post/detailpost.html.twig',['ccf'=>$classroom]);
    }




    /**


     * @return Response
     * @route ("/Ajoutcofront/{id}", name="aAcof")
     */

    function Ajoutcofront(PostRepository $rep ,Request $request,$id){

        $classroom= $rep->find($id);


        $commentaire=new Commentaire();
        $commentaire->setPost($classroom);

        $commentaire->setDatec(new \DateTime("now"));
        $commentaire->getNomuser("admin_commentaire");
        $form=$this->createForm(CommentaireType::class,$commentaire);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();
            return $this->redirectToRoute('Affichepostfront');
        }
        return $this->render('commentaire/ajoutcomfront.html.twig',['ffr'=>$form->createView()]);
    }

    /**
     * @param $id
     * @param CommentaireRepository $rep
     * @route ("/Deletecomfront/{id}", name="dcf")
     */
    function Deletecomfront($id,CommentaireRepository $rep){
        $commentaire=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($commentaire);
        $em->flush();
        return $this->redirectToRoute('Affichepostfront');
    }

    /**
     * @Route("Updatecofront/{id}",name="Ucof")
     */
    function Updatecofront( CommentaireRepository $repository,$id,Request $request)
    {
        $P = $repository->find($id);
        $form = $this->createForm(CommentaireType::class, $P);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("Affichepostfront");
        }
        return $this->render('commentaire/updatecofront.html.twig',
            [
                'ffu' => $form->createView(),
                "form_title" => "Modifier un commentaire"
            ]);
    }

}
