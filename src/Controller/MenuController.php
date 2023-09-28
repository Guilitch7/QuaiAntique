<?php

namespace App\Controller;

use App\Repository\MenuRepository;
use App\Repository\FormuleRepository;
use App\Repository\DishesRepository;
use App\Entity\Openingdays;
use App\Entity\Dishes;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{

    // page menus 

    #[Route('/menus', name: 'menus')]

    public function readAll(ManagerRegistry $doctrine, MenuRepository $menuRepo, FormuleRepository $formuleRepo, DishesRepository $dishesRepo): Response
    {
        $menus = $menuRepo->getMenuDishes();

        $dishes = $dishesRepo->dishesMenu();

        $formulesMenus = $formuleRepo->formuleMenu();

        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        return $this->render('menus/menu.html.twig', [
            'controller_name' => 'MenusController',
            'title' => 'Nos menus',
            'current_menu' => 'menus',
            "horaires" => $isOpen,
            "menus" => $menus,
            "dishes" => $dishes,
            "formulesMenus" => $formulesMenus,
        ]);
    }

    // page carte

    #[Route('/menu}', name:'carte')]
    public function menu(ManagerRegistry $doctrine, DishesRepository $dishesRepo): Response
     {
        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        $repositoryDishes = $doctrine->getRepository(Dishes::class);
        $dishes = $repositoryDishes->findAll();
   
        $categories = $dishesRepo->category();

         return $this->render('menus/carte.html.twig', [
            'controller_name' => 'MenuController',
            'title' => 'La carte',
            'current_menu' => 'carte',
            'horaires' => $isOpen,
            'dishes' => $dishes,
            "categories" => $categories,
        ]);
     }
}
