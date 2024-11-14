<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DvController extends AbstractController
{
    #[Route('/dv', name: 'app_dv')]
    public function index(): Response
    {
        return $this->render('dv/index.html.twig', [
            'controller_name' => 'DvController',
        ]);
    }
}
