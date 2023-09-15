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
use Symfony\Component\Serializer\SerializerInterface;

class BookingController extends AbstractController
{

    // page de réservation

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
            return $this->redirectToRoute('confirm_booking');
        }
        
        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        return
        $this->render('booking/book.html.twig',[
            'title' => 'Réserver',
            'current_menu' => 'Réserver',
            "booking_form" => $form->createView(),
            "horaires" => $isOpen,]);
            
    }

    //page de récapitulatif des réservations à venir

    #[Route('/admin_resa', name: 'resa_admin')]

    public function newBookingsDisplayed(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Bookings::class);
        $newBookings = $repository->findAll();

        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        return $this->render('admin/reservations.html.twig', [
            'horaires' => $isOpen,
            'Bookings' => $newBookings,
            'controller_name' => 'BookingController',
            'current_menu' => 'admin',
            'title' => 'Réservations à venir',
        ]);
    }

    // Page de confirmation de réservation prise en compte
    
    #[Route('/booking_check', name: 'confirm_booking')]

    public function confirm_booking(ManagerRegistry $doctrine): Response
    {
         $repository = $doctrine->getRepository(Openingdays::class);
         $isOpen = $repository->findAll();
 
        return $this->render('booking/booking_check.html.twig', [
            'controller_name' => 'BookingController',
            'horaires' => $isOpen,
        ]);
    }
}