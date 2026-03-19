<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
  #[Route('/')]
  public function homepage(): Response
  {
    $starshipCount = 457;
    $selectedShip = [
      'name' => 'Twigcelerator',
      'class' => 'Rally',
      'captain' => 'Hans Moleman',
      'status' => 'Owned',
    ];
    return $this->render('main/homepage.html.twig', [
      'numberOfStarships' => $starshipCount,
      'selectedShip' => $selectedShip,
    ]);
  }
}
