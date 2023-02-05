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