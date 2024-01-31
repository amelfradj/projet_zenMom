<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerhtmlController extends AbstractController
{
    #[Route('/', name: 'app_controllerhtml', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('controllerhtml/index.html.twig', [
            'controller_name' => 'ControllerhtmlController',
        ]);
    }
    
}
