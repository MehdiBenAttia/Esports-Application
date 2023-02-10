<?php

namespace App\Controller;

use App\Entity\Typerec;
use App\Form\TyperecType;
use App\Repository\TyperecRepository;
use Knp\Component\Pager\PaginatorInterface;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

use Symfony\Component\Routing\Annotation\Route;

class TyperecController extends AbstractController
{
    /**
     * @Route("/typerec", name="typerec")
     */
    public function index(): Response
    {
        return $this->render('typerec/index.html.twig', [
            'controller_name' => 'TyperecController',
        ]);
    }


    /**
     * @param TyperecRepository $repository
     * @return Response
     * @route ("/back/Affichertype", name="Affichetype")
     */
    function Affiche(TyperecRepository $repository , Request $request , PaginatorInterface $paginator)
    {

        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('stat des categories');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));

        $cat =$repository->findAll();
        $data=[];
        $nom=[];
        $count=[];
        //  dump($cat);
        //  die();
        foreach ($cat as $categorie)
        {
            $nom[]=$categorie->getCatrec();
            $count[]=count($categorie->getReclamations());
        }
        $i=0;
        foreach ($nom as $p)
        {
            array_push($data,[$nom[$i],$count[$i]]);
            $i++;
        }

        $ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));


        $categorie= $repository->findby([],
            ['id' => 'Asc']) ;
        $cat=$paginator->paginate(
            $categorie,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('back/categorie/Affichec.html.twig',
            ['cat'=>$cat,
                'chart'=>$ob]
        );
    }




    /**
     * @param $id
     * @param TyperecRepository $rep
     * @route ("/back/Deletet/{id}", name="dt")
     */
    function Delete($id,TyperecRepository $rep){
        $categorie=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($categorie);
        $em->flush();
        return $this->redirectToRoute('Affichetype');
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/back/Ajouttype", name="At")
     */
    function Ajout(Request $request){
        $categorie=new Typerec() ;
        $categorie->setDate(new \DateTime("now"));

        $form=$this->createForm(TyperecType::class,$categorie);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();

            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('Affichetype');
        }
        return $this->render('back/categorie/Ajoutc.html.twig',['f'=>$form->createView()]);
    }

    /**
     * @Route("/back/Updatetype/{id}",name="Ut")
     */
    function Update(TyperecRepository $repository,$id,Request $request)
    {
        $categorie = $repository->find($id);
        $categorie->setDate(new \DateTime("now"));
        $form = $this->createForm(TyperecType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("Affichetype");
        }
        return $this->render('back/categorie/Updatec.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Update the category"
            ]);
    }


    /**
     *
     * @route ("/addtyperecJSON/new",name="addtyperecJSON")
     */
    public function addcategorie(Request $request,NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $categorie=new Typerec();
        $categorie->setCatrec($request->get('catrec'));
        $categorie->setDate(new \DateTime('now'));
        $categorie->setDescrip($request->get('descrip'));
        $categorie->setLevel($request->get('level'));





        $em->persist($categorie);
        $em->flush();
        $jsonContent=$Normalizer->normalize($categorie,'json',['groups'=>'fares']);
        return new Response(json_encode($jsonContent));;
    }

    /**
     * @Route("/CategorieR/{id}",name="CategorieR")
     */
    public function recup (Request $request, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Typerec::class)->find($id);
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'fares']);

        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route ("/updatecatrecPJSON", name="updatecatrecPJSON")
     */
    public function updateCaPJSON(Request $request,NormalizerInterface $normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $categorie=$em->getRepository(Typerec::class)->find($request->get("id"));

        $categorie->setCatrec($request->get('catrec'));
        $categorie->setDate(new \DateTime('now'));
        $categorie->setDescrip($request->get('descrip'));
        $categorie->setLevel($request->get('level'));
        $em->flush();
        $jsonContent=$normalizer->normalize($categorie,'json', ['groups'=>'fares']);
        return new Response("Information updated successfully".json_encode($jsonContent));;
    }

    /**
     * @Route ("/showcatrecJSON", name="showcatrecJSON")
     */
    public function showCategoriePJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Typerec::class)->findAll();
        // dd($user);
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'fares']);
        dump($jsonContent);
        return new Response(json_encode($jsonContent));

    }

    /**
     * @Route ("/deletecatrecJSON", name="deletecatrecJSON")
     */
    public function deleteCategoriePJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Typerec::class)->find($request->get("id"));
        $em->remove($user);
        $em->flush();
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'fares']);
        return new Response(json_encode($jsonContent));
    }

}
