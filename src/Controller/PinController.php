<?php

namespace App\Controller;

use App\Entity\Pin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinController extends AbstractController
{
    /**
     * @Route("/pin", name="app_pin")
     */
    public function index(): Response
    {
        $pin = new Pin;
        dump($pin);
        #dd($pin);

        return $this->render('pin/index.html.twig', [
            'controller_name' => 'PinController',
        ]);
    }
}
