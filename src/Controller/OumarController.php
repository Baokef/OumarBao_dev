<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OumarController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(): Response
    {
        // return $this->render('oumar/index.html.twig', [
        //     'controller_name' => 'OumarController',
        // ]);
        return new Response("Na nga def Oumar?");
        return $this->json(['message' => 'Hello world']);
    }
}
