<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
  public function __construct(private LoggerInterface $logger)
  {

  }
  public function findAll(): array
  {
    $this->logger->info('Starships.');
    return [
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
  }

  public function find(int $id): ?Starship
  {
    foreach ($this->findAll() as $starship) {
      if ($starship->getId() === $id) {
        return $starship;
      }
    }
    return null;
  }
}