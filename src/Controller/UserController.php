<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Entity\User;
use App\Form\ClassroomType;
use App\Form\UserType;
use App\Repository\ClassroomRepository;
use App\Repository\UserRepository;
use mysql_xdevapi\Session;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }


    /**
     * @param UserRepository $repository
     * @return Response
     * @Route("/afficheuser",name="afficheruser")
     */

    public function AfficherUser(UserRepository $repository,Request $request)
    {
        $em=$this->getDoctrine()->getManager();

       $users=$repository->findAll();
        return $this->render('user/afficheuser.html.twig', [
            'u' => $users]);

    }
    /**
     * @param UserRepository $repository
     * @return Response
     * @Route("/afficheuserback",name="afficheruserback")
     */

    public function AfficherUserBack(UserRepository $repository,Request $request)
    {
        $em=$this->getDoctrine()->getManager();

        $users=$repository->findAll();
        return $this->render('userback/afficheuserback.html.twig', [
            'u' => $users]);

    }

    /**
     * @Route("/supprimeruser/{id}",name="d")
     * @param $id
     * @param UserRepository $repository
     * @return RedirectResponse
     */
    function Delete ($id,UserRepository  $repository)
    {$user=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('afficheruser');

    }
    /**
     * @Route("/supprimeruserback/{id}",name="dback")
     * @param $id
     * @param UserRepository $repository
     * @return RedirectResponse
     */
    function Deleteback ($id,UserRepository  $repository)
    {$user=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('afficheruserback');

    }


    /**
     * @param Request $request
     * @return Response
     * @Route("/AddUser",name="a")
     */
    function Add(Request $request,UserPasswordEncoderInterface $userPasswordEncoder)
    {
        $user=new User();
        $session=$request->getSession();



        $form=$this->createForm(UserType::class,$user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('afficheruser');
        }
        return $this->render('user/useradd.html.twig',[
            'form'=>$form->createView()
        ]);
    }
    /**
     * @param Request $request
     * @return Response
     * @Route("/AddUserback",name="aback")
     */
    function AddBack(Request $request,UserPasswordEncoderInterface $userPasswordEncoder)
    {
        $user=new User();
        $session=$request->getSession();



        $form=$this->createForm(UserType::class,$user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('afficheruserback');
        }
        return $this->render('userback/useraddback.html.twig',[
            'form'=>$form->createView()
        ]);
    }
    /**
     * @Route("/update/{id}",name="m")
     */
    function modifier (UserRepository $repository,$id,Request $request)
    {
        $user=$repository->find($id);
        $form=$this->createForm(UserType::class,$user);

        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("afficheruser");
        }
        return $this->render("/user/updateuser.html.twig",['f'=>$form->createView()]);

    }
    /**
     * @Route("/updateback/{id}",name="mback")
     */
    function modifierback (UserRepository $repository,$id,Request $request)
    {
        $user=$repository->find($id);
        $form=$this->createForm(UserType::class,$user);

        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("afficheruserback");
        }
        return $this->render("/userback/updateuserback.html.twig",['f'=>$form->createView()]);

    }

    /**
     * @param UserRepository $repository
     * @return Response
     * @Route("/noteam/{id}",name="noteam")
     * @param $id
     */
    public function displayuser(UserRepository $repository,Request $request,$id)
    {
        $session=$request->getSession();
        $session->set('idaz',$id);
        $users=$repository->Usernoteam();
        return $this->render('user/noteam.html.twig', [
            'u' => $users]);

    }
    /**
     * @param UserRepository $repository
     * @return Response
     * @Route("/noteamback/{id}",name="noteamback")
     * @param $id
     */
    public function displayuserback(UserRepository $repository,Request $request,$id)
    {
        $session=$request->getSession();
        $session->set('idaz',$id);
        $users=$repository->Usernoteam();
        return $this->render('userback/noteamback.html.twig', [
            'u' => $users]);

    }



}
