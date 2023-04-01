<?php

namespace App\Controller;

use App\Entity\Bookings;
use App\Entity\Openingdays;
use App\Form\BookingType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BookingController extends AbstractController
{

    #[Route('/booking', name: 'book')]

    public function new(Request $request, ManagerRegistry $doctrine): Response
    {
        $booking = new Bookings();
        $form = $this->createForm(BookingType::class, $booking);
        $form->handleRequest($request);

        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $doctrine->getManager();
            $entityManager->persist($booking);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }
        
        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        return
        $this->render('booking/home.html.twig',[
            'title' => 'Réserver',
            'current_menu' => 'Réserver',
            "booking_form" => $form->createView(),
            "horaires" => $isOpen,]);
            
    }

    #[Route('/resa_admin', name: 'resa_admin')]

    public function newBookings(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Bookings::class);
        $newBookings = $repository->findAll();

        return $this->render('admin/resa.html.twig', [
            'Bookings' => $newBookings,
            'controller_name' => 'BookingController',
            'title' => 'Réservations à venir',
        ]);
    }
}