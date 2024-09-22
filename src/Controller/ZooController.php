<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZooController extends AbstractController
{
    #[Route('/zoo', name: 'zoo_home')]
    public function index(): Response
    {
        // Ici on rend la vue 'home.html.twig' que nous avons créée plus tôt
        return $this->render('zoo/home.html.twig', [
            'controller_name' => 'ZooController',
        ]);
    }
}
