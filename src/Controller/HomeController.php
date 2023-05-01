<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use App\Entity\Dishes;
use App\Entity\Openingdays;
use App\Repository\DishesRepository;
use Doctrine\ORM\Query\ResultSetMapping;

class HomeController extends AbstractController
{
    /**
     * @var Environment
     */

    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    #[Route('/', name: 'home')]

    public function index(ManagerRegistry $doctrine): Response
        {
            $repository = $doctrine->getRepository(Openingdays::class);
            $isOpen = $repository->findAll();

            $category = 'Entrée';
            
            /** @var DishesRepository */
            $dishesRepository = $doctrine->getRepository(Dishes::class);
            $entree = $dishesRepository->getLastDishesRegistered($category);

            $category = 'Plat';
            $plats = $dishesRepository->getLastDishesRegistered($category);

            $category = 'Dessert';
            $desserts = $dishesRepository->getLastDishesRegistered($category);

            return $this->render('home/home.html.twig', [
                'horaires' => $isOpen,
                'entrees' => $entree,
                'plats' => $plats,
                'desserts' => $desserts,
                'current_menu' => 'home',
                'title' => 'Le quai antique - restaurant savoyard',
            ]);
        }
}