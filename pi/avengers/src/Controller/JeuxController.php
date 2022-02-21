<?php

namespace App\Controller;


use App\Entity\Jeux;
use App\Form\JeuxType;
use App\Repository\JeuxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class JeuxController extends AbstractController
{
    /**
     * @Route("/jeux", name="jeux")
     */
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'JeuxController',
        ]);
    }
    /**
     * @Route("/home", name="home")
     */
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }


    /**
     * @param JeuxRepository $repository
     * @return Response
     * @route ("/Affiche", name="AfficheJ")
     */
    function Affiche(JeuxRepository $repository){
        //$repo= $this->getDoctrine()->getRepository(Classroom::class);
        $jeux= $repository->findAll();
        return $this->render('/jeux/Affiche.html.twig',['jeux'=>$jeux]);
    }

    /**
     * @param $id
     * @param JeuxRepository $rep
     * @route ("/Delete/{id}", name="d")
     */
    function Delete($id,JeuxRepository $rep){
        $jeux=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($jeux);
        $em->flush();
        return $this->redirectToRoute('AfficheJ');
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/Ajout", name="A")
     */

    function Ajout(Request $request){
        $jeux=new Jeux();
        $form=$this->createForm(JeuxType::class,$jeux);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($jeux);
            $em->flush();
            return $this->redirectToRoute('AfficheJ');
        }
        return $this->render('jeux/Ajout.html.twig',['f'=>$form->createView()]);
    }

    /**
     * @Route("/Update/{id}",name="U")
     */
    function Update(JeuxRepository $repository,$id,Request $request)
    {
        $jeux = $repository->find($id);
        $form = $this->createForm(JeuxType::class, $jeux);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheJ");
        }
        return $this->render('jeux/Update.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Modifier un jeu"
            ]);
    }

//    public function searchBar()
//    {
//        $form = $this->createFormBuilder(null)
//            ->setAction($this->generateUrl('handle_search'))
//            ->add("query",  TextType::class, [
//                'attr' => [
//                    'placeholder'   => 'Enter search query...'
//                ]
//            ])
//            ->add("submit", SubmitType::class)
//            ->getForm()
//        ;
//
//        return $this->render('jeux/Affiche.html.twig', [
//            'f' => $form->createView()
//        ]);
//    }
//
//    /**
//     * @Route("/handleSearch/{_query?}", name="handle_search", methods={"POST", "GET"})
//     */
//    public function handleSearchRequest(Request $request, $_query)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        if ($_query)
//        {
//            $data = $em->getRepository(Jeux::class)->findByName($_query);
//        } else {
//            $data = $em->getRepository(Jeux::class)->findAll();
//        }
//
//        // iterate over all the resuls and 'inject' the image inside
//        for ($index = 0; $index < count($data); $index++)
//        {
//            $object = $data[$index];
//            // http://via.placeholder.com/35/0000FF/ffffff
//            $object->setImage("http://via.placeholder.com/35/0000FF/ffffff");
//        }
//
//        // setting up the serializer
//        $normalizers = [
//            new ObjectNormalizer()
//        ];
//
//        $encoders =  [
//            new JsonEncoder()
//        ];
//
//        $serializer = new Serializer($normalizers, $encoders);
//
//        $data = $serializer->serialize($data, 'json');
//
//        return new JsonResponse($data, 200, [], true);
//    }


//    /**
//     * @Route ("Affiche/search/", name="jeux")
//     */
//    function Search(JeuxRepository $repository,Request $request){
//        $data=$request->get('a');
//        $jeux=$repository->findBy(['id'=>$data]);
//        return $this->render('jeux/Affiche.html.twig',
//            ['jeux'=>$jeux]);
//    }
}
