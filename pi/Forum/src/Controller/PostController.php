<?php

namespace App\Controller;

use App\Repository\CommentaireRepository;
use App\Repository\PostRepository;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;
use App\Form\PostType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;






class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     */
    public function index(): Response
    {
        return $this->render('test.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }
    /**
     * @param PostRepository $repository
     * @return Response
     * @route ("/Affichepo", name="AfficheC")
     */
    function Affiche(PostRepository $repository)
    {
        $classroom= $repository->aff();
        return $this->render('post/affiche.html.twig',['c'=>$classroom]);
    }
    /**
     * @param $id
     * @param PostRepository $rep
     * @route ("/Delete/{id}", name="dp")
     */
    function Delete($id,PostRepository $rep){
        $classroom=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($classroom);
        $em->flush();
        return $this->redirectToRoute('AfficheC');
    }
    /**
     * @param Request $request
     * @return Response
     * @route ("/Ajoutpo", name="A")
     */

    function Ajout(Request $request){
        $classroom=new Post();

        $classroom->setDateP(new \DateTime("now"));
        $form=$this->createForm(PostType::class,$classroom);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $classroom->setNbrJaime(0);
            $em->persist($classroom);
            $em->flush();
            return $this->redirectToRoute('AfficheC');
        }
        return $this->render('post/ajout.html.twig',['f'=>$form->createView()]);
    }
    /**
     * @Route("Updatep/{id}",name="Up")
     */
    function Update( PostRepository $repository,$id,Request $request)
    {
        $Post = $repository->find($id);
        $form = $this->createForm(PostType::class, $Post);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheC");
        }
        return $this->render('post/update.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Modifier un post"
            ]);
    }
    /**
     * @param PostRepository $repository
     * @return Response
     * @route ("/Affichepofro", name="Affichepostfront")
     */
    function Affichefront(PostRepository $repository)
    {
        $classroom= $repository->aff();
        return $this->render('post/affichefrontpost.html.twig',['cf'=>$classroom]);
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/Ajoutpofront", name="Af")
     */

    function Ajoutfront(Request $request){
        $classroom=new Post();

        $classroom->setDateP(new \DateTime("now"));
        $classroom->setNomUser("test_validation");
        $form=$this->createForm(PostType::class,$classroom);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $classroom->setNbrJaime(0);
            $em->persist($classroom);
            $em->flush();
            return $this->redirectToRoute('Affichepostfront');
        }
        return $this->render('post/ajoutfront.html.twig',['ajf'=>$form->createView()]);
    }
    /**
     * @param PostRepository $repository
     * @param CommentaireRepository $repo
     * @Route ("/Afficherfrontdetail/{id}", name="affichfrontdetail")
     */
    public function Affichefrontdetail(PostRepository  $repository,$id, CommentaireRepository  $repo)
    {
        $post=$repository->find($id);
        $commentaire=$repo->findAll();
        $post1=$repository->aff();
        return $this->render('post/detailpost.html.twig',['post'=>$post,'commentaire'=>$commentaire,'post1'=>$post1]);

    }

    /**
     * @param $id
     * @param PostRepository $rep
     * @route ("/Deletepostfront/{id}", name="dpf")
     */
    function Deletepofront($id,PostRepository $rep){
        $classroom=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($classroom);
        $em->flush();
        return $this->redirectToRoute('Affichepostfront');
    }

    /**
     * @Route("Updatepfront/{id}",name="Upf")
     */
    function Updatepofront( PostRepository $repository,$id,Request $request)
    {
        $Post = $repository->find($id);
        $form = $this->createForm(PostType::class, $Post);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("Affichepostfront");
        }
        return $this->render('post/updatepofront.html.twig',
            [
                'fpf' => $form->createView(),
                "form_title" => "Modifier un post"
            ]);
    }
}
