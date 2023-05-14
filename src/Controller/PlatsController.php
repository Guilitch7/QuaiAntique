<?php

namespace App\Controller;

use App\Entity\Dishes;
use App\Entity\Openingdays;
use App\Form\DishesType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class PlatsController extends AbstractController
{

    // page création d'un plat

    #[Route('/plats_admin', name: 'plats_admin')]
   
    public function create(Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger): Response
    {
            $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
            $createDish = new Dishes();
            $form = $this->createForm(DishesType::class, $createDish);
            $form->handleRequest($request);

            $repository = $doctrine->getRepository(Openingdays::class);
            $isOpen = $repository->findAll();

            if ($form->isSubmitted() && $form->isValid()) {

                $image = $form->get('DISHESphoto')->getData();

              if ($image) {
                    $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();
                    try {
                        $image->move(
                            $this->getParameter('uploads'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        dump($e);
                    }
                    $createDish->setDISHESphoto($newFilename);
                }


                $entityManager = $doctrine->getManager();
                $entityManager->persist($createDish);
                $entityManager->flush();
                return $this->redirectToRoute('plats_confirm');
            } 
            return $this->render('home/plats_admin.html.twig', [
                "horaires" => $isOpen,
                "dishes_form" => $form->createView(),
                'title' => 'Enregistrer un plat',
                'current_menu' => 'admin'
            ]);
    }

    // page récapitulatif plats

    #[Route('/plats', name: 'plats')]

    public function plats(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Dishes::class);
        $dishes = $repository->findAll();

        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        return $this->render('home/plats.html.twig', [
            'plats' => $dishes,
            'controller_name' => 'PlatsController',
            'title' => 'Nos plats',
            'current_menu' => 'plats',
            'horaires' => $isOpen,
        ]);
    }

    // page présentation des entrées

    #[Route('/plats/entree', name: 'entrées')]

    public function entree(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Dishes::class);
        $entree = $repository->findBy(['DISHEScategory' => 'Entrée']);

        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        return $this->render('home/plats_entrée.html.twig', [
            'entrees' => $entree,
            'controller_name' => 'PlatsController',
            'title' => 'Nos entrées',
            'current_menu' => 'plats',
            'horaires' => $isOpen,
        ]);
    }


    // page présentation des spécialités

    #[Route('/plats/specialite', name: 'spécialités')]

    public function speciality(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Dishes::class);
        $specialites = $repository->findBy(['DISHEStype' => 'Spécialité']);

        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        return $this->render('home/plats_spécialités.html.twig', [
            'specialites' => $specialites,
            'controller_name' => 'PlatsController',
            'title' => 'Nos spécialités',
            'current_menu' => 'plats',
            'horaires' => $isOpen,
        ]);
    }

    // page présentation des viandes

    #[Route('/plats/viandes', name: 'viandes')]

    public function meat(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Dishes::class);
        $meat = $repository->findBy(['DISHEStype' => 'Viande']);

        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        return $this->render('home/plats_viandes.html.twig', [
            'viandes' => $meat,
            'controller_name' => 'PlatsController',
            'title' => 'Nos viandes',
            'current_menu' => 'plats',
            'horaires' => $isOpen,
        ]);
    }

    // page présentation des poissons

    #[Route('/plats/poissons', name: 'poissons')]

    public function fish(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Dishes::class);
        $fish = $repository->findBy(['DISHEStype' => 'Poisson']);

        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        return $this->render('home/plats_poissons.html.twig', [
            'poissons' => $fish,
            'controller_name' => 'PlatsController',
            'title' => 'Nos poissons',
            'current_menu' => 'plats',
            'horaires' => $isOpen,
        ]);
    }

    // page présentation des desserts

    #[Route('/plats/dessert', name: 'desserts')]

    public function desert(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Dishes::class);
        $desert = $repository->findBy(['DISHEScategory' => 'Dessert']);

        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        return $this->render('home/plats_desserts.html.twig', [
            'desserts' => $desert,
            'controller_name' => 'PlatsController',
            'title' => 'Nos desserts',
            'current_menu' => 'plats',
            'horaires' => $isOpen,
        ]);
    }

    // suppression d'un plat à partir de page récap plats

    #[Route('/plats/delete/{id<\d+>}', name:"delete-dish")]
    public function delete(Dishes $dishes, ManagerRegistry $doctrine): Response
     {
         $em = $doctrine->getManager();
         $em->remove($dishes);
         $em->flush();
         return $this->redirectToRoute('plats');
     }

    // modifcation d'un plat à partir de page récap plats

     #[Route('/plats/edit/{id<\d+>}', name:"edit-dish")]
     public function update(Request $request, Dishes $createDish, ManagerRegistry $doctrine, SluggerInterface $slugger): Response
      {
         $form = $this->createForm(DishesType::class, $createDish);
         $form->handleRequest($request);

         $repository = $doctrine->getRepository(Openingdays::class);
         $isOpen = $repository->findAll();

         if ($form->isSubmitted() && $form->isValid()) {

            $image = $form->get('DISHESphoto')->getData();

            if ($image) {
                  $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                  $safeFilename = $slugger->slug($originalFilename);
                  $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();
                  try {
                      $image->move(
                          $this->getParameter('uploads'),
                          $newFilename
                      );
                  } catch (FileException $e) {
                      dump($e);
                  }
                  $createDish->setDISHESphoto($newFilename);
              }

             $entityManager = $doctrine->getManager();
             $entityManager->flush();
             return $this->redirectToRoute('plats');
      }
        return $this->render('home/plats_admin.html.twig', 
        [
        "horaires" => $isOpen,
        "dishes_form" => $form->createView(),
        'title' => 'Enregistrer un plat',
        'current_menu' => 'admin'
        ]);
      }

      // page de confirmation de bonne création d'un plat

      #[Route('/plats_check', name: 'plats_confirm')]

      public function confirm_subscribe(ManagerRegistry $doctrine): Response
      {
           $repository = $doctrine->getRepository(Openingdays::class);
           $isOpen = $repository->findAll();
   
          return $this->render('home/plats_check.html.twig', [
              'controller_name' => 'BookingController',
              'horaires' => $isOpen,
          ]);
      }
}