<?php

namespace App\Controller;

use App\Entity\Reply;
use App\Entity\User;
use App\Form\ReplyType;
use App\Repository\CommentaireRepository;
use App\Repository\ReplyRepository;
use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use App\Controller\CommentaireController;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReplyController extends AbstractController
{
    /**
     * @Route("/reply", name="reply")
     */
    public function index(): Response
    {
        return $this->render('reply/index.html.twig', [
            'controller_name' => 'ReplyController',
        ]);
    }
    /**
     * @param CommentaireRepository $repository
     * @param ReplyRepository $repo
     * @Route ("/AfficherfrontReply/{id}", name="affichfrontreply")
     */
    public function Affichefrontreply(CommentaireRepository  $repository,$id, ReplyRepository  $repo)
    {
        $commentaire=$repository->find($id);
        $reply=$repo->aff_re();


        return $this->render('front/detailpost.html.twig',[
            'reply'=>$reply,

            'commentaire'=>$commentaire
        ]);

    }
    /**


     * @return Response
     * @route ("/Ajoutrefront/{id}", name="ajoutREfro")
     */

    function Ajoutreplyfront(CommentaireRepository $rep ,Request $request,$id){

        $reply=new Reply();
        $commentaire= $rep->find($id);


        $reply->setCommentaire($commentaire);

        $reply->setDateR(new \DateTime("now"));
        $user1 = $this->get('security.token_storage')->getToken()->getUser();
        if($user1 instanceof User)
        {
            $reply->setNomUser($user1->getUsername());}
        else {$reply->setNomUser("?");}
        $form=$this->createForm(ReplyType::class,$reply);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($reply);
            $em->flush();
            return $this->redirectToRoute('Affichepostfront');
        }
        return $this->render('front/ajoutREfront.html.twig',['ffrr'=>$form->createView()]);
    }
    /**
     * @param $id
     * @param ReplyRepository $rep
     * @route ("/DeleteREfront/{id}", name="dref")
     */
    function Deletereplyfront($id,ReplyRepository $rep){
        $reply=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reply);
        $em->flush();
        return $this->redirectToRoute('Affichepostfront');
    }
    /**
     * @Route("UpdateREfront/{id}",name="UREf")
     */
    function Updatereplyfront( ReplyRepository $repository,$id,Request $request)
    {
        $P = $repository->find($id);
        $form = $this->createForm(ReplyType::class, $P);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("Affichepostfront");
        }
        return $this->render('front/updaterefront.html.twig',
            [
                'ffu' => $form->createView(),
                "form_title" => "Modifier une réponse"
            ]);
    }
}
