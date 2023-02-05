<?php

namespace App\Controller;

use App\Entity\Menus;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenusController extends AbstractController
{
    #[Route('/menus', name: 'menus')]

    public function readAll(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Menus::class);
        $menus = $repository->findAll();
        return $this->render('menus/index.html.twig', [
            'menus' => $menus,
            'controller_name' => 'MenusController',
            'title' => 'Nos menus',
            'current_menu' => 'menus'
        ]);
    }
}
