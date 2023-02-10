<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Commentaire;
use App\Entity\User;
use App\Repository\CommentaireRepository;
use App\Repository\PostRepository;

use App\Repository\ReplyRepository;
use Sentiment\Analyzer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;
use App\Form\PostType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Ob\HighchartsBundle\Highcharts\Highchart;

use ProfanityAssert\ProfanityCheck;
use Vangrg\ProfanityBundle\Entity\Profanity;
use Zend\Json\Expr;







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
     * @route ("back/Affichepoba", name="Affichepostba")
     */
    function Affiche(PostRepository $repository ,Request $request , PaginatorInterface $paginator)
    {

        $classroom= $repository->aff();
        $trie_desc=$repository->tri_com_desc();
        $classroom=$paginator->paginate( $classroom ,
            $request->query->getInt('page',1) , 3
        );
        return $this->render('back/affiche.html.twig',['c'=>$classroom,'desc'=>$trie_desc]);
    }
    /**
     * @param PostRepository $repository
     * @return Response
     * @route ("/Affichepobadesc", name="Affichepobadesc")
     */
    function Affichedsc(PostRepository $repository ,Request $request , PaginatorInterface $paginator)
    {

        $classroom=$repository->tri_com_desc();
        $classroom=$paginator->paginate( $classroom ,
            $request->query->getInt('page',1) , 3
        );
        return $this->render('back/affiche.html.twig',['c'=>$classroom]);
    }
    /**
     * @param PostRepository $repository
     * @return Response
     * @route ("/Affichepobaasc", name="Affichepobaasc")
     */
    function Afficheasc(PostRepository $repository ,Request $request , PaginatorInterface $paginator)
    {

        $classroom=$repository->tri_com_asc();
        $classroom=$paginator->paginate( $classroom ,
            $request->query->getInt('page',1) , 3
        );
        return $this->render('back/affiche.html.twig',['c'=>$classroom]);
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
        return $this->redirectToRoute('Affichepostba');
    }
    /**
     * @param Request $request
     * @return Response
     * @route ("back/Ajoutpo", name="Ap")
     */

    function Ajout(Request $request){
        $classroom=new Post();

        $classroom->setDateP(new \DateTime("now"));
        $form=$this->createForm(PostType::class,$classroom);
        $classroom->setNomUser("admin");
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $classroom->setNbrJaime(0);
            $em->persist($classroom);
            $em->flush();
            return $this->redirectToRoute('Affichepostba');
        }
        return $this->render('back/ajout.html.twig',['f'=>$form->createView()]);
    }
    /**
     * @Route("Updatepostback/{id}",name="Upostback")
     */
    function Update( PostRepository $repository,$id,Request $request)
    {
        $Post = $repository->find($id);
        $form = $this->createForm(PostType::class, $Post);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("Affichepostba");
        }
        return $this->render('back/update.html.twig',
            [
                'fu' => $form->createView(),
                "form_title" => "Modifier un post"
            ]);
    }
    /**
     * @param PostRepository $repository
     * @return Response
     * @route ("/Affichepofro", name="Affichepostfront")
     */
    function Affichefront(PostRepository $repository , Request $request , PaginatorInterface $paginator)
    {
        $post= $repository->aff();
        $last= $repository->latest_posts();
        $post=$paginator->paginate( $post ,
            $request->query->getInt('page',1) , 3
        );

        return $this->render('front/affichefrontpost.html.twig',['cf'=>$post,'last'=>$last]);
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/Ajoutpofront", name="Af")
     */

    function Ajoutfront(Request $request){


        $classroom=new Post();
        $classroom->setDateP(new \DateTime("now"));
        $user1 = $this->get('security.token_storage')->getToken()->getUser();
        if($user1 instanceof User)
        {
        $classroom->setNomUser($user1->getUsername());}
        else {$classroom->setNomUser("?");}


        $form=$this->createForm(PostType::class,$classroom);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //AnalyseComment
            $analyzer = new Analyzer();

            //$a = array("neg => ", "new =>  ", "pos =>  ","compound =>  ");
            $b = $analyzer->getSentiment($classroom->getDescription());

            $output_text =  $b;


            $json = json_encode( $output_text);

            $classroom->setAnalysePo($json );

            if($classroom->getAnalysePo()=='{"neg":0}'){
                $em=$this->getDoctrine()->getManager();
                $classroom->setNbrJaime(0);
                $em->persist($classroom);
                $em->flush();
                return $this->redirectToRoute('Affichepostfront');
            }
            return $this->render('front/bad_word.html.twig');

        }
        return $this->render('front/ajoutfront.html.twig',['ajf'=>$form->createView()]);
    }
    /**
     * @param PostRepository $repository
     * @param CommentaireRepository $repo
     * @Route ("/Afficherfrontdetail/{id}", name="affichfrontdetails")
     */
    public function Affichefrontdetail(PostRepository  $repository,$id, CommentaireRepository  $repo,ReplyRepository $rep)
    {
        $post=$repository->find($id);
        $commentaire=$repo->findAll();
        $reply=$rep->aff_re();
        $post1=$repository->aff();
        return $this->render('front/detailpost.html.twig',['post'=>$post,'commentaire'=>$commentaire,'post1'=>$post1,'reply'=>$reply]);

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
        return $this->render('front/updatepofront.html.twig',
            [
                'fpf' => $form->createView(),
                "form_title" => "Modifier un post"
            ]);
    }
    /**
     * @param PostRepository $repository
     * @param CommentaireRepository $repo
     * @Route ("/back/Afficherbackcom/{id}", name="affichbackcom")
     */
    public function Affichebackcom(PostRepository  $repository,$id, CommentaireRepository  $repo)
    {
        $post=$repository->find($id);
        $commentaire=$repo->findAll();
        $post1=$repository->aff();
        return $this->render('back/affichec.html.twig',['post'=>$post,'commentaire'=>$commentaire,'post1'=>$post1]);

    }
    /**
     * @param PostRepository $repository
     * @param CommentaireRepository $repo
     * @Route ("/back/Afficherbackcomm", name="affichbackcom2")
     */
    public function Affichebackcom2(PostRepository  $repository, CommentaireRepository  $repo,Request $request)
    {
        $session=$request->getSession();
        $id=$session->get('id_post');

        $post=$repository->find($id);
        $commentaire=$repo->findAll();
        $post1=$repository->aff();
        return $this->render('back/affichec.html.twig',['post'=>$post,'commentaire'=>$commentaire,'post1'=>$post1]);

    }
    /**
     *
     * @route ("/addcPostJSON/new",name="addPostJSON")
     */
    public function addPost(Request $request,NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $post=new Post();
        $post->setNomUser($request->get('nom_user'));
        $post->setSujet($request->get('sujet'));

        $post->setDescription($request->get('description'));
        $post->setCommunaute($request->get('communaute'));
        $post->setDateP(new \DateTime("now"));
        $post->setNbrJaime(0);




        $em->persist($post);
        $em->flush();
        $jsonContent=$Normalizer->normalize($post,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));;
    }

    /**
     * @Route("/Postid/{id}",name="Postid")
     */
    public function recup (Request $request, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Post::class)->find($id);
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route ("/updatePostJSON", name="updatePostJSON")
     */
    public function updatePostJSON(Request $request,NormalizerInterface $normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $post=$em->getRepository(Post::class)->find($request->get("id"));
        $post->setSujet($request->get('sujet'));
        $post->setDescription($request->get('description'));

        $post->setNomUser($request->get('nom_user'));
        $post->setCommunaute($request->get('communaute'));



        $em->flush();
        $jsonContent=$normalizer->normalize($post,'json', ['groups'=>'post:read']);
        return new Response("Information updated successfully".json_encode($jsonContent));;
    }

    /**
     * @Route ("/showPostJSON", name="showPostJSON")
     */
    public function showPostJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Post::class)->findAll();
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'post:read']);
        dump($jsonContent);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route ("/deletePostJSON", name="deletePostJSON")
     */
    public function deletePostJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Post::class)->find($request->get("id"));
        $em->remove($user);
        $em->flush();
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

}
