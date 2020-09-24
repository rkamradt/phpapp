<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
  public function add(Request $request)
  {
      // creates a task and gives it some dummy data for this example
      $wine = new WinePairing();

      $form = $this->createFormBuilder($wine)
          ->add('wine', TextType::class)
          ->add('wine_description', TextType::class)
          ->add('cheese', TextType::class)
          ->add('cheese_description', TextType::class)
          ->add('pairing_notes', TextType::class)
          ->add('save', SubmitType::class, ['label' => 'Create Pairing'])
          ->getForm();

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
          $task = $form->getData();

          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->persist($task);
          $entityManager->flush();

          return $this->redirectToRoute('list');
      }

      return $this->render('add.html.twig', [
          'form' => $form->createView(),
      ]);
  }
}
