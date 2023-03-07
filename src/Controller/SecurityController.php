<?php

namespace App\Controller;

use App\Form\LoginType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController 
{
    #[Route('/login', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils, Request $request): Response
    {
         $error = $authenticationUtils->getLastAuthenticationError();
         $lastUsername = $authenticationUtils->getLastUsername();

         $form = $this->createForm(LoginType::class);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
             
         } 
         return $this->render('home/login.html.twig', [
            "login_form" => $form->createView(),
            'title' => 'se connecter',
            'current_menu' => 'login',
            'last_username' => $lastUsername,
            'error'        => $error
         ]);
    }

    #[Route('/logout', name: 'logout')]
    public function logout()
    {
    }
}