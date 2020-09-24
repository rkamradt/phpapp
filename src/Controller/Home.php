<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\WinePairingRepository;
use App\Entity\WinePairing;

class Home extends AbstractController
{
  public function index(): Response
  {
      return $this->render('home.html.twig', []);
  }
  public function list(): Response
  {
    $wineList = $this->getDoctrine()
        ->getRepository(WinePairing::class)
        ->findAll();
      return $this->render('list.html.twig', [
        'wineList' => $wineList,
      ]);
  }
  public function about(): Response
  {
      return $this->render('about.html.twig', []);
  }
}
