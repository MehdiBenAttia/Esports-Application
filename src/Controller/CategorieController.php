<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Form\ReponsesType;
use App\Repository\CategorieRepository;
use App\Repository\ReponsesRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use Symfony\Component\PhpParser\Node\Exp;
use Ob\HighchartsBundle\Highcharts\Highchart;





class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="categorie")
     */
    public function index(): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }




    /**
     * @param CategorieRepository $repository
     * @return Response
     * @route ("/Affichercat", name="Affichec")
     */
    function Affiche(CategorieRepository $repository , Request $request , PaginatorInterface $paginator)
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
        return $this->render('/categorie/Affichec.html.twig',
            ['cat'=>$cat,
                'chart'=>$ob]
        );
    }




    /**
     * @param $id
     * @param CategorieRepository $rep
     * @route ("/Deletec/{id}", name="dc")
     */
    function Delete($id,CategorieRepository $rep){
        $categorie=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($categorie);
        $em->flush();
        return $this->redirectToRoute('Affichec');
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/Ajoutc", name="Ac")
     */
    function Ajout(Request $request){
        $categorie=new Categorie() ;
        $categorie->setDate(new \DateTime("now"));

        $form=$this->createForm(CategorieType::class,$categorie);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();

            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('Affichec');
        }
        return $this->render('categorie/Ajoutc.html.twig',['f'=>$form->createView()]);
    }

    /**
     * @Route("/Updatec/{id}",name="Uc")
     */
    function Update(CategorieRepository $repository,$id,Request $request)
    {
        $categorie = $repository->find($id);
        $categorie->setDate(new \DateTime("now"));
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("Affichec");
        }
        return $this->render('categorie/Updatec.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Update the category"
            ]);
    }




}
