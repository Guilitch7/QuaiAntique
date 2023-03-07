<?php

namespace App\Controller;

use App\Entity\Bookings;
use App\Form\BookingType;
use ArrayAccess;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;



class Booking extends AbstractController

{
    #[Route('/booking', name: 'book')]

    public function create(Request $request, ManagerRegistry $doctrine): Response
        {
             $register = new Bookings();
             $form = $this->createForm(BookingType::class, $register);
             $form->handleRequest($request);
             if ($form->isSubmitted() && $form->isValid()) {
                 $entityManager = $doctrine->getManager();
                 $entityManager->persist($register);
                 $entityManager->flush();
                 return $this->redirectToRoute('home');
             }    
             
        return $this->render('booking/home.html.twig', [
            "booking_form" => $form->createView(),
            'controller_name' => 'Booking',
            'title' => 'Réserver',
            'current_menu' => 'booking'
        ]);
    }
}