<?php

namespace App\Controller;

use App\Entity\Commentaire;
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
     * @route ("/Affichepoba", name="Affichepostba")
     */
    function Affiche(PostRepository $repository ,Request $request , PaginatorInterface $paginator)
    {

        $classroom= $repository->aff();
        $trie_desc=$repository->tri_com_desc();
        $classroom=$paginator->paginate( $classroom ,
            $request->query->getInt('page',1) , 3
        );
        return $this->render('post/affiche.html.twig',['c'=>$classroom,'desc'=>$trie_desc]);
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
        return $this->render('post/affiche.html.twig',['c'=>$classroom]);
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
        return $this->redirectToRoute('Affichepostba');
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
            return $this->redirectToRoute('Affichepostba');
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
            return $this->redirectToRoute("Affichepostba");
        }
        return $this->render('post/update.html.twig',
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

        return $this->render('post/affichefrontpost.html.twig',['cf'=>$post,'last'=>$last]);
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
            //AnalyseComment
            $analyzer = new Analyzer();

            //$a = array("neg => ", "new =>  ", "pos =>  ","compound =>  ");
            $b = $analyzer->getSentiment($classroom->getDescription());

            $output_text =  $b;


            $json = json_encode( $output_text);
            $classroom->setAnalysePo($json );
            if($b<0.5){
                $em=$this->getDoctrine()->getManager();
                $classroom->setNbrJaime(0);
                $em->persist($classroom);
                $em->flush();
                return $this->redirectToRoute('Affichepostfront');
            } return $this->render('commentaire/bad_word.html.twig');

        }
        return $this->render('post/ajoutfront.html.twig',['ajf'=>$form->createView()]);
    }
    /**
     * @param PostRepository $repository
     * @param CommentaireRepository $repo
     * @Route ("/Afficherfrontdetail/{id}", name="affichfrontdetail")
     */
    public function Affichefrontdetail(PostRepository  $repository,$id, CommentaireRepository  $repo,ReplyRepository $rep)
    {
        $post=$repository->find($id);
        $commentaire=$repo->findAll();
        $reply=$rep->aff_re();
        $post1=$repository->aff();
        return $this->render('post/detailpost.html.twig',['post'=>$post,'commentaire'=>$commentaire,'post1'=>$post1,'reply'=>$reply]);

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
    /**
     * @param PostRepository $repository
     * @param CommentaireRepository $repo
     * @Route ("/Afficherbackcom/{id}", name="affichbackcom")
     */
    public function Affichebackcom(PostRepository  $repository,$id, CommentaireRepository  $repo)
    {
        $post=$repository->find($id);
        $commentaire=$repo->findAll();
        $post1=$repository->aff();
        return $this->render('commentaire/affichec.html.twig',['post'=>$post,'commentaire'=>$commentaire,'post1'=>$post1]);

    }
    /**
     * @Route("/post/{id}",name="postj")
     * @param NormalizerInterface $Normalizer
     *
     */
    public function PostId(Request $request, $id, NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository(Post::class)->find($id);

        $jsonContent = $Normalizer->normalize($post, 'json', ['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }
    /**
     *@Route ("/addcpostJSON/new",name="addpost")

     */
    public function addpost(Request $request,NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $post=new Post();
        $post->setDescription($request->get('description'));
        $post->setImage($request->get('image'));
        $post->setCommunaute($request->get('communaute'));
        $post->setNbrJaime($request->get('nbr_jaim'));
        $post->setNomUser($request->get('nom_user'));
        $post->setSujet($request->get('sujet'));
        $post->setDateP(new \DateTime("now"));

        $em->persist($post);
        $em->flush();
        $jsonContent=$Normalizer->normalize($post,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));;

    }
    /**
     * @Route ("/updatePostJSON/{id}", name="updatePostJSON")
     */
    public function updatePostJSON(Request $request,NormalizerInterface $normalizer,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $post=$em->getRepository(Commentaire::class)->find($id);
        $post->setNomUser($request->get('Nom_user'));
        $post->setDescription($request->get('description'));
        $post->setsujet($request->get('sujet'));
        $em->flush();
        $jsonContent=$normalizer->normalize($post,'json', ['groups'=>'post:read']);
        return new Response("Information updated successfully".json_encode($jsonContent));;
    }
function trie_dsc(){


}

}
