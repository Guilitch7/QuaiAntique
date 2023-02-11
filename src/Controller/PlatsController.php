<?php

namespace App\Controller;

use App\Entity\Dishes;
use App\Form\DishesType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PlatsController extends AbstractController
{

    #[Route('/plats_adm', name: 'plats_adm')]
   
   public function create(Request $request, ManagerRegistry $doctrine): Response
    {
         $createDish = new Dishes();
         $form = $this->createForm(DishesType::class, $createDish);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
             $entityManager = $doctrine->getManager();
             $entityManager->persist($createDish);
             $entityManager->flush();
             return $this->redirectToRoute('plats');
         } 
         return $this->render('home/plats_adm.html.twig', [
             "dishes_form" => $form->createView(),
             'title' => 'Enregistrer un plat',
             'current_menu' => 'plats_adm'
         ]);
    }

    #[Route('/plats', name: 'plats')]

    public function plats(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Dishes::class);
        $dishes = $repository->findAll();
        return $this->render('home/plats.html.twig', [
            'plats' => $dishes,
            'controller_name' => 'PlatsController',
            'title' => 'Nos plats',
            'current_menu' => 'plats'
        ]);
    }

    #[Route('/plats/entree', name: 'entrées')]

    public function entree(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Dishes::class);
        $entree = $repository->findBy(['DISHEScategory' => 'Entrée']);
        return $this->render('home/plats_entrée.html.twig', [
            'entrees' => $entree,
            'controller_name' => 'PlatsController',
            'title' => 'Nos entrées',
            'current_menu' => 'plats'
        ]);
    }

    #[Route('/plats/specialite', name: 'spécialités')]

    public function speciality(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Dishes::class);
        $specialites = $repository->findBy(['DISHEStype' => 'Spécialité']);
        return $this->render('home/plats_spécialités.html.twig', [
            'specialites' => $specialites,
            'controller_name' => 'PlatsController',
            'title' => 'Nos spécialités',
            'current_menu' => 'plats'
        ]);
    }

    #[Route('/plats/viandes', name: 'viandes')]

    public function meat(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Dishes::class);
        $meat = $repository->findBy(['DISHEStype' => 'Viande']);
        return $this->render('home/plats_viandes.html.twig', [
            'viandes' => $meat,
            'controller_name' => 'PlatsController',
            'title' => 'Nos viandes',
            'current_menu' => 'plats'
        ]);
    }

    #[Route('/plats/poissons', name: 'poissons')]

    public function fish(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Dishes::class);
        $fish = $repository->findBy(['DISHEStype' => 'Poisson']);
        return $this->render('home/plats_poissons.html.twig', [
            'poissons' => $fish,
            'controller_name' => 'PlatsController',
            'title' => 'Nos poissons',
            'current_menu' => 'plats'
        ]);
    }

    #[Route('/plats/dessert', name: 'desserts')]

    public function desert(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Dishes::class);
        $desert = $repository->findBy(['DISHEScategory' => 'Dessert']);
        return $this->render('home/plats_desserts.html.twig', [
            'desserts' => $desert,
            'controller_name' => 'PlatsController',
            'title' => 'Nos desserts',
            'current_menu' => 'plats'
        ]);
    }

    #[Route('/plats/boisson', name: 'boissons')]

    public function drinks(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Dishes::class);
        $drinks = $repository->findBy(['DISHEScategory' => 'Boissons']);
        return $this->render('home/plats_boissons.html.twig', [
            'boissons' => $drinks,
            'controller_name' => 'PlatsController',
            'title' => 'Nos boissons',
            'current_menu' => 'plats'
        ]);
    }

    #[Route('/plats/delete/{id<\d+>}', name:"delete-dish")]
    public function delete(Dishes $dishes, ManagerRegistry $doctrine): Response
     {
         $em = $doctrine->getManager();
         $em->remove($dishes);
         $em->flush();
         return $this->redirectToRoute('plats');
     }

     #[Route('/plats/edit/{id<\d+>}', name:"edit-dish")]
     public function update(Request $request, Dishes $createDish, ManagerRegistry $doctrine): Response
      {
         $form = $this->createForm(DishesType::class, $createDish);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
             $entityManager = $doctrine->getManager();
             $entityManager->flush();
             return $this->redirectToRoute('plats');
      }
        return $this->render('home/plats_adm.html.twig', 
        [
        "dishes_form" => $form->createView(),
        'title' => 'Enregistrer un plat',
        'current_menu' => 'plats_adm'
        ]);
      }
}