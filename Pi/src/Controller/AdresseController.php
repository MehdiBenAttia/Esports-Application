<?php

namespace App\Controller;
use App\Entity\Commande;

use App\Entity\Adresse;
use App\Form\AdresseType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class AdresseController extends AbstractController
{
    /**
     * @Route("/addresse", name="addadress")
     */
    public function index(): Response
    {
        return $this->render('adresse/index.html.twig', [
            'controller_name' => 'AdresseController',
        ]);
    }
    /**
     * @param Request $request
     * @param Response
     * @Route("/address", name="new_address")
     */
    public function createAddress(Request $request,SessionInterface $session )
    {
        $addresse = new Adresse();
        $form = $this->createForm(AdresseType::class, $addresse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($addresse);

            $entityManager->flush();

            $session->set('address', $addresse->getId());

            return $this->redirectToRoute('Ajoutcommande');

        }
        return $this->render('adresse/Ajouteraddress.html.twig', [
            'f' => $form->createView(),
        ]);
    }
}
