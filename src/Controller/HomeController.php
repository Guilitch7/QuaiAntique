<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use App\Entity\Dishes;

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
            $repository = $doctrine->getRepository(Dishes::class);
            $dishes = $repository->findAll();
            return $this->render('home/home.html.twig', [
                'plats' => $dishes,
                'title' => 'Le quai antique - restaurant savoyard',
            ]);
        }

}