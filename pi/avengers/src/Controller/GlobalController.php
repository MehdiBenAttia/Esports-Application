<?php

namespace App\Controller;

use App\Repository\JeuxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GlobalController extends AbstractController
{
    /**
     * @Route("/", name="global")
     */
    public function index(JeuxRepository $repository): Response
    {
        $jeux= $repository->findAll();
        return $this->render('global/index.html.twig',['jeux'=>$jeux]);
    }
}
