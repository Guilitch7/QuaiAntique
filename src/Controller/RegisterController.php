<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Openingdays;
use App\Form\RegisterType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController 
{

    // page d'inscription

    #[Route('/sinscrire', name: "sinscrire")]

   public function create(Request $request, ManagerRegistry $doctrine, UserPasswordHasherInterface $userPasswordHasher): Response
   {
        $register = new User($userPasswordHasher);
        $form = $this->createForm(RegisterType::class, $register);
        $form->handleRequest($request);

        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $doctrine->getManager();
            $entityManager->persist($register);
            $entityManager->flush();
            return $this->redirectToRoute('confirm_subscribe');
        } 

        return $this->render('home/register.html.twig', [
            "register_form" => $form->createView(),
            'title' => 'Sinscrire',
            'current_menu' => 'sinscrire',
            'horaires' => $isOpen,
        ]);
   }

   // page de confirmation d'inscription
   
   #[Route('/register_check', name: 'confirm_subscribe')]

   public function confirm_subscribe(ManagerRegistry $doctrine): Response
   {
        $repository = $doctrine->getRepository(Openingdays::class);
        $isOpen = $repository->findAll();

       return $this->render('home/register_check.html.twig', [
           'controller_name' => 'BookingController',
           'horaires' => $isOpen,
       ]);
   }
}