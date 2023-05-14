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
    #[Route('/api/resa/api-liste', name: 'liste_resa', methods:"GET")]

    public function liste(BookingsRepository $bookingsRepo)
    {
        $bookings = $bookingsRepo->apiFindAll();
        
        //utilisation d'un encodeur JSON
        $encoders = [new JsonEncoder()];

        // instanciation du normalizer pour covertir la collection en tableau
        $normalizers = [new ObjectNormalizer()];

        // conversion en Json
        // instanciation  du convertisseur
        $serializer = new Serializer($normalizers, $encoders);

        // conversion en Json
        $jsonContent = $serializer->serialize($bookings, 'json', ['circular_reference_handler' => function($object){
            return $object->getId();
                    }
                ]);

        // instaciation de la réponse
        $response = new Response($jsonContent);

        // en-tête http ajoutée
        $response->headers->set('Content-Type', 'application/json');

        return $response;

    }
}
