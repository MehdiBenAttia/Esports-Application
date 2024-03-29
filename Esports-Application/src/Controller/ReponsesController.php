<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reponses;
use App\Form\ReclamationType;
use App\Form\ReponsesType;
use App\Repository\ReclamationRepository;
use App\Repository\ReponsesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;



class ReponsesController extends AbstractController
{
    /**
     * @Route("/reponses", name="reponses")
     */
    public function index(): Response
    {
        return $this->render('reponses/index.html.twig', [
            'controller_name' => 'ReponsesController',
        ]);
    }



    /**
     * @param ReponsesRepository $repository
     * @return Response
     * @route ("/back/Afficherrep", name="AfficheRep")
     */
    function Affiche(Request $request,ReponsesRepository $repository , PaginatorInterface $paginator){
        $reponseee = $repository->yeaah();

        $reponseee=$paginator->paginate(
            $reponseee,
            $request->query->getInt('page',1),
            4
        );

        return $this->render('back/reponses/AfficheRep.html.twig', [
              'reponseee' => $reponseee,
        ]);
    }

    /**
     * @param $id
     * @param ReponsesRepository $rep
     * @route ("/back/Delete/{id}", name="d")
     */
    function Delete($id, ReponsesRepository $rep)
    {
        $reponse = $rep->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($reponse);
        $em->flush();
        return $this->redirectToRoute('AfficheRep');
    }

    /**
     * @param Request $request
     * @return Response
     * @route ("/back/Ajoutrep/{id}", name="Arep")
     */

    function Ajout(Request $request, ReclamationRepository $repository, $id,\Swift_Mailer $mailer)
    {
        $reponses = new Reponses();
        $reponses->setDate(new \DateTime("now"));
        $reponses->setNomuser("yyyy");
        $rec = $repository->find($id);

        $rec->setEtat("traité");
        $reponses->setReclamation($rec);
        $form = $this->createForm(ReponsesType::class, $reponses);
        $user1 = $this->get('security.token_storage')->getToken()->getUser();
        $message = (new \Swift_Message('Mail Admin'))
            ->setFrom('mohamedkhalil.trabelsi@esprit.tn')
            ->setTo($rec->getEmail())

            ->setBody(
                "Bienvenue Cher " . $user1->getUsername() . " , Votre reclamation a été traité " . $reponses->getRep()
            );

        $mailer->send($message);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reponses);
            $em->flush();
            return $this->redirectToRoute('AfficheRep');
        }
        return $this->render('back/reponses/AjoutRep.html.twig', ['f' => $form->createView()]);
    }


    /**
     * @Route("/back/Update/{id}",name="U")
     */
    function Update(ReponsesRepository $repository, $id, Request $request)
    {
        $reponse = $repository->find($id);
        $reponse->setDate(new \DateTime("now"));
        $form = $this->createForm(ReponsesType::class, $reponse);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheRep");
        }
        return $this->render('back/reponses/UpdateRep.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Update the response"
            ]);
    }
}
