<?php

namespace App\Controller;

use App\Model\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipAPIController extends AbstractController
{
  #[Route('/api/starships')]
  public function getCollection(): Response
  {
    $starships = [
      new Starship(
        1,
        'Twigcelerator',
        'Rally',
        'Hans Moleman',
        'Owned'
      ),
      new Starship(
        1,
        'Twigcelerator2 ',
        'Indoor',
        'Gary',
        'For Sale'
      ),
      new Starship(
        1,
        'Twigcelerator 3',
        'Snow',
        'Lee Sharp',
        'Under Maintenance'
      ),
    ];

    return $this->json($starships);
  }
}
