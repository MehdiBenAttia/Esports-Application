<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;

use App\Repository\PostRepository;
use App\Repository\ReplyRepository;
use Sentiment\Analyzer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


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
            return $this->redirectToRoute('AfficheCom');
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
    function Affichecofront(CommentaireRepository $repository,ReplyRepository $rep)
    {
        $classroom= $repository->findAll();
        $reoly=$rep->aff_re();

        return $this->render('post/detailpost.html.twig',['ccf'=>$classroom,'reply'=>$reoly]);
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

            //AnalyseComment
            $analyzer = new Analyzer();

            //$a = array("neg => ", "new =>  ", "pos =>  ","compound =>  ");
            $b = $analyzer->getSentiment($commentaire->getDescriptionc());

            $output_text =  $b;


            $json = json_encode( $output_text);
            $commentaire->setAnalyseCo($json );




            //Analyse comment

            if($b<0.5){
                $em=$this->getDoctrine()->getManager();
                $em->persist($commentaire);
                $em->flush();
                return $this->redirectToRoute('Affichepostfront');
            }
            return $this->render('commentaire/bad_word.html.twig');

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
    /**
     * @Route("/commentaire/{id}",name="commj")
     */
    public function CommentaireId(Request $request, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $commentaire = $em->getRepository(Commentaire::class)->find($id);
        $jsonContent = $Normalizer->normalize($commentaire, 'json', ['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }

    /**
     *
     * @route ("/addcommentaireJSON/new",name="addcommentaire")
     */
    public function addcommentaire(Request $request,NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $produit=new Produit();
        $produit->setReference($request->get('reference'));
        $produit->setImage($request->get('image'));
        $produit->setCategorie($request->get('categorie'));
        $produit->setMarque($request->get('marque'));
        $produit->setNom($request->get('nom'));
        $produit->setPrix($request->get('prix'));
        $produit->setType($request->get('type'));
        $em->persist($produit);
        $em->flush();
        $jsonContent=$Normalizer->normalize($produit,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));;

    }




/**
 * @Route ("/updateCommentaireJSON/{id}", name="updateCommentaireJSON")
 */
public function updateCommentaireJSON(Request $request,NormalizerInterface $normalizer,$id)
{
    $em=$this->getDoctrine()->getManager();
    $commentaire=$em->getRepository(Commentaire::class)->find($id);
    $commentaire->setNomuser($request->get('Nomuser'));
    $commentaire->setDescriptionc($request->get('descriptionc'));
    $em->flush();
    $jsonContent=$normalizer->normalize($commentaire,'json', ['groups'=>'post:read']);
    return new Response("Information updated successfully".json_encode($jsonContent));;
}
}
