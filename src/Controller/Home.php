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
      return $this->render('home.html.twig', [
          'number' => $number,
      ]);
  }
  public function list(): Response
  {
      $number = random_int(0, 100);
      return $this->render('list.html.twig', [
          'number' => $number,
      ]);
  }
  public function about(): Response
  {
      $number = random_int(0, 100);
      return $this->render('about.html.twig', [
          'number' => $number,
      ]);
  }
}
