<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Entity\User;
use App\Form\EquipeType;
use App\Form\UserType;
use App\Repository\EquipeRepository;
use App\Repository\UserRepository;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class EquipeController extends AbstractController
{
    /**
     * @Route("/equipe", name="equipe")
     */
    public function index(): Response
    {
        return $this->render('equipe/index.html.twig', [
            'controller_name' => 'EquipeController',
        ]);

    }



    /**
     * @param $id
     * @param EquipeRepository $repository
     * @return RedirectResponse
     * @Route("/deletequipe/{id}",name="deletequipe")
     */
    function Delete ($id,EquipeRepository $repository)
    {
        $eq=$repository->find($id);
        $users=$eq->getUsers();
        foreach ($users as $user)
        {
            $eq->removeUser($user);
        }

        $em=$this->getDoctrine()->getManager();
        $em->remove($eq);
        $em->flush();
        return $this->redirectToRoute('afficheequipe');

    }

    /**
     * @param $id
     * @param EquipeRepository $repository
     * @return RedirectResponse
     * @Route("/deletequipeback/{id}",name="deletequipeback")
     */
    function Deleteback ($id,EquipeRepository $repository)
    {
        $eq=$repository->find($id);
        $users=$eq->getUsers();
        foreach ($users as $user)
        {
            $eq->removeUser($user);
        }

        $em=$this->getDoctrine()->getManager();
        $em->remove($eq);
        $em->flush();
        return $this->redirectToRoute('afficheequipeback');

    }




    /**
     * @param EquipeRepository $repository
     * @return Response
     * @Route("/afficheequipe",name="afficheequipe")
     */
    public function AfficherEquipe(EquipeRepository $repository,SessionInterface $session,Request $request)
    {$session=$request->getSession();
        $session->set('la case',"la valeur de la case");
        $em = $this->getDoctrine()->getManager();

        $users = $repository->findAll();
        return $this->render('equipe/afficheequipe.html.twig', [
            'u' => $users]);

    }



    /**
     * @param EquipeRepository $repository
     * @return Response
     * @Route("/afficheequipeback",name="afficheequipeback")
     */
    public function AfficherEquipeback(EquipeRepository $repository,SessionInterface $session,Request $request)
    {$session=$request->getSession();
        $session->set('la case',"la valeur de la case");
        $em = $this->getDoctrine()->getManager();

        $users = $repository->findAll();
        return $this->render('equipeback/afficheequipeback.html.twig', [
            'u' => $users]);

    }

    /**
     * @param Request $request
     * @return RedirectResponse|Response
     * @Route("/ajouterequipe",name="ajouterequipe")
     */

    function Add(Request $request)

    { $session=$request->getSession();

        $user=new Equipe();

        $form=$this->createForm(EquipeType::class,$user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('afficheequipe');
        }
        return $this->render('equipe/ajouterequipe.html.twig',[
            'forme'=>$form->createView()
        ]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Response
     * @Route("/ajouterequipeback",name="ajouterequipeback")
     */

    function Addback(Request $request)

    { $session=$request->getSession();

        $user=new Equipe();

        $form=$this->createForm(EquipeType::class,$user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('afficheequipeback');
        }
        return $this->render('equipeback/ajouterequipeback.html.twig',[
            'forme'=>$form->createView()
        ]);
    }

    /**
     * @param EquipeRepository $repository
     * @param UserRepository $rep
     * @param $id
     * @return RedirectResponse
     * @Route("/ajouterjoueurs/{id}",name="aj")
     */
    function ajouterUser (EquipeRepository $repository,UserRepository $rep,$id,Request $request)
    {
    $session=$request->getSession();
        $ahla= $session->get('idaz');
        $user=$rep->find($id);
        $equipe=$repository->find($ahla);
        $equipe->addUser($user);
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute("afficheequipe");


    }
    /**
     * @param EquipeRepository $repository
     * @param UserRepository $rep
     * @param $id
     * @return RedirectResponse
     * @Route("/ajouterjoueursback/{id}",name="ajback")
     */
    function ajouterUserback (EquipeRepository $repository,UserRepository $rep,$id,Request $request)
    {
        $session=$request->getSession();
        $ahla= $session->get('idaz');
        $user=$rep->find($id);
        $equipe=$repository->find($ahla);
        $equipe->addUser($user);
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute("afficheequipeback");


    }



    /**
     * @param EquipeRepository $repository
     * @param $id
     * @param Request $request
     * @return RedirectResponse|Response
     * @Route("/modiferequipe/{id}",name="modifierequipe")
     */
    function modifier (EquipeRepository $repository,$id,Request $request)
    {$session=$request->getSession();

        $session->set('ide',$id);
        $a=$session->get('ide');

        $user=$repository->find($id);
        $form=$this->createForm(EquipeType::class,$user);

        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("afficheequipe");
        }
        return $this->render("/equipe/updateequipe.html.twig",['fe'=>$form->createView()]);
    }



    /**
     * @param EquipeRepository $repository
     * @param $id
     * @param Request $request
     * @return RedirectResponse|Response
     * @Route("/modiferequipeback/{id}",name="modifierequipeback")
     */
    function modifierback (EquipeRepository $repository,$id,Request $request)
    {$session=$request->getSession();

        $session->set('ide',$id);
        $a=$session->get('ide');

        $user=$repository->find($id);
        $form=$this->createForm(EquipeType::class,$user);

        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("afficheequipeback");
        }
        return $this->render("/equipeback/updateequipeback.html.twig",['fe'=>$form->createView()]);
    }




    /**
     * @param EquipeRepository $repository
     * @param Request $request
     * @return Response
     * @Route("/afficherjoueurs/",name="afficherjoueurs")
     */
    function afficherJoueurs(EquipeRepository $repository,Request $request)
    {
        $session=$request->getSession();
        $ide=$session->get('ide');
        $equipe=$repository->find($ide);
        return $this->render('equipe/joueurs.html.twig', [
            'u' => $equipe]);

    }





    /**
     * @param EquipeRepository $repository
     * @param Request $request
     * @return Response
     * @Route("/afficherjoueursback/",name="afficherjoueursback")
     */
    function afficherJoueursback(EquipeRepository $repository,Request $request)
    {
        $session=$request->getSession();
        $ide=$session->get('ide');
        $equipe=$repository->find($ide);
        return $this->render('equipeback/joueursback.html.twig', [
            'u' => $equipe]);

    }





    /**
     * @param EquipeRepository $repository
     * @param $id
     * @param Request $request
     * @param UserRepository $rep
     * @return RedirectResponse
     * @Route ("/supprimerjoueurs/{id}",name="supprimerjoueurs")
     */
    function supprimerjoueurs(EquipeRepository $repository,Request $request,$id,UserRepository $rep)
    {
        $session=$request->getSession();
        $ide=$session->get('ide');
        $user=$rep->find($id);
        $equipe=$repository->find($ide);
        $equipe->removeUser($user);
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute("afficherjoueurs");

    }
    /**
     * @param EquipeRepository $repository
     * @param $id
     * @param Request $request
     * @param UserRepository $rep
     * @return RedirectResponse
     * @Route ("/supprimerjoueursback/{id}",name="supprimerjoueursback")
     */
    function supprimerjoueursback(EquipeRepository $repository,Request $request,$id,UserRepository $rep)
    {
        $session=$request->getSession();
        $ide=$session->get('ide');
        $user=$rep->find($id);
        $equipe=$repository->find($ide);
        $equipe->removeUser($user);
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute("afficherjoueursback");

    }




    /**
     * @param Request $request
     * @param UserRepository $rep
     * @return RedirectResponse
     * @Route ("/suppequipe",name="suppequipe")
     */
    function suppequipe(Request $request,UserRepository $rep)
    {
        $session=$request->getSession();
        $id=$session->get('id');
        $user=$rep->find($id);
        if($user->getEquipe()==Null_::class)
        { $user->getEquipe()->removeUser($user);

        $em=$this->getDoctrine()->getManager();
        $em->flush();}
        return $this->redirectToRoute("afficheruser");

    }


}
