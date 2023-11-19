<?php

namespace App\Controller;

use App\Repository\EntiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EntiteRepository $e_rep): Response
    {
        $entites = $e_rep ->findBy([], ['name'=>'ASC']);
        return $this->render('home/index.html.twig', [
            'entites' => $entites,
        ]);
    }
}
