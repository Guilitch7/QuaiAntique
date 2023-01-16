<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PlatsController extends AbstractController
{
    /**
     * @Route("/plats", name="plats")
     * @return Response
     */
   public function index(): Response
    {
        return $this->render("home/plats.html.twig", [
            'title' => 'Nos plats',
            'current_menu' => 'plats'
        ]);
    }
}