<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Entity\User;
use App\Form\ClassroomType;
use App\Form\MdpType;
use App\Form\PasswordType;
use App\Form\UserType;
use App\Repository\ClassroomRepository;
use App\Repository\EquipeRepository;
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
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Twilio\Rest\Client;


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
     * @Route("f/afficheuser",name="afficheruser")
     */

    public function AfficherUser(UserRepository $repository, Request $request, UserPasswordEncoderInterface $passwordEncoder, \Swift_Mailer $mailer)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();

        $users = $repository->findAll();
        $user1 = $this->get('security.token_storage')->getToken()->getUser();

        return $this->render('front/user/afficheuser.html.twig', [
            'u' => $users]);

    }

    /**
     * @param UserRepository $repository
     * @return Response
     * @Route("/back/afficheuserback",name="afficheruserback")
     */

    public function AfficherUserBack(UserRepository $repository, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $users = $repository->findAll();
        return $this->render('/back/userback/afficheuserback.html.twig', [
            'u' => $users]);

    }


    /**
     * @Route("/supprimeruser/{id}",name="d")
     * @param $id
     * @param UserRepository $repository
     * @return RedirectResponse
     */
    function Delete($id, UserRepository $repository)
    {
        $user = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('front/user/afficheruser');

    }

    /**
     * @Route("/back/supprimeruserback/{id}",name="dback")
     * @param $id
     * @param UserRepository $repository
     * @return RedirectResponse
     */
    function Deleteback($id, UserRepository $repository)
    {
        $user = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('afficheruserback');

    }


    /**
     * @param Request $request
     * @return Response
     * @Route("/AddUser",name="a")
     */
    function Add(Request $request, UserPasswordEncoderInterface $passwordEncoder, \Swift_Mailer $mailer)
    {
        $user = new User();
        $session = $request->getSession();


        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $session->set('ok', $passwordEncoder->encodePassword(
                $user,
                $form->get('password')->getData()
            ));

            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $user->setBlock(false);

            $em = $this->getDoctrine()->getManager();

            $message = (new \Swift_Message('Mail Admin'))
                ->setFrom('mohamedkhalil.trabelsi@esprit.tn')
                ->setTo($user->getEmail())
                ->setBody(
                    "Bienvenue Cher " . $user->getUsername() . " , L'equipe e-tsports vous souhaite une experience"
                );

            $mailer->send($message);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('app_login');
        }
        return $this->render('front/user/useradd.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     * @Route("/back/AddUserback",name="aback")
     */
    function AddBack(Request $request, UserPasswordEncoderInterface $userPasswordEncoder)
    {
        $user = new User();
        $session = $request->getSession();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        $user->setBlock(false);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('afficheruserback');
        }
        return $this->render('back/userback/useraddback.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/updatefront/{id}",name="m")
     */
    function modifier(UserRepository $repository, $id, Request $request, \Swift_Mailer $mailer,UserPasswordEncoderInterface $userPasswordEncoder)
    {
        $user = $repository->find($id);
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $p=$form->get('password')->getData();
        $p=$userPasswordEncoder->encodePassword($user,$p);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("afficheruser");
        }
        return $this->render("front/user/updateuser.html.twig", ['f' => $form->createView()]);

    }

    /**
     * @Route("/updatemdp/{id}",name="modifiermdp")
     */
    function modifiermdp(UserRepository $repository, $id, Request $request, \Swift_Mailer $mailer, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $repository->find($id);

        $form = $this->createForm(PasswordType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            echo "ahla ena user";
            $data = $form->get('password')->getData();
            $user->setPassword($passwordEncoder->encodePassword($user, $data));
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("app_login");
        }
        return $this->render("front/user/updatemdp..html.twig", ['f' => $form->createView()]);

    }

    /**
     * @Route("/mdp",name="mdp")
     */
    function mdp(UserRepository $repository, Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(MdpType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->get('email')->getData();
            $user = $repository->findByEmail($data);

            if ($user instanceof User) {
                $message = (new \Swift_Message('Mail Admin'))
                    ->setFrom('mohamedkhalil.trabelsi@esprit.tn')
                    ->setTo($user->getEmail())
                    ->setBody(" Salut cher Gamer, Accedez à ce lien pour changer votre mot de passe 
                     http://localhost:8000/updatemdp/" . $user->getId() . "    
                       Soyez mefiant"

                    );

                $mailer->send($message);

                return $this->redirectToRoute("mdp");
            } else return $this->redirectToRoute("app_login");


        }
        return $this->render("front/user/mdp.html.twig", ['f' => $form->createView()]);

    }


    /**
     * @Route("/back/updateback/{id}",name="mback")
     */
    function modifierback(UserRepository $repository, $id, Request $request)
    {
        $user = $repository->find($id);
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("afficheruserback");
        }
        return $this->render("back/userback/updateuserback.html.twig", ['f' => $form->createView()]);

    }

    /**
     * @param UserRepository $repository
     * @param $id
     * @return Response
     * @Route("/noteam/{id}",name="noteam")
     */
    public function displayuser(UserRepository $repository, Request $request, $id)
    {
        $session = $request->getSession();
        $session->set('idaz', $id);
        $users = $repository->Usernoteam();
        return $this->render('front/user/noteam.html.twig', [
            'u' => $users]);

    }

    /**
     * @Route("/searchuserajax ", name="userOffre")
     */
    public function searchOffreajax(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $requestString = $request->get('searchValue');
        $user = $repository->findUSERbyname($requestString);
        return $this->render('front/user/userajax.html.twig', [
            "u" => $user
        ]);
    }


    /**
     * @param UserRepository $repository
     * @param $id
     * @return Response
     * @Route("back/noteamback/{id}",name="noteamback")
     */
    public function displayuserback(UserRepository $repository, Request $request, $id)
    {
        $session = $request->getSession();
        $session->set('idaz', $id);
        $users = $repository->Usernoteam();
        return $this->render('back/userback/noteamback.html.twig', [
            'u' => $users]);

    }

    /**
     * @Route("/AllUsers",name="AllUsers")
     */
    public function AllUsers(NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $users = $repository->findAll();
        $noms = [];
        foreach ($users as $user) {
            if (empty($user->getEquipe())) {
                $nom = null;
            } else {
                $nom = $user->getEquipe()->__toString();
            }
            array_push($noms, $nom);
        }

        $jsonContent = $Normalizer->normalize(['user' => $users, 'nom' => $noms], 'json', ['groups' => 'post:read']);
        dump($jsonContent);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/User/{id}",name="Users")
     */
    public function UserId(Request $request, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/codename/kavi",name="kavi")
     */
    public function UpdateUserId(Request $request, NormalizerInterface $Normalizer): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($request->get('id'));
        $user->setNom($request->get('nom'));
        $user->setPrenom($request->get('prenom'));
        $user->setEmail($request->get('email'));
        $em->flush();
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups' => 'post:read']);
        dump($jsonContent);
        return new Response("Information updated successfully" . json_encode($jsonContent));
    }


    /**
     * @Route("/codename/DeleteUser",name="deleteuser")
     */
    public function deleteUserId(Request $request, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($request->get('id'));
        $em->remove($user);
        $em->flush();
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups' => 'post:read']);
        return new Response("User Deleted successfully" . json_encode($jsonContent));
    }


    /**
     * @Route("/auth",name="auth")
     */
    public function auth(Request $request, NormalizerInterface $Normalizer, UserPasswordEncoderInterface $passwordEncoder, UserRepository $rep, EquipeRepository $eqp)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $rep->findByUsername($request->get('username'));
        $nom = $user->getEquipe()->__toString();
        $test = $passwordEncoder->isPasswordValid($user, $request->get('password'));
        if ($test) {
            $jsonContent = $Normalizer->normalize([$user, $nom], 'json', ['groups' => 'post:read']);
            return new Response("User cnnected" . json_encode($jsonContent));
        } else {
            return new Response("?????");
        }


    }

    /**
     * @Route("/AddUserr",name="ad")
     */
    function AddUser(Request $request, UserPasswordEncoderInterface $passwordEncoder, NormalizerInterface $Normalizer)
    {
        $user = new User();
        $session = $request->getSession();
        $user->setNom($request->get('name'));
        $user->setPrenom($request->get('lastname'));
        $user->setEmail($request->get('email'));
        $user->setUsername($request->get('username'));
        $user->setSexe($request->get("sexe"));
        $user->setPassword($request->get('password'));
        $user->setPassword(
            $passwordEncoder->encodePassword(
                $user,
                $request->get('password')
            )
        );

        $em = $this->getDoctrine()->getManager();
        $session->set('ok', $user->getPassword());
        $em->persist($user);
        $em->flush();
        return new Response("user added succ");


    }

    /**
     * @param $id
     * @param UserRepository $repository
     * @return RedirectResponse
     * @Route("/block/{id}",name="block")
     * @throws \Twilio\Exceptions\ConfigurationException
     */
    function blockuser($id, UserRepository $repository)
    {
        $user = $repository->find($id);
        if ($user->getBlock() == 1)
            $user->setBlock(0);
        else {
            $user->setBlock(1);
        }
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        $sid    = "ACf128b1968196daf258d557171b7bb20e";
        $token  = "d9af8d4b77cf6466d2c3323676dcbf94";
        $twilio = new Client($sid, $token);
        $message = $twilio->messages
            ->create("+216".$user->getTel(),
                array(
                    "body" => "Votre compte a été bloquer par un administrateur",
                    "from" => "+19892652243"
                )
            );

        return $this->redirectToRoute("afficheruserback");

    }

    /**
     * @return Response
     * @Route("/blocked",name="blocked")
     */
    function blocked()
    {
        return $this->render('front/user/block.html.twig');
    }

}
