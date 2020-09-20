<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Home extends AbstractController
{
    public function index(): Response
    {
        $number = random_int(0, 100);
        return $this->render('index.html.twig', [
            'number' => $number,
        ]);
    }
}
