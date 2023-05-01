<?php

namespace App\Controller;

use App\Entity\Menu;
use App\Entity\Dishes;
use App\Entity\Openingdays;
use App\Entity\Formule;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    #[Route('/menus', name: 'menus')]

    public function readAll(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Menu::class);
        $menu1 = $repository->findBy(['id' => '1']);
        $menu2 = $repository->findBy(['id' => '2']);

        $repository = $doctrine->getRepository(Dishes::class);
        $dishes1c1 = $repository->findBy(array('DISHEScategory' => 'Entrée', 'DISHESmenusexpress' => 'true'));
        $dishes1c2 = $repository->findBy(array('DISHESmenusexpress' => 'true','DISHEScategory' => 'Plat'));
        $dishes1c3 = $repository->findBy(['DISHESmenusexpress' => 'true', 'DISHEScategory' => 'Dessert']);
        $dishes2c1 = $repository->findBy(['DISHESmenusmontagnard' => 'true', 'DISHEScategory' => 'Entrée']);
        $dishes2c2 = $repository->findBy(['DISHESmenusmontagnard' => 'true', 'DISHEScategory' => 'Plat']);
        $dishes2c3 = $repository->findBy(['DISHESmenusmontagnard' => 'true', 'DISHEScategory' => 'Dessert']);

        $repository = $doctrine->getRepository(Formule::class);
        $formula1 = $repository->findBy(['menu' => '1']);
        $formula2 = $repository->findBy(['menu' => '2']);

        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        return $this->render('menus/index.html.twig', [
            'menu1' => $menu1,
            'menu2' => $menu2,
            'dishes1c1' => $dishes1c1,
            'dishes1c2' => $dishes1c2,
            'dishes1c3' => $dishes1c3,
            'dishes2c1' => $dishes2c1,
            'dishes2c2' => $dishes2c2,
            'dishes2c3' => $dishes2c3,
            'formule1' => $formula1,
            'formule2' => $formula2,
            'controller_name' => 'MenusController',
            'title' => 'Nos menus',
            'current_menu' => 'menus',
            "horaires" => $isOpen,
        ]);
    }

    #[Route('/menu}', name:'carte')]
    public function menu(ManagerRegistry $doctrine): Response
     {
        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

         return $this->render('menus/carte.html.twig', [
            'controller_name' => 'MenuController',
            'title' => 'La carte',
            'current_menu' => 'carte',
            'horaires' => $isOpen,
        ]);
     }
}
