<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use App\Repository\ReponsesRepository;
use Knp\Component\Pager\PaginatorInterface;
use Omines\DataTablesBundle\Adapter\ArrayAdapter;
use Omines\DataTablesBundle\Adapter\Doctrine\ORMAdapter;
use Omines\DataTablesBundle\Column\DateTimeColumn;
use Omines\DataTablesBundle\Column\TextColumn;
use Omines\DataTablesBundle\DataTableFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;





class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="reclamation")
     */
    public function index(): Response
    {
        return $this->render('basic_back.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }

    /**
     * @Route("/front", name="front")
     */
    public function front(): Response
    {
        return $this->render('front.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }

     

    /**
     * @param ReclamationRepository $repository
     * @return Response
     * @route ("/Afficherrec", name="AfficheR")
     */
    function Affiche(Request $request,ReclamationRepository $rep,PaginatorInterface $paginator,
                    DataTableFactory $dataTableFactory
    ){
       /* $rec=$rep->find_reclam_by_level();
        $rec=$paginator->paginate(
            $rec,
            $request->query->getInt('page',1),
            4
        );*/
        $table = $dataTableFactory->create()
            ->add('NomUser', TextColumn::class, ['label' => 'nom'])
            ->add('email', TextColumn::class, ['label' => 'email'])
            ->add('Message', TextColumn::class , ['label' => 'message'])
            ->add('level', TextColumn::class, [
                'field' => 'categorie.level',
                'label' => 'level'
            ])
            ->add('etat', TextColumn::class, ['label' => 'etat'])
            ->add('Date',  DateTimeColumn::class, ['format' => 'd-m-Y' , 'label' => 'date'])
            ->add('id' , TextColumn::class, [
                'label' =>  'actions',
                'render' =>  function($value, $context) {
                    return sprintf('<a href="/Deleter/%u">
                     <img src="back/images/faces/bin.jpg" alt="image"/>
                    </a>
                     <a href="/Ajoutrep/%u" style="margin: auto">
                     Add a response</a>
                     <a href="/Updater/%u" style="margin: auto">
                     Update
                     </a>
                      ', $value, $value,$value);
                }
            ] )
            // ->add('categorie', TextColumn::class)
            ->createAdapter(ORMAdapter::class, [
                'entity' => Reclamation::class,
            ])
            ->handleRequest($request);

        if ($table->isCallback()) {
            return $table->getResponse();
        }

        return $this->render('reclamation/Affiche.html.twig', [
          //  'rec' => $rec,
           'datatable' => $table
        ]);
    }

    /**
     * @param ReclamationRepository $repository
     * @return Response
     * @route ("/Affrhigh", name="Affichehigh")
     */
    function Affichehigh(Request $request,ReclamationRepository $rep , PaginatorInterface $paginator){
        $reclam=$rep->high([],
            ['id' => 'Asc']) ;
        $rec=$paginator->paginate(
            $reclam,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('reclamation/afficheNivRec.html.twig', [
            'rec' => $rec,
        ]);
    }
    /**
     * @param ReclamationRepository $repository
     * @return Response
     * @route ("/Affrhimed", name="Affichmed")
     */
    function Affichemed(Request $request,ReclamationRepository $rep , PaginatorInterface $paginator){
        $reclam=$rep->med([],
            ['id' => 'Asc']) ;
        $rec=$paginator->paginate(
            $reclam,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('reclamation/afficheNivRec.html.twig', [
            'rec' => $rec,
        ]);
    }
    /**
     * @param ReclamationRepository $repository
     * @return Response
     * @route ("/Affrhlow", name="Affichlow")
     */
    function Affichlow(Request $request,ReclamationRepository $rep , PaginatorInterface $paginator){
        $reclam=$rep->low([],
            ['id' => 'Asc']) ;
        $rec=$paginator->paginate(
            $reclam,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('reclamation/afficheNivRec.html.twig', [
            'rec' => $rec,
        ]);
    }

    /**
     * @param ReclamationRepository $repository
     * @return Response
     * @route ("/Afficherrecfront", name="AfficheRfront")
     */

    function Afficherfront(Request $request,ReclamationRepository $rep , PaginatorInterface $paginator){

        $reclam=$rep->findby([],
            ['id' => 'Asc']) ;
        $rec=$paginator->paginate(
            $reclam,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('reclamation/afficherfront.html.twig', [
            'rec' => $rec,
        ]);
    }



    /**
     * @param $id
     * @param ReclamationRepository $rep
     * @route ("/Deleter/{id}", name="de")
     */
    function Delete($id,ReclamationRepository $rep){
        $reclam=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reclam);
        $em->flush();
        return $this->redirectToRoute('AfficheR');
    }
    /**
     * @param $id
     * @param ReclamationRepository $rep
     * @route ("/Deleterfront/{id}", name="deletefront")
     */
    function Deletefront($id,ReclamationRepository $rep){
        $reclam=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reclam);
        $em->flush();
        return $this->redirectToRoute('AfficheRfront');
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/Ajoutrec", name="Arec")
     */

    function Ajout(Request $request){
        $reclamation=new Reclamation();
        $reclamation->setDate(new \DateTime("now"));
        $form=$this->createForm(ReclamationType::class,$reclamation);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('AfficheR');
        }
        return $this->render('reclamation/Ajout.html.twig',['f'=>$form->createView()]);
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/Ajoutfront", name="Ajoutfront")
     */

    function Ajoutfront(Request $request){
        $reclamation=new Reclamation();
        $reclamation->setDate(new \DateTime("now"));
        $form=$this->createForm(ReclamationType::class,$reclamation);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $autre = $request->get('autre');
            if($autre)
            {
                $categorie = new Categorie();
                $categorie->setCatrec($autre);
                $categorie->setDate(new \DateTime('now'));
                $categorie->setLevel('custom');
                $em->persist($categorie);
                $reclamation->setCategorie($categorie);
            }
            $reclamation->setEtat("en cours");
                $em->persist($reclamation);
                $em->flush();
            return $this->redirectToRoute('Ajoutfront');
        }
        return $this->render('reclamation/ajoutfront.html.twig',['f'=>$form->createView()]);
    }




    /**
     * @Route("/Updater/{id}",name="Up")
     */
    function Update(ReclamationRepository $repository,$id,Request $request)
    {
        $reclamation = $repository->find($id);
        $reclamation->setDate(new \DateTime("now"));
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheR");
        }
        return $this->render('reclamation/Update.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Update the complaint"
            ]);
    }


    /**
     * @Route("/Updaterfront/{id}",name="Upfront")
     */
    function Updatefront(ReclamationRepository $repository,$id,Request $request)
    {
        $reclamation = $repository->find($id);
        $reclamation->setDate(new \DateTime("now"));
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheRfront");
        }
        return $this->render('reclamation/Updatefront.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Update the complaint"
            ]);
    }


    /**
     * @Route("/search", name="ajax")
     */
    public function searchajax(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Reclamation::class);
        $requestString=$request->get('searchValue');
        $rec = $repository->findReclamationbyname($requestString);
        return $this->render('reclamation/AjaxRec.html.twig.twig', [
            "rec"=>$rec,
        ]);
    }




}
