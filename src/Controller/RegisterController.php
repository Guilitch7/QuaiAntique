<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Connect;
use App\Form\RegisterType;
use App\Form\ConnectType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController 
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
     * @Route("/seconnecter", name="seconnecter")
     * @return Response
     */
    public function connect(Request $request): Response
    {
         $register = new Connect();
         $form = $this->createForm(ConnectType::class, $register);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
             dump($register);
         } 
         return $this->render('home/connect.html.twig', [
             "connect_form" => $form->createView(),
             'title' => 'seconnecter',
             'current_menu' => 'seconnecter'
         ]);
    }
}