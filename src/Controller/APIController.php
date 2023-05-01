<?php

namespace App\Controller;

use App\Repository\BookingsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class APIController extends AbstractController
{
    #[Route('/api/resa/liste', name: 'liste_resa', methods:"GET")]

    public function liste(BookingsRepository $bookingsRepo)
    {
        $bookings = $bookingsRepo->apiFindAll();
        
        $encoders = [new JsonEncoder()];

        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        $jsonContent = $serializer->serialize($bookings, 'json', ['circular_reference_handler' => function($object){
            return $object->getId();
                    }
                ]);

        $response = new Response($jsonContent);

        $response->headers->set('Content-Type', 'application/json');

        return $response;

    }
}
