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
    #[Route('/app_admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'title' => 'Administration',
            'current_menu' => 'admin'
        ]);
    }

    #[Route('admin/horaires', name: 'horaires')] 
    public function horaires(Request $request, ManagerRegistry $doctrine): Response
    {
        $openings = new Openingdays();
        $form = $this->createForm(OpeningType::class, $openings);
        $form->handleRequest($request);

        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $doctrine->getManager();
            $entityManager->persist($openings);
            $entityManager->flush();
            return $this->redirectToRoute('horaires');
        }    

        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();
        
        return $this->render('admin/horaires.html.twig', [
            "opening_form" => $form->createView(),
            'controller_name' => 'AdminController',
            'title' => 'Gérer les horaires',
            'current_menu' => 'admin',
            'horaires' => $isOpen
        ]);
    }

    #[Route('admin/horaires/{id<\d+>}', name:"edit-horaires")]

    public function update(Request $request, Openingdays $openings, ManagerRegistry $doctrine): Response
     {
        $form = $this->createForm(OpeningType::class, $openings);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        //    $slotLunch = [];
        //    $slotLunchOpen = getOpenLunch();
        //    $slotLunchClose = getcloselunch();
        //    $i = 0;
        //    while (($slotLunchClose - $SlotLunchOpen - 3600 + $i) > 0) {
        //    $slotLunch = $SlotLunchOpen + $i;
        //    $i+900;
        //    }
        //    $entityManager->setslotLunch($slotLunch);
            $entityManager = $doctrine->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('horaires');
     }

     return $this->render('admin/edit_horaires.html.twig', [
        "opening_form" => $form->createView(),
        'controller_name' => 'AdminController',
        'title' => 'Gérer les horaires',
        'current_menu' => 'admin',
    ]);
    }
}