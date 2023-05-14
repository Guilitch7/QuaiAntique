<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Openingdays;
use App\Form\OpeningType;

class AdminController extends AbstractController
{
    // page admin de gestion des horaires

    #[Route('admin/horaires', name: 'horaires')] 
    public function horaires(Request $request, ManagerRegistry $doctrine): Response
    {
        $openings = new Openingdays();
        $form = $this->createForm(OpeningType::class, $openings);
        $form->handleRequest($request);

        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $doctrine->getManager();
            $entityManager->persist($openings);
            $entityManager->flush();
            return $this->redirectToRoute('horaires');
        }    

        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();
        
        return $this->render('admin/horaires.html.twig', [
            "horaires" => $isOpen,
            "opening_form" => $form->createView(),
            'controller_name' => 'AdminController',
            'title' => 'Gérer les horaires',
            'current_menu' => 'admin',
            'horaires' => $isOpen
        ]);
    }

    
    // modification d'un horaire ou disponibilités

    #[Route('admin/horaires/{id<\d+>}', name:"edit-horaires")]

    public function update(Request $request, Openingdays $openings, ManagerRegistry $doctrine): Response
     {
        $form = $this->createForm(OpeningType::class, $openings);
        $form->handleRequest($request);

        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $doctrine->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('horaires');
     }

     return $this->render('admin/edit_horaires.html.twig', [
        "horaires" => $isOpen,
        "opening_form" => $form->createView(),
        'controller_name' => 'AdminController',
        'title' => 'Gérer les horaires',
        'current_menu' => 'admin',
    ]);
    }
}