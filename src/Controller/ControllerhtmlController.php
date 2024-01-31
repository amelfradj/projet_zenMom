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
    }ch
}

// #[Route('/registration', name: 'app_registration', methods: ['GET', 'POST'])]
// public function Registration(): Response
// {
//     $utilisateur = new Utilisateur();
//     $form = $this->createForm(RegistrationType::class, $utilisateur);
//     return $this->render('controllerhtml/compte1.html.twig', [
//         'form' => $form->createView(),
//     ]);
// }
