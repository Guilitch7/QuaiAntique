<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Connect;
use App\Form\RegisterType;
use App\Form\LoginType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController 
{
    /**
     * @Route("/sinscrire", name="sinscrire")
     * @return Response
     */
   public function create(Request $request): Response
   {
        $register = new Post();
        $form = $this->createForm(RegisterType::class, $register);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            dump($register);
        } 
        return $this->render('home/register.html.twig', [
            "register_form" => $form->createView(),
            'title' => 'Sinscrire',
            'current_menu' => 'sinscrire'
        ]);
   }
   /**
     * @Route("/login", name="login")
     * @return Response
     */
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
             'error'        => $error,
             'form' => $form->createView()
         ]);
    }
}